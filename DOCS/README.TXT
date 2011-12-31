Download exam.zip file and extract it in the exam directory inside the htdocs directory.
Create images directory and docs directory inside the exam directory. Place image files 
inside the images directory and tables.sql file inside docs directory. Place this document
inside the docs directory for future reference.

Create all tables in MySQL database using tables.sql file. The fastest way to do that 
Is that: copy tables.sql file in MySQL\bin directory. Start MySq. In command prompt. 
Go to mysql\bin directory and type: mysqld (for Windows 98, Me) or mysqld-nt (for Windows 2000, XP). 
Then to start user interface type: mysql -u root 

To create tables and insert data in the students and questions tables type 

source tables.sql

Tables will be created and data inserted.

Start Apache and Internet Explorer. Type URL address

http://localhost/exam

Login page displays. Login as sergeys with password password. Take quiz and grade it. 
Click Users option from main menu and add a user with user role. Login out and login 
as a new user. Take the quiz. Click users option. Login page displays. 
New user role is not admin. Only admin can manage users. Login as admin. 
Click View all scores option. Scores Report displays. Go back and click 
user option. Click display users. Edit or delete a user. 
Play with exam application and have fun
