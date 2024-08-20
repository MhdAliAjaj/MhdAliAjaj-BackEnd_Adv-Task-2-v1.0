<?php
// include 'C:\xampp\htdocs\internship\task3\try4\classes\book.php';
// include '.././classes/book.php';

// include 'C:\xampp\htdocs\internship\task3\try4\classes\connection.php';

include '../classes/Post.php';

include '../classes/connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Add new book</title>
</head>
<body>
    <div class="container" style="margin-top:5%;">
        <form method="POST" action="">

            <div class="form-group">
                <label for="exampleInputEmail1"> title Post</label>
                <input name="title" type="text" class="form-control"  id="exampleInputEmail1" aria-describedby="emailHelp" >
                <label for="validate">

                </label>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Content</label>
                <input name="content" type="text" class="form-control"  id="exampleInputEmail1" aria-describedby="emailHelp" >
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Author</label>
                <input name="author" type="text" class="form-control"  id="exampleInputEmail1" aria-describedby="emailHelp" >
            </div>
            <!-- <div class="form-group">
                <label for="exampleInputEmail1">book status</label>
                <input name="book_status"  type="text" class="form-control"  id="exampleInputEmail1" aria-describedby="emailHelp" >
            </div> -->
            
            <button type="submit" name="submit" class="btn btn-primary">save</button>
        </form>
    </div>
    <?php
// check from method POST 
if (isset($_POST['submit'])) {
    //fetch data from inputs user
    $title = $_POST['title'];
    $content = $_POST['content'];
    $author = $_POST['author'];
    

    //validate from inputs all is not empty
    if (empty($title) || empty($content) || empty($author)  ) {
        echo '<p style="color:red"> all fields is reqired</p>';
    }
    
     else {
        //counter 
        $id = 1;
        // create object from class Book 
        $post1 = new Post($id, $title, $content, $author);
        // call method from class book
        $post1->create($id, $title, $content, $author);
        $id++;
    }

}
?>

</body>
</html>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>