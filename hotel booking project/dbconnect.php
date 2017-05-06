<?php
/*
** Connect to MySQL. Default XAMPP username is root and no password is set. If you have changed them during XAMPP installation, 
give correct details in the following line.
*/

if(!mysql_connect('localhost', 'root', '')) {
    die('Could not connect: ' . mysql_error()); // If connection is not eshtablished, show error message
}

// If the hotelproject database does not exist, create it. 
if(!mysql_select_db('hotelproject')) {
	mysql_query('CREATE DATABASE hotelproject');
	mysql_select_db('hotelproject');
}

// Create users table if it doesn't exist
if(!mysql_query("CREATE TABLE IF NOT EXISTS `users` (
`user_id` int(5) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `username` varchar(25) NOT NULL UNIQUE,
  `email` varchar(35) NOT NULL UNIQUE,
  `password` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(30) NOT NULL,
  `pincode` int(6) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12;"))
	die(mysql_error());