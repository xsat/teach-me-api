<?php

use Api\v1_0\Controllers\TestController;
use Nen\Http\Request;
use Nen\Router\Group;
use Nen\Router\Route;
use Nen\Router\Routes;

return new Group('api/1.0', new Routes([
    new Group('test', new Routes([
        /** @see TestController::testAction() */
        new Route(TestController::class, 'test', null, Request::METHOD_GET),
    ])),
]));
