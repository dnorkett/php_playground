<?php

$config = require 'config.php';
require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';
require 'core/Router.php';


$pdo = Connection::make($config);

$query = new QueryBuilder($pdo);