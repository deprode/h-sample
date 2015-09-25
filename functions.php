<?php

use Classes\Security;

function h($string) {
    return Classes\Security::htmlentities($string);
}