<?php

// old php 7.4 - we would use switch statements
$role = 'admin';

switch ($role) {
    case 'admin':
        var_dump('You are an admin');
        break;

    case 'super_admin':
        var_dump('you are a super admin');
        break;

    default:
        var_dump('you are a guest');
}

// new match statements in php 8
$role = 'guest';

$roleText = match ($role) {
    'admin' => 'you are an admin',
    'super_admin' => 'you are a super admin',
    default => 'you are a guest'
};

var_dump($roleText);