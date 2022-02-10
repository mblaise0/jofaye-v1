create database jofayedb;

create table volunteer(
	`id` integer not null primary key auto_increment,
    `ufullname` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
    `uemail` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
    `uphone` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
    `uaddress` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
    `udesired_location` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

alter table `volunteer`
drop column `udesired_location`,
add column `ucountry` varchar(150) NOT NULL after `uaddress`;


create table contact(
 `id` integer primary key not null auto_increment,
 `c_fullname` varchar(250) not null,
 `c_email` varchar(250) not null,
 `c_subject` varchar(250) not null,
 `c_message` varchar(250) not null,
 `c_status` varchar(50) not null,
 `c_date` varchar(250) not null
);

create table newsletter(
	`id` integer  primary key not null auto_increment,
    `sub_email` varchar(250) not null
);