<?php
session_start();

function connect(){
	$conn = mysqli_connect("localhost", "root", "", "codinglab");
	if(!$conn){
		die("Connection failed ". mysqli_connect_error());
	}
	return $conn;
}

function init(){
	$conn = connect();
	$sql = "SELECT * FROM `book`";
	$result = mysqli_query($conn, $sql);

	if(mysqli_num_rows($result)>0){
		$out = array();
		while($row = mysqli_fetch_assoc($result)){
			$out[$row["AuthorID"]] = $row;
		}
		echo json_encode($out);
	} else {
		echo "0";
	}
	mysqli_close($conn);
}

function init2(){
	$conn = connect();
	$sql = "SELECT * FROM `book`";
	$result = mysqli_query($conn, $sql);

	if(mysqli_num_rows($result)>0){
		$out = array();
		while($row = mysqli_fetch_assoc($result)){
			$out[$row["AuthorID"]] = $row;
		}
		echo json_encode($out);
	} else {
		echo "0";
	}
	mysqli_close($conn);
}


function rec(){
	$genre1 = $_POST['genre1'];
	$conn = connect();
	$sql = "SELECT * FROM `book` WHERE genre1='$genre1'";
	$result = mysqli_query($conn, $sql);

	if(mysqli_num_rows($result)>0){
		$row = mysqli_fetch_assoc($result);
		echo json_encode($row);
	} else {
		echo "404";
	}
	mysqli_close($conn);
}



function loadSingleTovar(){
	$ISBN = $_POST['ISBN'];
	$conn = connect();
	$sql = "SELECT * FROM `book` WHERE ISBN='$ISBN'";
	$result = mysqli_query($conn, $sql);

	if(mysqli_num_rows($result)>0){
		$row = mysqli_fetch_assoc($result);
		echo json_encode($row);
	} else {
		echo "404";
	}
	mysqli_close($conn);


}

function loadGoods(){
	$conn = connect();
	$sql = "SELECT * FROM books where id = '".$_SESSION['id']."'";
	$result = mysqli_query($conn, $sql);

	if(mysqli_num_rows($result)>0){
		$out = array();
		while($row = mysqli_fetch_assoc($result)){
			$out[$row["id"]] = $row;
		}
		echo json_encode($out);
	} else {
		echo "0";
	}
	mysqli_close($conn);
}




function initAuthor(){
	$ID = $_POST['ID'];
	$conn = connect();
	$sql = "SELECT * FROM `author` WHERE ID='$ID'";
	$result = mysqli_query($conn, $sql);

	if(mysqli_num_rows($result)>0){
		$row = mysqli_fetch_assoc($result);
		echo json_encode($row);
	} else {
		echo "404";
	}
	mysqli_close($conn);


}




function AuthorBooks(){
	$ID2 = $_POST['ID'];
	$conn = connect();
	for($i = 0; $i<25; $i++){

		$sql = "SELECT `ISBN`,`Title`,`AuthorID`,`Poster`,`genre1`,`genre2`,`genre3`,`Description`,`Price`,`showrating`,`Publisher`,`Language` FROM `book` INNER JOIN `author` ON '$ID2' = book.AuthorID WHERE book.AuthorID = '".$ID2."'";	
		$result = mysqli_query($conn, $sql);
	}

	if(mysqli_num_rows($result)>0){
		$out = array();
		while($row = mysqli_fetch_assoc($result)){
			$out[$row["AuthorID"]] = $row;
		}
		echo json_encode($out);
	} else {
		echo "0";
	}
	mysqli_close($conn);


}
