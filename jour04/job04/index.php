<form method="post">
    Entrez votre nom <br>
    <input type="text" name="username">
    <br>Entrez votre Prénom <br>
    <input type="text" name="firstname">
    <br>Entrez votre Email <br>
    <input type="email" name="email">
    <br><br>
    <input type="submit" value="Envoyer">
</form>

<?php
if($_POST){?>
<table>
    <tr>
        <td>Argument</td>
        <td>Valeur</td>
    </tr>
    <tr>
        <td>Nom</td>
        <td><?= $_POST['username'] ?></td>
    </tr>
    <tr>
        <td>Prénom</td>
        <td><?php echo $_POST["firstname"]; ?></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><?php echo $_POST["email"]; ?></td>
    </tr>
</table>
<?php } ?>