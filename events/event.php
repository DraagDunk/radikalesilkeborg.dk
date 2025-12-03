<div class="event card">
    <h3><?php echo $event["name"] ?></h3>
    <p class="date">
        <?php
            echo date("d/m-Y H:i", $timestamp);
        ?>
    </p>
    <p class="description"><?php echo $event["description"] ?></p>
</div>