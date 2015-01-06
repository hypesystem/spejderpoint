<!DOCTYPE html>
<html>
    <head>
        <title>Spejderpoint</title>
    </head>
    <body>
        <?php
            $datastream = file_get_contents("datastream.csv");
            $lines = explode("\n", $datastream);
            $teams = array();
            
            foreach($lines as $line) {
                if($line == "") break;
                $fields = explode(",", $line);
                if($fields[0] != "AddPoints") {
                    echo "Unrecognized event-type ".$fields[0];
                    continue;
                }
                if(!isset($teams[$fields[2]])) {
                    $teams[$fields[2]] = 0;
                }
                $teams[$fields[2]] += floatval($fields[3]);
            }

            foreach($teams as $team => $points) {
                echo $team.": ".$points." point<br>";
            }
        ?>
    </body>
</html>