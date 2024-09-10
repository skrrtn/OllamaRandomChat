<?php
        $personasFolder = './personas';
        $files = glob($personasFolder . '/*.json');
            if (!$files) {
                echo json_encode(["error" => "No persona files found"]);
                exit;
            }
        $randomFile = $files[array_rand($files)];
        $personaData = file_get_contents($randomFile);

    header('Content-Type: application/json');
    echo $personaData;