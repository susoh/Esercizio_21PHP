<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $studenti = [];
        $nomiStudenti = array("Matteo", "Mattia", "Gabriel");
        $cognomiStudenti = array("Ciardi", "Gori", "Siano");
        for ($i=0; $i <= 2; $i++) { 
            $listaVoti = array(rand(2,10), rand(2,10), rand(2,10));
            $stud = array("nome" => $nomiStudenti[rand(0,2)], "cognome" => $cognomiStudenti[rand(0,2)], "voti" => $listaVoti);
            array_push($studenti, $stud);
        }
    ?>
    <table style="border-collapse: collapse; border: 1px solid black;">
        <tr>
            <th style="border: 1px solid black;">Nome Studente</th>
            <th style="border: 1px solid black;">Cognome Studente</th>
            <th style="border: 1px solid black;">Media Voti</th>
            <th style="border: 1px solid black;">Voto Massimo</th>
        </tr>
        <?php
            for ($i=0; $i < sizeof($studenti); $i++) { 
                echo "<tr><td> {$studenti[$i]["nome"]}</td><td> {$studenti[$i]["cognome"]}</td> " . media() . "</tr>";
            }

            function media () {
                $somma = 0;
                for ($i=0; $i <= 2; $i++) { 
                    $somma = $studenti[0]["voti"][$i];
                }
                $media = $somma/3;
                return "<td>" . $media . "</td>";
            }
        ?>
    </table>
</body>
</html>