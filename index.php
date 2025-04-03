<?php
    $title = "Home";
    include("header.php");
?>
<body>

<?php
    include("navigation.php");
?>

<div class="page">
    <div class="content">

        <h1 id="home">Person Personsen</h1>

        <p>Personsen er en person, som laver ting som en person laver. Person har relationer til andre personer, som nyder Persons person.</p>

        <h2 id="news">Nyheder</h2>

        <p>Der er sket noget nyt, og det kan du læse om her.</p>

        <h2 id="about">Om Personsen</h2>

        <p>Der er allerede skrevet lidt om Person, men udover hvad der allerede er sagt, kan jeg vel sige, at Person er</p>

        <div class="about-section">
            <div class="image-container">
                <img src="image.jpeg" alt="Billede af person">
            </div>

            <div class="info-box">
                <p>Nu tænker du nok: Er det ikke meget generisk? Jo, det er det. Men det er sikkert meget godt.</p>

                <p>Billedet her på siden er computergeneret, og forestiller ikke nogen.</p>
            </div>
        </div>

        <h2 id="contact">Kontakt</h2>

        <p>Vil du noget? Så kom bare an, du kan kontakte mig på en af de stygge sociale medier på knapperne.</p>

        <div class="social-media-buttons">
                    <a href="https://www.instagram.com/person_personsen_not_a_real_person" class="sm-icon fa-brands fa-instagram"></a>
                    <a href="https://www.x.com/person_personsen_not_a_real_person" class="sm-icon fa-brands fa-x-twitter"></a>
                    <a href="https://www.facebook.com/person_personsen_not_a_real_person" class="sm-icon fa-brands fa-facebook"></a>
                    <a href="https://www.tiktok.com/person_personsen_not_a_real_person" class="sm-icon fa-brands fa-tiktok"></a>
                    <a href="mailto:dennemailfindesheltsikkert@ikke.com" class="sm-icon fa fa-envelope"></a>
                </div>

    </div>
</div>

<?php
    include("footer.php");
?>

    
</body>
</html>