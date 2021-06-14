<?php

require_once dirname(__DIR__) . '/config/init.php';
require_once LIBS . '/functions.php';

new \store\App();
debug(\store\App::$app->getProperties());
echo 'hi hi';