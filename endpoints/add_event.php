<?php
    $password = $_POST["password"];

    $pass_val = getenv("ADD_EVENT_PASSWORD");

    function cleanupEvents($events) {
        $curr_time = time();
        foreach ($events as $key => $value) {
            if (getTimestamp($value) < $curr_time) {
                unset($events[$key]);
            }
        }
        $time_col = array_column($events, "time");
        array_multisort($time_col, SORT_ASC, $events);

        return $events;
    }

    function getTimestamp($event) {
        $time = date_parse($event["time"]);
        $timestamp = mktime($time["hour"], $time["minute"], $time["second"], $time["month"], $time["day"], $time["year"]);
        return $timestamp;
    }

    if ($password == $pass_val) {
        $postArray = array(
            "name"=> $_POST["name"] ?? "",
            "time"=> $_POST["time"] ?? 0,
            "description"=> $_POST["description"] ?? ""
        );

        $file = "../events.json";

        $existing = json_decode(file_get_contents($file), true);

        $existing[] = $postArray;

        $existing = cleanupEvents($existing);

        $json = json_encode($existing);

        file_put_contents($file, $json);
    }

    header("Location: /", true, 301);
?>