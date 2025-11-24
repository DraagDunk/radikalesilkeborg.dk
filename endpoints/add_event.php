<?php
    $password = $_POST["password"];

    $pass_val = getenv("ADD_EVENT_PASSWORD");

    if ($password == $pass_val) {
        $postArray = array(
            "name"=> $_POST["name"] ?? "",
            "time"=> $_POST["time"] ?? 0,
            "description"=> $_POST["description"] ?? ""
        );

        $file = "../events.json";

        $existing = json_decode(file_get_contents($file));

        $existing[] = $postArray;

        $json = json_encode($existing);

        file_put_contents($file, $json);
    }

    header("Location: /", true, 301);
?>