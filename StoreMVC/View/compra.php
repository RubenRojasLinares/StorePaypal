
<script src="JS/Compra.js" type="text/javascript"></script>

<br>
<?php

    $datoEnviado= $_POST["dato"];
    echo "cantidad de productos es=".$datoEnviado;

?>

<div id="paypal-button-container"></div>


<form id="paypalform" action="View/success.php" method="POST">
    <input type="hidden" name="details" id="details-input"> 
</form>
