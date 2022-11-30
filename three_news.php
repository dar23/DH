<!DOCTYPE html>
<html lang="pl">
<head>
<link rel="stylesheet" href="style/three_news.css">
</head>
<body>
<?php 
require('connection.php');



$id_post = $_GET['id'];

$sql_news="SELECT * FROM main_article WHERE id='$id_post'";
$result=$conn->query($sql_news);

      
echo '<div class="place_to_three_news">';  

    while($row = mysqli_fetch_array($result)){
      echo "<div class='main_post_news'>"
          .'<div class="photo_news">'
          . '<img class="img_news" src="actually/'.$row["picture"].'">'.'</a>'
          . '</div>'."<div class='title_news'>" . $row['title'] . "</div>"
          . "<div class='text_news'>" . $row['article'] . "</div>"
          . "</div>";
        
        }

echo '</div>'; 


?>

</body>