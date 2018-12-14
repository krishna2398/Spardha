<?php
    $conn = mysqli_connect("localhost","root","","database_name");
    $query1 = "CREATE TABLE bookings (name varchar(40),phnum varchar(12),pick_address varchar(100),pick_area varchar(20),drop_address varchar(100),drop_area varchar(20),id int(11) AUTO_INCREMENT PRIMARY KEY,otp int(5),valied int(11) NULL,time timestamp)";
    $query2 = "CREATE TABLE admin (username varchar(40) PRIMARY KEY NOT NULL,passwd varchar(30) NOT NULL)";
    $query3 = "CREATE TABLE auto_db (name varchar(30) NOT NULL,mobile varchar(12) PRIMARY KEY NOT NULL,auto_num varchar(12) NOT NULL,area_start varchar(20) NOT NULL,area_stop varchar(20) NOT NULL)";
    mysqli_query($conn,$query1);
    mysqli_query($conn,$query2);
    mysqli_query($conn,$query3);
?>