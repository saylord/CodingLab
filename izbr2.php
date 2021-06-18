<?php 
    include("connect.php");
    $id = $_POST['id'];

    $sql = "SELECT * FROM news";
    $result = mysqli_query($conn, $sql);
    $news = mysqli_fetch_all($result, MYSQLI_NUM);
    
    if($id) {
        for ($i = 0; $i < count($news); $i++) {
            if ($news[$i][6] == 0) {
                $sql1 = "UPDATE news SET verify = verify + 1 WHERE news_id = '". $id ."'";
                $result = mysqli_query($conn, $sql1);       
            } 
        }           
    } 
    header("Location: newspagenew.php");
    die;
?>
