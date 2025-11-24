<?php
    $title = "Forside";
    include("../header.php");
?>
<body>

<?php
    include("../navigation.php");
?>

<div class="page">
    <div class="content">
        <h1>Tilføj begivenhed</h1>
        <form action="/endpoints/add_event.php" method="POST" enctype="multipart/form-data">
            <div>
                <label for="name">Navn</label>
                <input type="text" name="name" id="name_id">
            </div>
            <div>
                <label for="time">Tidspunkt</label>
                <input type="datetime-local" name="time" id="time_id">
            </div>
            

            <label for="description">Beskrivelse</label>
            <div>
                <textarea name="description" id="description_id" width></textarea>
            </div>

            <label for="password">Kodeord</label>
            <input type="password" name="password" id="password_id">

            <button type="submit">Gem</button>
        </form>
    </div>
</div>

<?php
    include("../footer.php");
?>

    
</body>
</html>