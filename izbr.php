<?php 
    include("connect.php");
    $id = $_POST['id'];

    $sql = "SELECT * FROM books";
    $result = mysqli_query($conn, $sql);
    $books = mysqli_fetch_all($result, MYSQLI_NUM);
    
    if($id) {
        for ($i = 0; $i < count($books); $i++) {
            if ($books[$i][8] == 0) {
                $sql1 = "UPDATE books SET verify = verify + 1 WHERE book_id = '". $id ."'";
                $result = mysqli_query($conn, $sql1);       
            } 
        }           
    } 
    header("Location: bookspagenew.php");
    die;
?>
