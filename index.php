<?php

require 'autoload.php';
require 'functions.php';

use Classes\Template;

$tpl = new Template();
$tpl->title = 'htmlspecialchars test';
$tpl->name = 'You';
$tpl->show('templates/index.tpl.php');