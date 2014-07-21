<?php
namespace Tinitter;
class Route
{
    public static function registration($app)
    {
        $app->get('/', '\Tinitter\Controller\TimeLine:show');
    }
}
