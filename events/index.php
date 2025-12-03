<h2 id="arrangementer">Arrangementer</h2>
    <div class="events card-grid">
        <?php
            foreach ($arr as $event) {
                $time = date_parse($event["time"]);
                $timestamp = mktime($time["hour"], $time["minute"], $time["second"], $time["month"], $time["day"], $time["year"]);
                $curr_time = time();
                if ($timestamp > $curr_time) {
                    include("event.php");
                }
            }
        ?>
    </div>