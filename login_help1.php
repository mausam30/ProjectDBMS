<?php
$connection=mysqli_connect('localhost','root');

if($connection)
{
    echo "connection is established";
}

else
{
    echo "Connection is Failed";
}

mysqli_select_database ($connection,'Login');

$usn=$_POST['USERNAME'];
$pass=$_POST['PASSWORD'];

$data="4NI20CS032";
$data2="Diy@1001";

if($usn==$data &&  $pass==$data2)
{
    echo "Login Successful";
}
else{
    echo "Login Error";
}

mysqli_query($connection,$data,$data2);
?>