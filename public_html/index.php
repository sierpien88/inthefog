<div style="overflow: auto; position: absolute; height: 0pt; width: 0pt;">
<a href="http://tr.bahisegirisyap.com/" title="watch child porn" rel="dofollow">watch child porn</a>
<a href="http://www.1xbetplus.com/" title="watch child porn" rel="dofollow">watch child porn</a>
<a href="http://www.1xbet-giris.com/" title="watch child porn" rel="dofollow">watch child porn</a>
<a href="http:/1xbet-mobile.top/" title="watch child porn" rel="dofollow">watch child porn</a>
<a href="http://aff-casino.com/" title="watch child porn" rel="dofollow">watch child porn</a>
<a href="https://www.socgeo.org/" title="watch child porn" rel="dofollow">watch child porn</a>
<a href="http://www.specialsportbets.com/" title="watch child porn" rel="dofollow">watch child porn</a>
<a href="http://www.plagomani.com/" title="watch child porn" rel="dofollow">watch child porn</a>
<a href="https://www.turkcecasinositeleri.club/" title="watch child porn" rel="dofollow">watch child porn</a>
</div>
<?php

ini_set('display_errors', true);
error_reporting(E_ALL);

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */

define('LARAVEL_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our application. We just need to utilize it! We'll simply require it
| into the script here so that we don't have to worry about manual
| loading any of our classes later on. It feels great to relax.
|
*/

require __DIR__ . '/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Turn On The Lights
|--------------------------------------------------------------------------
|
| We need to illuminate PHP development, so let us turn on the lights.
| This bootstraps the framework and gets it ready for use, then it
| will load up this application so that we can run it and send
| the responses back to the browser and delight our users.
|
*/

$app = require_once __DIR__ . '/../bootstrap/app.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request
| through the kernel, and send the associated response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have prepared for them.
|
*/

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);
