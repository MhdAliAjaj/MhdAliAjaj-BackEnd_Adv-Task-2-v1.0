<?php

    include '../classes/connection.php';
    include '../classes/Post.php';

    //fetch id via url 
    $id = $_GET['id']; //id sent from page index when button edit 
    $qqq = "SELECT * FROM posts WHERE id = '$id';";

    $result = mysqli_query($conn,$qqq);
    $row = mysqli_fetch_assoc($result);

    $id = $row['id'];
    $title = $row['title'];
    $content=$row['content'];
    $author=$row['author'];
   

    ?>
    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>update post</title>
    </head>
    <body>
        <div class="container" style="margin-top:5%;">
            <form method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">update post title</label>
                <input name="title" value="<?php echo $title;?>" type="text" class="form-control"   aria-describedby="emailHelp" >
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">update content</label>
                <input name="content" value="<?php echo $content;?>" type="text" class="form-control"   aria-describedby="emailHelp" >
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">update Author</label>
                <input name="author" type="text" value="<?php echo $author;?>" class="form-control"   aria-describedby="emailHelp" >
            </div>
           
            <button type="submit" name="submit" class="btn btn-primary">save</button>
            </form>
        </div>
    <?php
        if (isset($_POST['submit'])) 
           {
            $id = $_GET['id'];
            // $sql = "SELECT * FROM `books`  WHERE 'id'=$id";
            // $data = mysqli_query($conn, $sql);
            //frtech date from input user
            $new_title = $_POST['title']; 
            $new_content=$_POST['content'];
            $new_author=$_POST['author'];
           
            //craete object from book 
            $post1=new Post($id,$new_title,$$new_content,$new_author);
            //// call method edit from class book
            $post1->update($id,$new_title,$$new_content,$new_author);
           }
        ?>
    </body>
    </html>
    