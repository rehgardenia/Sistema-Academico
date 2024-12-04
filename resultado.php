<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Academico</title>
    <link rel="stylesheet" href="./css/resultado.css">
</head>
<body>

    <div class="container">
        <?php
            $disciplina  = $_POST['disciplina'];
            $aluno =  $_POST['aluno'] ;
            $aulas = $_POST['aulas'] ;
            $faltas = $_POST['faltas'] ;
            $faltasPorcentagem = 100 * $faltas / $aulas;
            $A1 = $_POST['A1'] ;
            $A2 = $_POST['A2'] ;
            $A3 = $_POST['A3'] ;
            $A4 = $_POST['A4'] ;
            $media = ( $A1*2 + $A2*2 + $A3*3 + $A4*3) / (2+2+3+3) ;

            if ($faltasPorcentagem > 25/100){
                $conceito = "Recuperação";
            }
            else if ($media < 2 ){
                $conceito = "Reprovado";
            }
            else if ($media >= 6 ){
                $conceito = "Aprovado";
            }
            else {
                $conceito = "Recuperação";
            }
        ?>

        <h1>SISTEMA ACADÊMICO</h1>


        <div class="section">
            <label>Disciplina:</label>
            <div class="result"><?php echo $disciplina; ?></div>
        </div>

        <div class="section">
            <label>Aluno(a):</label>
            <div class="result"><?php echo $aluno; ?></div>
        </div>

        <div class="section">
            <label>Aulas:</label>
            <div class="result"><?php echo $aulas; ?></div>
        </div>

        <div class="section">
            <label>Faltas:</label>
            <div class="result"><?php echo $faltas; ?></div>
        </div>

        <div class="section">
            <label>Porcentagem de Faltas:</label>
            <div class="result"><?php echo $faltasPorcentagem; ?>%</div>
        </div>

        <div class="section">
            <label>Avaliações:</label>
            <div class="result"><?php echo "Avaliação 1 : " .$A1 . "<br> Avaliação 2 : " . $A2 . " <br> Avaliação 3 : " . $A3 . " <br> Avaliação 4 :  " . $A4; ?></div>
        </div>

        <div class="section">
            <label>Média:</label>
            <div class="result"><?php echo $media; ?></div>
        </div>

        <div class="section">
            <label>Situação:</label>
            <div class="result highlight"><?php echo $conceito; ?></div>
        </div>

        <div class="footer">
            <p>Desenvolvido por Renata Gardenia - 02/12/2024 </p>
        </div>
    </div>

</body>
</html>
