<div class="event card">
    <h3><?php echo $event["name"] ?></h3>
    <p class="date">
        <?php
            $time = date_parse($event["time"]);
            $timestamp = mktime($time["hour"], $time["minute"], $time["second"], $time["month"], $time["day"], $time["year"]);
            echo date("d/m-Y H:i", $timestamp);
        ?>
    </p>
    <p class="description"><?php echo $event["description"] ?></p>
</div>