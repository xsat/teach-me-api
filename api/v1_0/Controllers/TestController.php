<?php

namespace Api\v1_0\Controllers;

/**
 * Class TestController
 */
class TestController extends BaseController
{
    public function testAction(): void
    {
        $this->response();
    }
}
