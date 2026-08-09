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

if ($metodo == "base64") {
    $resultado = base64_encode($texto);
}


?>

<main>

    <section id="resultado">

        <div class="container">

            <h2>Resultado</h2>

            <div class="card">

            <p>Texto informado: <?php echo $texto; ?></p>

            <p>Método utilizado: <?php echo $metodo; ?></p>

            <p>Resultado: <?php echo $resultado; ?></p>

        </div>

        </div>
    </section>

</main>

<?php

include("includes/footer.php");

?>
