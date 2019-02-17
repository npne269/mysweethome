<?php
$email=$_POST['email1']; // Fetching Values from URL.
$password= sha1($_POST['password1']);

if($email == "user" and $password == "pass")
    echo "OK";
else
    echo "KO";