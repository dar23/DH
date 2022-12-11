<?php  require("connection.php"); require('logowanie.php');require('menu.php');require('hamburger.php'); require('player.php');
    
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
    <link rel="stylesheet" href="style/three_post.css">
    <link rel="stylesheet" href="style/main_post.css">
    <link rel="stylesheet" href="style/news.css">  
    <link rel="stylesheet" href="style/three_news.css">
    <link rel="stylesheet" href="style/video_player.css">
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
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">



</head>


<body>

<!-- główna strona -->  

<div class="part_1">

  
        
            <div class="search_container">   <!-- wyszukiwarka plików -->
              <form  method="post">
                <label for="search" class="label_search">
                  <div class="common_element">  
                    <i class=" fa fa-search loop " aria-hidden="true"></i></input>
                      <input type="text" name="searching"class="input_search" autocomplete="off" />
                  </div>
                </label>
              </form>
            </div>

   
   <?php 

            echo '<div class="container_three_posts">';

                $actual = "SELECT DISTINCT * FROM main_article ORDER BY id DESC LIMIT 3";
                $result=$conn->query($actual);


                              while($row = mysqli_fetch_array($result)){

                                echo '<div class="post">';
                                //tu będzie div dla postu: tytuł

                                echo '<a href="three_news.php?id='.$row['id'].'">'.'<img src="actually/'.$row["picture"].'" class="actual_photo">'.'</a>';
                                    
                                echo '<div class="main_title">'.$row["title"].'</div>';
                                  
                                echo '</div>';

                              };
                    
            echo '</div>';

            
            $sqli = "SELECT DISTINCT * FROM posts ORDER BY id DESC";
            $result=$conn->query($sqli);
            
            
            echo '<div class="place_to_posts">';  
            
            while($row = mysqli_fetch_array($result)){
            
            $rowtitle=$row['title'];
            $rowwith=$row['articles'];
            
            echo "<div class='main_post'>"       
                     

                          .'<a href="news.php?id='.$row['id'].'">'.'<img src="main/'.$row["pictures"].'">'.'</a>'                       
                          ."<div class='title'>"
                          .'<p class="title_text">'.mb_strimwidth("$rowtitle",0,30,"...").'</p>' 
                          .'</div>' 
                          
                       
                   
                        
               ."</div>";
               

               echo "<div class='main_post1'>"       
                     

               .'<a href="news.php?id='.$row['id'].'">'.'<img src="main/'.$row["pictures"].'">'.'</a>'                       
               ."<div class='title'>"
               .'<p class="title_text">'.mb_strimwidth("$rowtitle",0,30,"...").'</p>' 
               .'</div>' 
               
            
        
             
    ."</div>";










              }
            


            
              
  ?>











  
  
<div class='player'>



<?php
   

   $videos1 = "SELECT DISTINCT * FROM  entries_videos ORDER BY id DESC ";
   $result=$conn->query($videos1);

     

               echo     '<div class="video_player">';  
        
               echo     '<video controls id="time_video">';
               
               while($row = mysqli_fetch_array($result)){
                
               echo   '<source src="actually/'.$row['video_url'].'   "  type="video/mp4">';
                }
               echo  '</video>';

              


               echo    '</div>';

      


  ?>
     
        <div class="list_media">

            <?php    
            
            
          


                $videos = "SELECT DISTINCT * FROM  entries_videos ORDER BY id DESC ";
                $result=$conn->query($videos);

               

                              while($row = mysqli_fetch_array($result)){

                                  echo '<div class="video_container">';
                                  echo '<div class="number_video">'.$row['id'].'</div>';
                                  echo '<video class="video_list" >'.'<source src="actually/'.$row['video_url'].'   ">'.'</video>';
                                 
                                  
                                  
                                  echo '</div>';
                              };

            

                            
                      ?>
                               
        </div>                
            
      
</div>   
                  
                      <?php
                                      
                                if(isset($_GET['error'])){ ?>

                                        <p><?=$_GET['error']?></p>
                      <?php } ?>

                                  



                              

              



                             





             



























            <!--   PART TWO SITE (DOWN PART)    --> 






            <!--<div class="part_2">--> 
  
      
  <?php




?>

























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



<script src="js/videos.js"></script>


<script src="js/second_player.js"></script>

















</body>
</html>
