<?php



if(isset($_POST['submit']) && isset($_FILES['my_video'])){


   
    
    $video_name=$_FILES['my_video']['name'];
    $tmp_name=$_FILES['my_video']['tmp_name'];
    $error=$_FILES['my_video']['error'];
    
    

        if(!$error){

                $video_ex=pathinfo($video_name,PATHINFO_EXTENSION); // zwraca info o ścieżce do pliku

                $video_ex_lc=strtolower(($video_ex)); // wszystkie duże litery zostają pomniejszone


                $allowed_exs = array("mp4",'webm','avi','flv');

                    if(in_array($video_ex_lc,$allowed_exs)){

                        $new_video_name=uniqid("video-",true).'.'.$video_ex_lc;

                          $video_upload_path="actually/".$new_video_name;

                                move_uploaded_file($tmp_name,$video_upload_path);

                            
                                    $sql_videos="INSERT INTO entries_videos(video_url) VALUES('$new_video_name')";

                            $mysqli_query= $conn->query($sql_videos);





                    }else{
                        

                        $em = "Not uploaded file this type";
                        header("location:index.php?error=$em");



                    }





        }












    }





    
































?>