
<?php 

 
if(isset($_POST['submit_login'])){


 $username=$_POST['username'];
 $password=$_POST['password'];
 
 

     if($username=='dar23' && $password=="dar2345"){

       header('Location:forms.php');

     }elseif($username!="dar23" || $password!="dar2345"){

       header('Location:index.php');

     }



}








?>