
CREATE TABLE members (
    memberid  mediumint  NOT NULL AUTO_INCREMENT PRIMARY KEY,
    firstname varchar(50) NOT NULL,
    surname varchar(50)   NOT NULL,
    numtel varchar(20)   NOT NULL,
    mail varchar(100)   NOT NULL,
    adress varchar(255)   NOT NULL,
    bankid varchar(29)   NOT NULL,
    trainingid int  DEFAULT 1 NOT NULL,
    rights mediumint  DEFAULT 0 NOT NULL,
    title varchar(30)   NULL,
    pswd varchar(30)   NOT NULL
);


CREATE TABLE fee_years(
    payment_year  mediumint   NOT NULL PRIMARY KEY,
    price mediumint   NOT NULL
);

CREATE TABLE fees_paid (
    discretepk  mediumint NOT NULL AUTO_INCREMENT PRIMARY KEY,
    payment_year mediumint  NOT NULL,
    memberid int   NOT NULL,
    amount mediumint   NOT NULL
);

CREATE TABLE events (
    eventid  mediumint PRIMARY KEY  NOT NULL AUTO_INCREMENT,
    past bit  DEFAULT 0 NOT NULL,
    title varchar(100)   NOT NULL,
    description varchar(1000)   NOT NULL,
    photoURL varchar(1000)   NULL,
    driveURL varchar(1000)   NULL,
    price mediumint   NOT NULL,
    event_date date   NOT NULL,
    localisation varchar(255)   NULL
);

-- Event interest management
CREATE TABLE events_interested(
    discretepk  mediumint PRIMARY KEY AUTO_INCREMENT  NOT NULL,
    eventid int   NOT NULL,
    memberid int   NOT NULL
);

-- Event inscription management
CREATE TABLE events_going (
    discretepk  mediumint PRIMARY KEY AUTO_INCREMENT  NOT NULL,
    eventid int   NOT NULL,
    memberid int   NOT NULL,
    paid mediumint   NULL
);

-- Training plan entry
CREATE TABLE trainings (
    trainingid  mediumint AUTO_INCREMENT PRIMARY KEY  NOT NULL,
    title varchar(255)   NOT NULL,
    tableurl varchar(1000)   NOT NULL
);

-- Day by day training description
CREATE TABLE trainings_plan (
    discretepk  mediumint PRIMARY KEY AUTO_INCREMENT  NOT NULL,
    trainingid int   NOT NULL,
    training_day date   NOT NULL,
    description varchar(1000)   NULL
);

-- Training subscription maangement
CREATE TABLE trainings_subscribed (
    discretepk  mediumint PRIMARY KEY AUTO_INCREMENT  NOT NULL,
    trainingid int   NOT NULL,
    memberid int   NOT NULL
);

ALTER TABLE trainings_subscribed ADD UNIQUE (trainingid, memberid);

ALTER TABLE events_interested ADD UNIQUE (eventid, memberid);

ALTER TABLE events_going ADD UNIQUE (eventid, memberid);

ALTER TABLE fees_paid ADD UNIQUE (payment_year, memberid);

ALTER TABLE fees_paid ADD CONSTRAINT fk_FEE_PAID_payment_year FOREIGN KEY(payment_year)
REFERENCES fee_years (payment_year);

ALTER TABLE fees_paid ADD CONSTRAINT fk_FEE_PAID_memberid FOREIGN KEY(memberid)
REFERENCES members (memberid);

ALTER TABLE events_interested ADD CONSTRAINT fk_EVENT_INTERESTED_eventid FOREIGN KEY(eventid)
REFERENCES events (eventid);

ALTER TABLE events_interested ADD CONSTRAINT fk_EVENT_INTERESTED_memberid FOREIGN KEY(memberid)
REFERENCES members (memberid);

ALTER TABLE events_going ADD CONSTRAINT fk_EVENT_GOING_eventid FOREIGN KEY(eventid)
REFERENCES members (memberid);

ALTER TABLE events_going ADD CONSTRAINT fk_EVENT_GOING_memberid FOREIGN KEY(memberid)
REFERENCES members (memberid);

ALTER TABLE trainings_plan ADD CONSTRAINT fk_TRAINING_PLAN_trainingid FOREIGN KEY(trainingid)
REFERENCES trainings (trainingid);

ALTER TABLE trainings_subscribed ADD CONSTRAINT fk_TRAINING_SUBSCRIBED_trainingid FOREIGN KEY(trainingid)
REFERENCES trainings (trainingid);

ALTER TABLE trainings_subscribed ADD CONSTRAINT fk_TRAINING_SUBSCRIBED_memberid FOREIGN KEY(memberid)
REFERENCES members (memberid);

