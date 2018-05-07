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

        $query = 'SELECT * FROM members WHERE mail=:login';
        $ps = $this->_db->prepare($query);
        $ps->bindValue(':login', $login);
        $ps->execute();

        $ps->fetch();

        return $ps->mail;
    }
    
    
}
?>