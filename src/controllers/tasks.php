<?php

$tasks = $query->all('todos');

require 'src/views/tasks.template.php';