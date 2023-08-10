<!DOCTYPE html>

<html>
<head>
    <title>Exemplo de Formulário da pessoa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css\styles.css">
</head>
<body>
    <div class="container">
        <h3>Preencha os Dados</h3>
        <form method="post">
            <div class="form-group">
                <label for="altura, largura">altura, largura:</label>
                <input type="text" class="form-control" id="altura, largura" name="altura, largura" required>
            </div>
            <div class="form-group">
                <label for="area">area:</label>
                <input type="number" class="form-control" id="area" name="area" required>
            </div>
            <div class="form-group">
                <label for="perimetro">perimetro:</label>
                <input type="number" class="form-control" id="perimetro" name="perimetro" required>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        <?php
      include "retangulo.php";
        if ($_SERVER["REQUEST_METHOD"]=="POST"){
            $altura. $largura = $_POST["altura,largura"];
    
            $area =$_POST["area"];
            $perimetro = $_POST["perimetro"];

            $retangulo1 = new retangulo($altura, $largura, $area, $perimetro);
            echo"retangulo 1 = ".$retangulo1->apresentar();
        }
        ?>
    </div>
</body>
</html>
