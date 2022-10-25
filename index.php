<?php  require("connection.php"); require('logowanie.php');require('menu.php');require('hamburger.php');
    
?>


<!DOCTYPE html>

<head>
<html lang="pl">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style/hamburger.css">
    <link rel="stylesheet" href="style/index.css">
    <link rel="stylesheet" href="style/search_form.css">
    <link rel="stylesheet" href="style/logowanie.css">
    <link rel="stylesheet" href="style/main_post.css">
    <link rel="stylesheet" href="style/news.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6d745535f9.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Comfortaa:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Black+Ops+One&family=Staatliches&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>


<body>

<!-- główna strona -->  

<div class="part_1">

  <div class="item0">





 <!-- <div class="author_photo">
    <img src="darek.jpg" class="darek">

  </div>
-->
 
<div class="search_container">
  <form  method="post">
    <label for="search" class="label_search">
    <div class="common_element">  
    <i class=" fa fa-search loop " aria-hidden="true"></i></input>
      <input type="text" name="searching"class="input_search" autocomplete="off" />
      
    </div>
    </label>

  </form>
</div>





  </div>


  <div class='part_1'>

 
   
   
   <?php 



echo '<div class="container_three_posts">'; // na 3 posty css height 225px !!

      
      
    $actual = "SELECT DISTINCT * FROM main_article ORDER BY id DESC LIMIT 3";
    $result=$conn->query($actual);


                  while($row = mysqli_fetch_array($result)){

                    echo '<div class="post">';
                    //tu będzie div dla postu: tytuł

                    echo '<img src="actually/'.$row["picture"].'" class="actual_photo">';
                        
                    echo '<div class="main_title">'.$row["title"].'</div>';
                      
                    echo '</div>';

                  };
        
echo '</div>';

   ?>



</div>
















  </div>



  <div class="item2"></div>
  <div class="item3"></div>  






            <!--   PART TWO SITE (DOWN PART)    --> 





<div class="part_2">
  
      
  <?php


$sqli = "SELECT DISTINCT * FROM posts ORDER BY id DESC";
$result=$conn->query($sqli);


echo '<div class="place_to_posts">';  

while($row = mysqli_fetch_array($result)){

$rowtitle=$row['title'];
$rowwith=$row['articles'];

echo "<div class='main_post'>"       
      .'<div class="photo">'
        .'<a href="news.php?id='.$row['id'].'">'.'<img src="main/'.$row["pictures"].'">'
          ."<div class='box'>"
            ."<div class='title'>"
              .'<p class="pe">'.mb_strimwidth("$rowtitle",0,35,"...").'</p>' 
             ."</div>"    
           .'</div>'
         .'</a>'
       .'</div>'        
   ."</div>";
   

  }


echo '</div>'; 

?>


</div>























    <div id="panel">
        <form method="post">
            <label for="username">Nazwa użytkownika:</label>
            <input type="text" id="username" name="username">
            <br>
            <label for="password">Hasło:</label>
            <input type="password" id="password" name="password">
            <div id="lower">
            <input type="checkbox"><label class="check" for="checkbox">Zapamiętaj mnie!</label>
            <input type="submit" value="Login" name="submit_login">
            </div>  
        </form>
     </div>    


<script src="js/icon.js"></script>

<script src="js/logowanie.js"></script>

<script src="js/hamburger.js"></script>


<script src="js/search.js"></script>























</body>
</html>
