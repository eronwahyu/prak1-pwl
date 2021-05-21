<?php
  $username=$_POST['username'];
  $password=$_POST['password'];
  $email=$_POST['email'];
  $kontak=$_POST['kontak'];
  echo "Username : ",@$username,"<br>";
  echo "Password : ",@$password,"<br>";
  echo "Email : ",@$email,"<br>";
  echo "Kontak : ",@$kontak,"<br>";
  ?>