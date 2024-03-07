<?php
//tdfyjtdpppp

//PEGAR VARIÁVEIS VINDAS NA URL

//$variaveis = $_GET;

//POR SER ARRAY, USAMOS O VAR_DUMP PARA
//VERIFICAR SEU CONTEÚDO 


//var_dump($variaveis);

$numero1 = $_POST["numero1"] ?? 0;
$numero2 = $_POST ["numero2"] ?? 0;
$operador = $_POST["operador"] ?? "somar";
$resultado = $numero1 + $numero2;

if($operador == "somar"){
    $resultado = $numero1 + $numero2;
}elseif($operador == "subtrair") {
    $resultado = $numero1 - $numero2;
}elseif($operador == "multiplicar"){
    $resultado = $numero1 * $numero2;

}elseif($operador == "dividir"){
    $resultado = $numero1 / $numero2

}






    

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class=container>
        <div class="row">
            <div class="col-4">
                <form method="post">
                    <div class="mb-3">
                        <label for="numero1" class="form-label"> Número 1 </label>
                        <input id="numero1" name="numero1" type="number" class="form-control">
                    </div>

                    <form method="post">
                    <div class="mb-3">
                        <label for="operador" class="form-label"> operador </label>
                        <select class="form-control" id="operador" name="operador">
                            <option value="somar">Somar</option>
                            <option value="subtrair">Subtrair</option>
                            <option value="multiplicar">Multiplicar</option>
                            <option value="dividr">Dividir</option>



                        </select>
                        
                    </div>





                    <div class="mb-3">
                        <label for="numero1" class="form-label"> Número 2</label>
                        <input id="numero1" name="numero2" type="number" class="form-control" >
                    </div>

                    <div class="mb-3">
                        <label for="numero1" class="form-label"> Resultado </label>
                        <input id="numero1" type="number" class="form-control" value="<?php echo $resultado?>">
                    </div>

                    <div class="mb-3">

                    <button class="btn btn-danger" type="reset" onclick="limparForm()">Limpar</button>
                    <button class="btn btn-primary" type="submit">Calcular</button>

                    </div>

                    <script>
                        //FUNÇÃO PARA LIMPAR O FORMULÁRIO
                        function limparForm(){
                            document.getElementById("numero1").value=""
                            document.getElementById("numero1").focus()
                            document.getElementById("numero2").value=""
                            document.getElementById("resultado").value=""
                        }
                        </script>

                    





                </form>
            </div>
        </div>





    </div>



</body>

</html>