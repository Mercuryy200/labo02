<?php
require "header.php";
require_once 'UserController.php';
require_once 'UserView.php';

// Créer une connexion à la base de données avec PDO
$database = new PDO('mysql:host=localhost;dbname=mes_utilisateurs', 'admin', '1234');

// Créez une instance du contrôleur et de la vue
$userController = new UserController($database);
$userView = new UserView();
// Récupérez tous les utilisateurs et affichez-les
$users = $userController->getAllUsers();
$userView->displayUsers($users);
// 2e partie :
// Créez un nouvel utilisateur
$userController->createUser("John Doe", "johndoe@example.com");
// Mettre à jour un utilisateur existant
$userController->updateUser(1, "Jane Doe", "janedoe@example.com");
// Supprimer un utilisateur
$userController->deleteUser(3);
// Récupérez tous les utilisateurs à nouveau et affichez-les après les modifications
$users = $userController->getAllUsers();
$userView->displayUsers($users);

?>

<div class="forms">
    <form action="" method="POST" class="connexion">
        <h2>CONNEXION</h2>
        <input type="email" id="email" name="email" placeholder="Adresse e-mail*" required>
        <br>
        <input type="password" id="mdp" name="mdp" placeholder="Mot de passe*" required>
        <br>
        <input type="checkbox" name="chkbx" id="chkbx">
        <label for="chkbx">Se souvenir de moi.</label>
        <br>
        <input type="submit" value="CONNEXION">
    </form>
    <br>
    <p>Vous avez déjà un compte?</p>
    <br>
    <button href="signUp.php">S'inscrire</button>
</div>
<?php
require "footer.php";
?>