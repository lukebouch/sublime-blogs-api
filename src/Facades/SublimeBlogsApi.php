<?php

namespace LukeBouch\SublimeBlogsApi\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \LukeBouch\SublimeBlogsApi\SublimeBlogsApi
 */
class SublimeBlogsApi extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'sublime-blogs-api';
    }
}
