<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/



/*** To Include a all route filse in web.php ***/

foreach(File::allFiles(__DIR__.'/')as $partial)
{
require_once $partial->getPathname();
}

/*** To Include a single file in route ***/
//require app_path('/../routes/web_admin.php');


