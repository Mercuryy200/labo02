<?php
require "script/header.php";
?>
<!-- Slideshow container -->
<div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="images/tie1.webp" style="width:50%">
        <div class="txt" style="width:50%; float: right;"> this is a test </div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="images/tie3.webp" style="width:50%">
        <div class="txt" style="width:50%; float: right;"> this is a test </div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="images/tshirt5.webp" style="width:50%">
        <div class="txt" style="width:50%; float: right;"> this is a test </div>
    </div>

    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
</div>
<div class="parcours">
    <h2>Bienvenue dans l'univers de Rich Ricasso, créateur d'élégance intemporelle.</h2>
    <p> Découvrez la nouvelle gamme d'été en soie unisexe, une collection audacieuse
        où luxe et modernité s'unissent. Inspirée par le mouvement vaporwave et vaporfashion,
        cette ligne unique met en lumière des tons pastel subtils, du bleu ciel au rose poudré,
        en passant par le violet lavande, capturant ainsi l'essence d'un style raffiné et avant-gardiste.
        Rich Ricasso, le maître cravatier et chemisier de renommée internationale, vous invite à explorer
        sa vision du luxe accessible. Chaque pièce est confectionnée avec soin, reflétant une sophistication
        qui ne fait aucun compromis. Laissez-vous séduire par l'alliance parfaite entre esthétique
        et confort, pensée pour ceux qui apprécient la mode d'exception.
        Bienvenue dans un monde où l'art de la soie devient une expérience inoubliable. </p>
</div>
<script>
    let slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("demo");
        let captionText = document.getElementById("caption");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        captionText.innerHTML = dots[slideIndex - 1].alt;
    }
</script>

<?php
require "script/footer.php";
?>