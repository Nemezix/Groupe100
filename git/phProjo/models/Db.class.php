<?php
class Db
{
    private static $instance = null;
    private $_db;

    private function __construct()
    {
        try {
            $this->_db = new PDO('mysql:host=localhost;dbname=projectbd;charset=utf8', 'root', '');
            $this->_db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			$this->_db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
        } 
		catch (PDOException $e) {
		    die('Erreur de connexion à la base de données : '.$e->getMessage());
        }
    }

	# Pattern Singleton
    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new Db();
        }
        return self::$instance;
    }

    #QUERY
    public function pswdCheck($login, $pw){

        #retrive hashcode
        $query = 'SELECT pswd FROM members WHERE mail=:login';
        $ps = $this->_db->prepare($query);
        $ps->bindValue(':login', $login);
        $ps->execute();

        if($ps->rowcount() == 0)
            return false;

        $hash = $ps->fetch()->pswd;

        return password_verify($pw, $hash);
    }

    public function select_member($login){

        $query = 'SELECT memberid, firstname, surname, numtel, adress, bankid, trainingid, rights, title, pswd FROM members WHERE mail=?';
        $ps = $this->_db->prepare($query);
        $ps->bindValue(1, $login);
        $ps->execute();

        $ps = $ps->fetch(PDO::FETCH_BOTH);

        $member_id = $ps[0];
        $first_name = $ps[1];
        $sur_name = $ps[2];
        $num_tel = $ps[3];
        $user_mail = $login;
        $user_adress = $ps[4];
        $bank_id = $ps[5];
        $training_id = $ps[6];
        $user_rights = $ps[7];
        $user_title = $ps[8];
        $user_pswd = $ps[9];

        $user = new Member($member_id, $first_name, $sur_name, $num_tel, $user_mail, $user_adress, $bank_id, $training_id, $user_rights, $user_title, $user_pswd);

        return $user;
    }
    
    public function retrieve_surname($login){

        $query = 'SELECT surname FROM members WHERE mail=?';
        $ps = $this->_db->prepare($query);
        $ps->bindValue(1, $login);
        $ps->execute();

        $ps->fetch();

        return $ps;
    }

     public function submit_new_member($insc){

        $query = 'INSERT INTO members (firstname, surname, numtel, mail, adress, bankid, pswd) VALUES(?, ?, ?, ?, ?, ?, ?)';
        $answ = $this->_db->prepare($query);
        $answ->bindValue(1, $insc['name']);
        $answ->bindValue(2, $insc['surname']);
        $answ->bindValue(3, $insc['numtel']);
        $answ->bindValue(4, $insc['email']);
        $answ->bindValue(5, $insc['adress']);
        $answ->bindValue(6, $insc['bankid']);
        $answ->bindValue(7, password_hash($insc['pswd'], PASSWORD_DEFAULT));
        $answ->execute();

        return true;
    } 

    public function rights_check($login, $rights){

        $query = 'SELECT rights FROM members WHERE mail=?';
        $rw = $this->_db->prepare($query);
        $rw->bindValue(1,$login);
        $rw->execute();

        $rw = $rw->fetch()->rights;

        return ($rw>=$rights);
    }
}
?>