<?php

declare(strict_types=1);

return function($container)
{
    $container["GuestEntryController"] = function() {
        return new \App\Controllers\GuestEntryController;
    };

    $container["AuthController"] = function() {
        return new \App\Controllers\AuthController;
    };

};