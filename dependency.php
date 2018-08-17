<?php

require __DIR__.'/Logger.php';
require __DIR__.'/UserProfile.php';

$logger = new Logger();
$profile = new UserProfile($logger);
$profile->createUser();
echo "<br/>";
$profile->updateUser();
echo "<br/>";
$profile->deleteUser();

