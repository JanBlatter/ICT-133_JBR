<?php
/**
 * ICT-133_JBR - register.php
 * User: Jan.BLATTER
 * Date: 20.01.2020
 */

ob_start();
$titre="Rent  A Snow - Accueil"
?>
<form class="form" method="POST" action="index.php?action=register">
    <br>
    <h1> Register </h1>
    <b>Username:</b><br>
    <input  type="email" name="username" value="" placeholder="username" required>
    <br>
    <b>Password:</b><br>
    <input type="password" name="password" value="" placeholder="password" required>
    <br>
    <br>
    <input type="submit" value="submit">
</form>
<?php
$content = ob_get_clean();
require "gabarit.php";