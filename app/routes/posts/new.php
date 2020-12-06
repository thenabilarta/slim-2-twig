<?php

$app->get('/posts/new', function () use ($app) {
    $name = [
        "nama" => "nabil"
    ];

    $app->render('posts/new.twig', compact('name'));
});