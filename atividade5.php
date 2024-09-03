<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Atividade 5</title>
</head>
<body>
    <div class="divPrincipal">
        <div class="borda">
            <form method="post" class='form'>
                <div>
                    <h2>CALCULAR A AREA DE UM TRIÂNGULO</h2>
                    <br>
                    <div class="limite">
                        <h3>O VALOR LIMITE DE DE AREA FINAL É: <p font style="color:red">100cm²</p></h3>
                    </div>
                </div>
                <p>Em centimentros, forneça dos dados:</p>
                <hr class="hr">
                <label for="base">Digite o comprimento da base:</label>
                <input type="number" id="base" name="base" required>
                <br>
                <label for="altura">Digite a altura do triângulo:</label>
                <input type="number" id="altura" name="altura" required>
                <br>
                <br>
                <button type="submit" name="calcular_area_triangulo">Calcular</button>
            </form>
        
            <div class="divArea">
                <?php
                    if($_SERVER['REQUEST_METHOD'] == 'POST'){
                        if(isset($_POST['calcular_area_triangulo'])){
                            $base = $_POST['base'];
                            $altura = $_POST['altura'];
                            $area = (($base * $altura) / 2);
                            echo '<div class = "area" >'."A área do triangulo fornecido é: ".'<font style="color:red"; font size="5">'." $area cm². <br> <br>";

                            if($area > 100){
                                echo '<font style="color:black"; font size="3">'."A área do triângulo fornecido é maior que o valor limite.";
                            }else{
                                echo '<font style="color:black"; font size="3">'."A area do triângulo fornecido é menor que o valor limite.";
                            }
                        }
                    }
                ?>
            </div>
        </div>
    </div>
    <footer>
        <br>
        <br>
        Maria Eduarda Darolt Pedroso
        <br>
        DS24 M2
    </footer>
</body>
</html>