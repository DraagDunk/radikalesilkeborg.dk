<div class="event card">
    <h3><?php echo $event["name"] ?></h3>
    <p class="date">
        <?php
            date_default_timezone_set("Europe/Copenhagen");
            echo date("d/m-Y H:i", $event["time"]);
        ?>
    </p>
    <p class="description"><?php echo $event["description"] ?></p>
</div>