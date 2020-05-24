<?php
include 'global/config.php';
include 'global/conexion.php';
include 'carrito.php';
include 'templates/cabecera.php';
?>

<?php

if($_POST){

$total=0;
$SID=session_id();
$Direccion=$_POST['direccion'];

foreach($_SESSION['CARRITO'] as $indice=>$producto){

$total=$total+($producto['PRECIO']*$producto['CANTIDAD']);
}
$sentencia=$pdo->prepare("insert into tblVentas (ID,ClaveTransaccion,PaypalDatos,Fecha,Direccion,Total,status) 
values(Null,:ClaveTransaccion,'',NOW(),:Direccion,:Total,'pendiente');");

$sentencia->bindParam(":ClaveTransaccion",$SID);
$sentencia->bindParam(":Direccion",$Direccion);
$sentencia->bindParam(":Total",$total);
 $sentencia->execute(); 
 $idVenta=$pdo->lastInsertId();

 foreach($_SESSION['CARRITO'] as $indice=>$producto){
    $sentencia=$pdo->prepare("insert into
     tblDetalleVenta (ID,IDVENTA,IDPRODUCTO,PRECIOUNITARIO,CANTIDAD,VISUALIZACION) 
    values(Null,:IDVENTA,:IDPRODUCTO,:PRECIOUNITARIO,:CANTIDAD,0);");

    $sentencia->bindParam(":IDVENTA",$idVenta);
$sentencia->bindParam(":IDPRODUCTO",$producto['ID']);
$sentencia->bindParam(":PRECIOUNITARIO",$producto['PRECIO']);
$sentencia->bindParam(":CANTIDAD",$producto['CANTIDAD']);
 $sentencia->execute(); 
 }


}
?>
<div class="jumbotron text-center">
    <h1 class="display-4">¡Paso Final!</h1>
    <hr class="my-4">
    <p class="lead">Estas a punto de pagar con paypal la canitidad de:</p>
    <h4>$<?php echo number_format($total,2);?></h4>
    <p>Los productos se enviaran cuando se procese el pago</p>
</div>











<?php
include 'templates/pie.php';
?>