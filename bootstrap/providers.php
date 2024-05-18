<?php

return [
    App\Providers\AppServiceProvider::class,
    App\Providers\FortifyServiceProvider::class,
    App\Providers\JetstreamServiceProvider::class,
    GrahamCampbell\Markdown\MarkdownServiceProvider::class,
    Mongodb\Laravel\MongoDBServiceProvider::class,
    MongoDB\Laravel\Auth\PasswordResetServiceProvider::class,
    MongoDB\Laravel\MongoDBQueueServiceProvider::class,
];
