<?php

require "koneksi.php";

$username = $_POST["username"];
$password = password_hash($_POST["password"], PASSWORD_DEFAULT);
$level = $_POST["level"];

$sql = "INSERT INTO user (username,password, level) VALUE ('$username', '$password', '$level')";
mysqli_query($koneksi, $sql)

if (mysqi_error($koneksi)) {
	echo mysqli_error($koneksi);
} else {
	header("location: user.php");
}