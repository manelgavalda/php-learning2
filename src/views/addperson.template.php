<?php require 'src/core/partials/headers.php' ?>

    <?php require 'menu.php' ?>

<form method="post" action="/names">

    <label for="forName">Name:</label>
    <input type="text" name="name" placeholder="Put your name"/>
    <input type="submit" value="Enviar">

</form>

<?php require 'src/core/partials/footers.php' ?>