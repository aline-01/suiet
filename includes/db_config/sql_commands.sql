use wordpress

#table for users
create table if not exists users(
   id int(11) not null auto_increment,
   fname_lname varchar(160) not null,
   phone_number varchar(13) not null,
   password varchar(255) not null,
   date_register varchar(150) not null,
   last_login varchar(150) not null,
   accept int(1) default "0",
   primary key(id)
);

#table of admins
create table if not exists admins(
   id int(11) not null auto_increment,
   username varchar(200) not null,
   password varchar(200) not null,
);

insert into admins(username,password)
  values("huracon2022","cbd35c2c983bdd74ff83d57f21c19c2816dc577d5770dd012b92b4ab210e1625");


#hash algoritm for admin : sha256
#salt : 9#h!is

#table of advertising
create table if not exists advertising(
   id int(11) not null auto_increment,
   city_name varchar(80) not null,
   state_name varchar(80) not null,
   address varchar(180) not null,
   house_grouping varchar(200) not null,
   house_type varchar(80) not null,
   room_number int(4) default 0,
   pathroom_number int(4) default 0,
   toilets_number int(4) default 0,
   meterage varchar(200) not null,
   elevator int(1) default 0,
   parking int(1) default  0,
   store int(1) default 0,
   create_year int(5) not null,
   metrage_store varchar(120) not null,
   mortgage varchar(120) not null,
   mount_price varchar(120) not null,
   house_all_price varchar(120) not null,
   options varchar(220) default "not set",
   presale_price varchar(200) default "not set",
   short_rental varchar(200) default "not set",
   about_house varchar(170) default "not set",
   house_description text not null,
   images1 varchar(200) not null,
   images2 varchar(200) default "no_img",
   images3 varchar(200) default "no_img",
   images4 varchar(200) default "no_img",
   images5 varchar(200) default "no_img",
   images6 varchar(200) default "no_img",
   images7 varchar(200) default "no_img",
   images8 varchar(200) default "no_img",
   images9 varchar(200) default "no_img",
   images10 varchar(200) default "no_img",
   images11 varchar(200) default "no_img",
   images12 varchar(200) default "no_img",
   images13 varchar(200) default "no_img",
   images14 varchar(200) default "no_img",
   images15 varchar(200) default "no_img",
   images16 varchar(200) default "no_img",
   images17 varchar(200) default "no_img",
   images18 varchar(200) default "no_img",
   images19 varchar(200) default "no_img",
   images20 varchar(200) default "no_img",
   send_date varchar(150) not null,
   user_sender int(11) not null,
   rand_number varchar(60) not null,
   accepted varchar(60) default "waiting";
   foreign key(user_sender) references users(id),
   primary key(id)
);




