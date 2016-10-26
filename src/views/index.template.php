<?php require 'menu.php' ?>

<?php require 'src/core/partials/headers.php' ?>

<ul>
    <?php foreach ($tasks as $task) : ?>
        <li>
            <?= $task->description ?>
        </li>
    <?php endforeach;?>
</ul>

<?php require 'src/core/partials/footers.php' ?>
