<?php
include 'classes/Post.php';

include 'classes/connection.php';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Posts</title>
</head>

<body>
    <div class="container">
        <a href="pages\create_post.php? id=<?php echo $id; ?>" class="btn btn-primary" style="width: 100%;font-size:20px;margin-top:20px;">Add Posts</a>
        <table class="table" style="width:400px;margin:auto;font-size:20px;">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">content</th>
                    <th scope="col">author</th>
                  
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                $sql = "SELECT * FROM `posts`";
                $data = mysqli_query($conn, $sql);

                if ($data == true) {
                    $rows = mysqli_num_rows($data);
                    if ($rows > 0) {
                        while ($rows = mysqli_fetch_assoc($data)) {
                            $id = $rows['id'];
                            $title = $rows['title'];
                            $content = $rows['content'];
                            $author = $rows['author'];
                            

                ?>
                            <tr>
                              <th scope="row"><?php echo $i++; ?></th>
                                <td style="text-align:center;"><?php echo $title; ?></td>
                                <td style="text-align:center;"><?php echo $content; ?></td>
                                <td style="text-align:center;"><?php echo $author; ?></td>
                           
                                <td>
                                    <!-- <a href="./index.php? id=<?php echo $id; ?>" class="btn btn-danger">delete</a> -->
                                    <a href="pages\delete_post.php? id=<?php echo $id; ?>" class="btn btn-danger">delete</a>
                                    <a href="pages\edit_post.php? id=<?php echo $id; ?>" class="btn btn-primary">edit</a>
                                </td>
                            </tr>
                <?php
                        }
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>