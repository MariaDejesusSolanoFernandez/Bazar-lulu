<?php
include('db.php');
include('function.php');
if(isset($_POST["operation"]))
{
	if($_POST["operation"] == "Add")
	{
		$image = '';
		if($_FILES["user_image"]["name"] != '')
		{
			$image = upload_image();
		}
		$statement = $connection->prepare("
			INSERT INTO tblproductos (Nombre, Precio, Descripcion, Imagen) 
			VALUES (:nombre, :precio, :descripcion, :image)
		");
		$result = $statement->execute(
			array(
				':nombre'	=>	$_POST["nombre"],
				':precio'	=>	$_POST["precio"],
				':descripcion'	=>	$_POST["descripcion"],
				':image'		=>	$image
			)
		);
		if(!empty($result))
		{
			echo 'Data Inserted';
		}
	}
	if($_POST["operation"] == "Edit")
	{
		$image = '';
		if($_FILES["user_image"]["name"] != '')
		{
			$image = upload_image();
		}
		else
		{
			$image = $_POST["hidden_user_image"];
		}
		$statement = $connection->prepare(
			"UPDATE tblproductos 
			SET Nombre = :nombre, Precio = :precio, Descripcion = :descripcion, Imagen = :image  
			WHERE id = :id
			"
		);
		$result = $statement->execute(
			array(
				':nombre'	=>	$_POST["Nombre"],
				':precio'	=>	$_POST["Precio"],
				':descripcion'	=>	$_POST["Descripcion"],

				':image'		=>	$image,
				':id'			=>	$_POST["user_id"]
			)
		);
		if(!empty($result))
		{
			echo 'Data Updated';
		}
	}
}

?>