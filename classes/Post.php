<?php
// include "./classes/connection.php";   //false
// include '../classes/connection.php'; // true

//create class book for operation CRUD
class Post
{
    //properites
    public int $id;
    public string $title;
    public string $content;
    
    public string $author;

    //const for connect database
    const serverName='localhost';
    const userName='root';
    const password='';
    const dbName='blog_db4';

   //constracter for book
    public function __construct(int $id,string $title, string $content, string $author)
    {
        $this ->id=$id;
        $this->title = $title;
        $this->content = $content;
        
        $this->author = $author;
        
    }

    //methor for add book have 5 parameter
    public function create(int $id, string $title, string $content,  string $author )
    {       
        
        $conn = new mysqli(self::serverName, self::userName,self:: password,self::dbName);
        if ($conn->connect_error) {
             die($conn->connect_error);
        }
        
        $qqq = "INSERT INTO `posts` (`title`,`content`,`author`) VALUES ('$title','$content','$author');";
            $result = mysqli_query($conn,$qqq);
            try 
            {
                if ($result == true) 
                {
                    echo "your product added";
                    header("location:../list_posts.php");
                }      
            } 
            catch (Throwable $th) 
            {

            }
    }
        
    //methor for delet book have 1 parameter which fetch when press botton delet via url 
    static public function delete($id)
    {
        $id=$_GET['id'];    
        $conn = new mysqli(self::serverName, self::userName,self:: password,self::dbName);
        if ($conn->connect_error) {
             die($conn->connect_error);
        }
        $id = $_GET['id'];
        $qq = "DELETE FROM posts WHERE id = '$id';";
        $result = mysqli_query($conn,$qq);
        if ($result == true) {
            echo "your book has been deleted successfully";
            header("location:../index.php");
        }
    }

    //methor for edit book have 5 parameter which fetch when press botton delet via url 
    static public function update(int $id,string $title, string $content,  string $author )
    {
        $id=$_GET['id'];
        $conn = new mysqli(self::serverName, self::userName,self:: password,self::dbName);
        if ($conn->connect_error) {
             die($conn->connect_error);
        }
        $qqq = "UPDATE `books` SET `title` = '$title' , `content` = '$content' , `author` = '$author',  WHERE `id` = '$id' ;";

        $result = mysqli_query($conn, $qqq);           
        if ($result == true) 
        {
            echo "the record ubdated successfully";
            header("location:../index.php");
        }
        else 
        {
            echo "Error: " . $qqq . "<br>" . mysqli_error($conn);
        }
    }

    public static function  listAll(){
        $i = 1;
        $id=$_GET['id'];
        $conn = new mysqli(self::serverName, self::userName,self:: password,self::dbName);
        if ($conn->connect_error) {
             die($conn->connect_error);
        }
        $sql = "SELECT * FROM `posts`";
        $data = mysqli_query($conn, $sql);
    }

    public static function read($id) {

    }
}

    
  
