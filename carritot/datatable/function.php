<?php

function upload_image()
{
	if(isset($_FILES["user_image"]))
	{
		$extension = explode('.', $_FILES['user_image']['name']);
		$new_name = rand() . '.' . $extension[1];
		$destination = './upload/' . $new_name;
		move_uploaded_file($_FILES['user_image']['tmp_name'], $destination);
		return $new_name;
	}
}

function get_image_name($user_id)
{
	include('db.php');
	$statement = $connection->prepare("SELECT imagen FROM tblproductos WHERE ID = '$user_id'");
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		return $row["imagen"];
	}
}

function get_total_all_records()
{
	include('db.php');
	$statement = $connection->prepare("SELECT * FROM tblproductos");
	$statement->execute();
	$result = $statement->fetchAll();
	return $statement->rowCount();
}

?>