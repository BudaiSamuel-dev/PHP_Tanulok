<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php 
            require_once 'classes\data\Tanulo.php';

            use \PHP_Tanulok\classes\data\Tanulo;

            $tanulok = [];

            array_push($tanulok, (new Tanulo("Kiss Sára", 13, "B"))->setEvvegiAtlag(4.22));
            array_push($tanulok, (new Tanulo("Varga László", 12, "C"))->setTelefonszam("06 30 1212 008"));
            array_push($tanulok, new Tanulo("Takács Hilda", 13, "A"));
            array_push($tanulok, (new Tanulo("Széll Róbert", 11, "B"))->setTelefonszam("06 30 4444 005")->setEvvegiAtlag(3.85));
            array_push($tanulok, (new Tanulo("Wolf Zsanett", 12, "C"))->setEvvegiAtlag(4.14));
            array_push($tanulok, new Tanulo("Varga László", 11, "C"));
            array_push($tanulok, (new Tanulo("Mizse Anett", 13, "C"))->setTelefonszam("06 30 5555 222")->setEvvegiAtlag(4.37));
            array_push($tanulok, (new Tanulo("Szalai Bálint", 12, "A"))->setEvvegiAtlag(3.19));


            echo "<p>Tanulók: </p><ul>";
            foreach($tanulok as $tanulo){
                echo "<li>". $tanulo->getNev() . " (". $tanulo->getEvfolyam() ."/". $tanulo->getOsztaly() .")</li>";
            }
            echo "</ul>";

            foreach($tanulok as $tanulo){
                if($tanulo->getNev() == "Varga László" && $tanulo->getEvfolyam() == 11 && $tanulo->getOsztaly() == "C"){
                    $tanulo->setTelefonszam("06 20 1234 567");
                }
            }

            echo "<p>4.00 fölötti átlagú tanulók: </p><ul>";
            foreach($tanulok as $tanulo){
                if($tanulo->getEvvegiAtlag() != null && $tanulo->getEvvegiAtlag() > 4.00){
                    echo "<li>". $tanulo->getNev() . " (". $tanulo->getEvfolyam() ."/". $tanulo->getOsztaly() .", átlag:". $tanulo->getEvvegiAtlag() .")</li>";
                }
                
            }
            echo "</ul>";

            $telefonszamos = 0;
            foreach($tanulok as $tanulo){
                if($tanulo->getTelefonszam() != null){
                    $telefonszamos++;
                }
            }
            echo "<p>$telefonszamos tanuló adta meg a telefonszámát.</p>";

            echo "<table border='1'><tbody><tr><th>Név</th><th>Évfolyam</th><th>Osztály</th><th>Telefonszám</th><th>Év végi átlag</th></tr>";
            foreach($tanulok as $tanulo){
                $telefonszam = $tanulo->getTelefonszam() != null ? $tanulo->getTelefonszam() : " ";
                $evvegiatlag = $tanulo->getEvvegiAtlag() != null ? $tanulo->getEvvegiAtlag() : " ";

                echo "<tr>
                <td>". $tanulo->getNev() ."</td>
                <td>". $tanulo->getEvfolyam() ."</td>
                <td>". $tanulo->getOsztaly() ."</td>
                <td>". $telefonszam."</td>
                <td>". $evvegiatlag ."</td>
                </tr>";
            }
            echo "</tbody></table>";

        ?>
    </body>
</html>