<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Allowed Origins
    |--------------------------------------------------------------------------
    |
    | You can specify which origins are allowed to access your application's
    | API. You can use `*` to allow all origins or specify them individually.
    |
    */

    'allowed_origins' => ['http://localhost:3000', 'http://127.0.0.1:3000'],

    /*
    |--------------------------------------------------------------------------
    | Allowed Origins Patterns
    |--------------------------------------------------------------------------
    |
    | You can also specify patterns for allowed origins. This is useful if
    | you have multiple subdomains or dynamic preview URLs.
    |
    */

    'allowed_origins_patterns' => [],

    /*
    |--------------------------------------------------------------------------
    | Allowed Headers
    |--------------------------------------------------------------------------
    |
    | You can specify which headers are allowed in the request. The `*` value
    | allows all headers. You can also specify them individually.
    |
    */

    'allowed_headers' => ['*'],

    /*
    |--------------------------------------------------------------------------
    | Allowed Methods
    |--------------------------------------------------------------------------
    |
    | You can specify which HTTP methods are allowed. The `*` value allows all
    | methods. You can also specify them individually.
    |
    */

    'allowed_methods' => ['*'],

    /*
    |--------------------------------------------------------------------------
    | Exposed Headers
    |--------------------------------------------------------------------------
    |
    | You can specify which headers are exposed to the browser. By default,
    | no headers are exposed.
    |
    */

    'exposed_headers' => [],

    /*
    |--------------------------------------------------------------------------
    | Max Age
    |--------------------------------------------------------------------------
    |
    | The `Access-Control-Max-Age` header indicates how long the results of a
    | preflight request can be cached. This is specified in seconds.
    |
    */

    'max_age' => 0,

    /*
    |--------------------------------------------------------------------------
    | Supports Credentials
    |--------------------------------------------------------------------------
    |
    | The `Access-Control-Allow-Credentials` header indicates whether or not
    | the response to the request can be exposed when the credentials flag is
    | true. When used as part of a response to a preflight request, this
    | indicates whether or not the actual request can be made using
    | credentials.
    |
    */

    'supports_credentials' => false,

    /*
    |--------------------------------------------------------------------------
    | Allowed Paths
    |--------------------------------------------------------------------------
    |
    | You can specify which paths should be handled by the CORS middleware. By
    | default, all paths are handled.
    |
    */

    'paths' => ['api/*', 'sanctum/csrf-cookie'],

];
