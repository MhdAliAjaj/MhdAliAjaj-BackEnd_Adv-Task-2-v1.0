<?php
    
    include '../classes/Post.php';
    include '../classes/connection.php';

    //fetch id via url 
    $id = $_GET['id'];
    //call method delet direct during calss name without create obect from book because method delte define as staic
    Post::delete($id);
    //query for delet
    $qq = "DELETE FROM posts WHERE id = '$id';";
    $result = mysqli_query($conn,$qq);
    //condition for result is not false
    if ($result == true) {
        echo "your book has been deleted successfully";
        header("location:../list_posts.php");
    }  
?>