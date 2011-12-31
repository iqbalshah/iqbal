CREATE TABLE questions (
  qid int(11) NOT NULL auto_increment,
  question text,
  ranswer varchar(255) default NULL,              
  wanswer1 varchar(255) default NULL,		   
  wanswer2 varchar(255) default NULL,		   
  wanswer3 varchar(255) default NULL,             
  qnumber int(11), 
  PRIMARY KEY  (qid)
);


INSERT INTO `questions` VALUES (0, 'Two by Two equals ', '4', '5', '3', '6', 1);
INSERT INTO `questions` VALUES (0, 'Three by Two equals ', '6', '5', '3', '9',  2);
INSERT INTO `questions` VALUES (0, 'Two by Four equals ', '8', '1', '3', '6',  3);
INSERT INTO `questions` VALUES (0, 'Two by Five equals ', '10', '3', '9', '6',  4);
INSERT INTO `questions` VALUES (0, 'Two by six equals ', '12', '15', '13', '16',  5);
INSERT INTO `questions` VALUES (0, 'Two by seven equals ', '14', '11', '9', '17',  6);
INSERT INTO `questions` VALUES (0, 'Two by eight equals ', '16', '12', '13', '19', 7);
INSERT INTO `questions` VALUES (0, 'Two by nine equals ', '18', '15', '13', '22',  8);
INSERT INTO `questions` VALUES (0, 'Three by Three equals ', '9', '15', '8', '6',  9);
INSERT INTO `questions` VALUES (0, 'Four by Three equals ', '12', '14', '17', '15',  10);




CREATE TABLE students (
  stid int(11) NOT NULL auto_increment,
  lastname varchar(20) default NULL,
  firstname varchar(20) default NULL,
  username varchar(20) default NULL,
  password varchar(100) default NULL,
  email varchar(100) default NULL,
  role varchar(20) default NULL,
  PRIMARY KEY  (stid)
);


create table scores(
scoreid int NOT NULL auto_increment,
username varchar(20),
score int,
acount int,
qcount int,
taken  int,
qdate date,
primary key(scoreid)
);


insert into students(stid, lastname, firstname, username, password, email, role) values (0, 'skudaev', 'sergey','sergeys','5f4dcc3b5aa765d61d8327deb882cf99','sergeys@yahoo.com','admin');

insert into students(stid, lastname, firstname, username, password, email, role) values (0, 'Gonzalez', 'Ricardo','ricardog','5f4dcc3b5aa765d61d8327deb882cf99','ricardog@yahoo.com','user');

insert into students(stid, lastname, firstname, username, password, email, role) values (0, 'Barry', 'John','johnb','5f4dcc3b5aa765d61d8327deb882cf99','johnb@yahoo.com','user');




