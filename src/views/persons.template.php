<?php require 'src/core/partials/headers.php'; ?>

    <?php require 'menu.php' ?>

    <ul>
        <?php foreach ($persons as $person) : ?>
            <li>
            <?= $person->FirstName ?>
            </li>
        <?php endforeach;?>
    </ul>

<?php require 'src/core/partials/footers.php' ?>