<?php
include 'connect.php';

$sql = "create table farmer(
fid int primary key,
name varchar(255) not null,
email varchar(255) not null,
password varchar(255) not null,
contact int not null
)";

if ($conn ->query($sql)) {
	echo "Table farmer is created<br>";
}else{
	echo "Failed to create table farmer<br>";
}

$sql1 = "create table customer(
cid int primary key,
name varchar(255) not null,
contact int not null,
password varchar(255) not null,
email varchar(255) not null,
city varchar(255) not null,
address varchar(255) not null,
postal_code int
)";

if ($conn ->query($sql1)) {
	echo "Table customer is created<br>";
}else{
	echo "Failed to create table customer<br>";
}


$sql2 = "create table product(
pid int primary key,
name varchar(255) not null,
unit int not null,
quantity int not null,
description varchar(255),
fid int,
foreign key(fid) references farmer(fid)
)";

if ($conn ->query($sql2)) {
	echo "Table product created <br>";
}else{
	echo "Failed to create table product<br>";
}


$sql3 = "create table admin(
aid int primary key,
name varchar(255) not null,
email varchar(255) not null,
password varchar(255) not null
)";

if ($conn ->query($sql3)) {
	echo "Table admin created <br>";
}else{
	echo "Failed to create table admin<br>";
}



$sql4 = "create table orders(
oid int primary key,
unit int not null,
date varchar(255),
time varchar(255),
cid int,
foreign key(cid) references customer(cid),
aid int,
foreign key(aid) references admin(aid),
pid int,
foreign key(pid) references product(pid)
)";


if ($conn ->query($sql4)) {
	echo "Table order created<br> ";
}else{
	echo "Failed to create table order<br>";
}


$sql5 = "create table payments(
pin_no int primary key,
cid int,
foreign key(cid) references customer(cid),
aid int,
foreign key(aid) references admin(aid),
pid int,
foreign key(pid) references product(pid)
)";

if ($conn ->query($sql5)) {
	echo "Table payment created<br> ";
}else{
	echo "Failed to create table payment<br>";
}


$sql6 = "create table p_method(

pin_no int,
foreign key(pin_no) references payment(pin_no),
status varchar(255) primary key
)";
if ($conn ->query($sql6)) {
	echo "Table p_method created<br> ";
}else{
	echo "Failed to create table p_method<br>";
}


$sql7 = "create table Nary(
fid int,
foreign key(fid) references farmer(fid),
pid int,
foreign key(pid) references product(pid),
cid int,
foreign key(cid) references customer(cid),
oid int,
foreign key(oid) references order(oid),
aid int,
foreign key(aid) references admin(aid),
pin_no int,
foreign key(pin_no) references payment(pin_no),
method int,
foreign key(pid) references p_method(method)
";
if ($conn ->query($sql7)) {
	echo "Table Nary created<br> ";
}else{
	echo "Failed to create table p_method<br>";
}

  ?>