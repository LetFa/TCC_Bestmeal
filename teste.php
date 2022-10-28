<?php

require __DIR__ . "/migration/Controllers/UsersController.php";

$teste = new UsersController();
print_r($teste->deleteUser('2'));

    