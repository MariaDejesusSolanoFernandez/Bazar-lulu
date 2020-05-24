<?php
include 'global/config.php';
include 'carrito.php';
include 'templates/cabecera.php';
?>


<br>
<h3>Lista de carrito</h3>
<?php if (!empty($_SESSION['CARRITO'])) { ?>

    <table class="table table-light table-bordered">
        <tbody>
            <tr>
                <td width="40%">Descripcion</th>
                <td width="15%" class="text-center">Cantidad</th>
                <td width="20%" class="text-center">Precio</th>
                <td width="20%" class="text-center">Total</th>
                <td width="5%">--</th>
            </tr>

            <?php $total = 0; ?>

            <?php foreach ($_SESSION['CARRITO'] as $indice => $producto) { ?>
                <tr>
                    <td width="40%"><?php echo $producto['NOMBRE'] ?></th>
                    <td width="15%" class="text-center"><?php echo $producto['CANTIDAD'] ?></th>
                    <td width="20%" class="text-center"><?php echo $producto['PRECIO'] ?></th>
                    <td width="20%" class="text-center"><?php echo number_format($producto['PRECIO'] * $producto['CANTIDAD'], 2); ?></th>

                    <td width="5%">
                        <form action="" method="post">
                            <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['ID'], COD, KEY); ?>">
                            <button class="btn btn-danger" type="submit" name="btnAccion" value="Eliminar">Elimina</button>
                        </form>
                        </th>


                </tr>
                <?php $total = $total + ($producto['PRECIO'] * $producto['CANTIDAD']); ?>
            <?php } ?>
            <tr>
                <td colspan="3" align="right">
                    <h3>Total</h3>
                </td>
                <td align="right">
                    <h3>$<?php echo number_format($total, 2) ?></h3>
                </td>
                <td></td>
            </tr>
            <tr>
                <td colspan="5">
                    <form action="pagar.php" method="post">
                        <div class="alert alert-success" >
                        <div class="form-group">
                            <label for="my-input">Direccion de envio</label>
                            <input id="direccion" 
                            name="direccion" 
                            class="form-control" 
                            type="text" placeholder="Por favor escribe tu direccion" required>
                        </div>
                             <small id="emailHelp" class="form-text text-muted">Los productos se enviaran a esta direccion</small>
                        </div>
                        <button class="btn btn-primary btn-lg btn-block" type="submit" name="btnAccion" value="proceder">Proceder a pagar >></button>

                        
                    </form>


                </td>
            </tr>

        </tbody>
    </table>

<?php } else { ?>
    <div class="alert alert-success" role="alert">
        No hay productos en el carrito
    </div>
<?php
}
?>



<?
include 'templates/pie.php';
?>