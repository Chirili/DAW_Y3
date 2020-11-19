<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    </style>
</head>
<body>
    <h1>Encuesta</h1>
    <p>Valore de 1 a 3 cada uno de estos aspectos.</p>
    <form action="resultado.php" method="post">
    <table>
        <thead>
            <tr>
                <th></th>
                <?php
                session_start();
                
                    $_SESSION["num_preguntas"] = count($_REQUEST);
                    $_SESSION["preguntas"] = [];
                    print_r($_REQUEST);
                    for($i=0;$i < $_SESSION["num_respuestas"];$i++){
                        print "<th>".($i+1)."</th>";
                    }
                ?>
            </tr>
            <tbody>
                <?php
                    foreach ($_REQUEST as $numeroPregunta => $pregunta) {
                        print "<tr>";
                        if(!empty($pregunta)){
                        print "<th>$pregunta :</th>";
                        for ($i=0; $i < $_SESSION["num_respuestas"]; $i++) {
                            $_SESSION["preguntas"][$numeroPregunta] = $pregunta;
                            print"<td><input type=radio name=\"".$numeroPregunta[-1]."\" value=".($i+1)."></td>";
                        }
                    }
                        print "</tr>";
                    }
                ?>
            </tbody>
        </thead>
    </table>
    <button type="submit">Enviar</button>
   </form>
</body>
</html>