<?php

$persons = $query->all('Persons');

require 'src/views/persons.template.php';
