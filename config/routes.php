<?php

declare(strict_types=1);

$app->get("/view-guests" ,"GuestEntryController:viewGuests");
$app->get("/count-guests" ,"GuestEntryController:countGuests");
$app->get("/get-single-guest/{id}","GuestEntryController:getSingleGuest");

$app->post("/create-guest","GuestEntryController:createGuest");

$app->patch("/edit-single-guest/{id}","GuestEntryController:editGuest");

$app->delete("/delete-guest/{id}","GuestEntryController:deleteGuest");

$app->group("/auth",function() use ($app){
    $app->post("/login","AuthController:Login");
    $app->post("/register","AuthController:Register");
});