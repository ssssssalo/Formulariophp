<?php
if (isset($_POST['submit'])){
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    $userDB="pedro@gmail.com";
    $passDB="123";

    if(isset($_POST['user'])){
        if ($user=== $userDB){
            header("location: ../home.php");
        }
        else{
           echo'<script language="Javascript">alert("Error en datos");</script>';
        }
    }
}
?>