<?php
require "header.php";
?>
<h2>Infolettre</h2>
    <div class="container">
        <h2>Abonnez-vous à l'infolettre</h2>
        <p>Recevez en exclusivité nos dernières nouveautés, promotions et collections en avant-première!</p>
        <form action="info.php" method="POST">
            <label for="email">Votre email :</label>
            <input type="email" id="email" name="email" required>

            <button type="submit" class="btn-submit">S'inscrire</button>
        </form>
        <?php if (isset($message)) : ?>
            <p class="message"><?= htmlspecialchars($message); ?></p>
        <?php endif; ?>
    </div>
<?php
require "footer.php";
?>