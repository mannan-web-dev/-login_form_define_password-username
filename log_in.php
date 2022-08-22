<?php 

  session_start(); 

 if ( $_POST['uname']==' mannan' && $_POST['psw']=='1234' )
 {

      $_SESSION['username'] =$_POST['uname'];
      echo " Hello, <br>".$_SESSION['username']." Your are logged ! <br><br>";
      echo "<a href='logout.php'>LogOut</a>";

 }
 else{
     
    echo " plase input username and password valid";
 }

?>