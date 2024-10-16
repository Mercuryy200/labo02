<?php
require "header.php";
?>
    <form action="" method="POST">
        <label for="prenom">Prénom:</label>
        <input type="text" id="prenom" name="prenom">
        <br>
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom">
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        <br>
        <input type="submit" value="S'inscrire">
    </form>
<?php
require "footer.php";
?>