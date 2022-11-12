use wordpress

#table for users
create table if not exists users(
   id int(11) not null auto_increment,
   fname_lname varchar(160) not null,
   phone_number varchar(13) not null,
   password varchar(255) not null,
   date_register varchar(150) not null,
   last_login varchar(150) not null,
   accept int(1) default "0"
);

