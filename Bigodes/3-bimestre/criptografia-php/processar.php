<?php

include("includes/header.php");

$texto = $_POST["texto"];
$metodo = $_POST["metodo"];

if ($metodo == "md5") {
    $resultado = md5($texto);
}

if ($metodo == "sha256") {
    $resultado = hash("sha256", $texto);
}



?>

<main>

    <div class="container">

        <h2>Resultado</h2>

        <p>Texto informado: <?php echo $texto; ?></p>

        <p>Método utilizado: <?php echo $metodo; ?></p>

        <p>Resultado: <?php echo $resultado; ?></p>

    </div>

</main>

<?php

include("includes/footer.php");

?>
