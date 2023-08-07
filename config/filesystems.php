<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default filesystem disk that should be used
    | by the framework. The "local" disk, as well as a variety of cloud
    | based disks are available to your application. Just store away!
    |
    */

    'default' => env('FILESYSTEM_DRIVER', 'local'),

    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | Here you may configure as many filesystem "disks" as you wish, and you
    | may even configure multiple disks of the same driver. Defaults have
    | been setup for each driver as an example of the required options.
    |
    | Supported Drivers: "local", "ftp", "sftp", "s3"
    |
    */

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
        ],

        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => env('APP_URL') . '/storage',
            'visibility' => 'public',
        ],
        'category' => [
            'driver' => 'local',
            'root' => storage_path('app/public/category'),
            'url' => env('APP_URL') . '/storage/category',
            'visibility' => 'public',
        ],
        'post' => [
            'driver' => 'local',
            'root' => storage_path('app/public/post'),
            'url' => env('APP_URL') . '/storage/post',
            'visibility' => 'public',
        ],
        'service' => [
            'driver' => 'local',
            'root' => storage_path('app/public/service'),
            'url' => env('APP_URL') . '/storage/service',
            'visibility' => 'public',
        ],
        'subService' => [
            'driver' => 'local',
            'root' => storage_path('app/public/sub-service'),
            'url' => env('APP_URL') . '/storage/sub-service',
            'visibility' => 'public',
        ],
        'product' => [
            'driver' => 'local',
            'root' => storage_path('app/public/product'),
            'url' => env('APP_URL') . '/storage/product',
            'visibility' => 'public',
        ],
        'page' => [
            'driver' => 'local',
            'root' => storage_path('app/public/page'),
            'url' => env('APP_URL') . '/storage/page',
            'visibility' => 'public',
        ],
        'image' => [
            'driver' => 'local',
            'root' => storage_path('app/public/image'),
            'url' => env('APP_URL') . '/storage/image',
            'visibility' => 'public',
        ],
        'customer' => [
            'driver' => 'local',
            'root' => storage_path('app/public/customer'),
            'url' => env('APP_URL') . '/storage/customer',
            'visibility' => 'public',
        ],
        'partner' => [
            'driver' => 'local',
            'root' => storage_path('app/public/partner'),
            'url' => env('APP_URL') . '/storage/partner',
            'visibility' => 'public',
        ],
        'team' => [
            'driver' => 'local',
            'root' => storage_path('app/public/team'),
            'url' => env('APP_URL') . '/storage/team',
            'visibility' => 'public',
        ],
        'testimonial' => [
            'driver' => 'local',
            'root' => storage_path('app/public/testimonial'),
            'url' => env('APP_URL') . '/storage/testimonial',
            'visibility' => 'public',
        ],
        'social' => [
            'driver' => 'local',
            'root' => storage_path('app/public/social'),
            'url' => env('APP_URL') . '/storage/social',
            'visibility' => 'public',
        ],
        'news' => [
            'driver' => 'local',
            'root' => storage_path('app/public/news'),
            'url' => env('APP_URL') . '/storage/news',
            'visibility' => 'public',
        ],
        'banner' => [
            'driver' => 'local',
            'root' => storage_path('app/public/banner'),
            'url' => env('APP_URL') . '/storage/banner',
            'visibility' => 'public',
        ],
        'why_choose' => [
            'driver' => 'local',
            'root' => storage_path('app/public/why_choose'),
            'url' => env('APP_URL') . '/storage/why_choose',
            'visibility' => 'public',
        ],
        'gallery' => [
            'driver' => 'local',
            'root' => storage_path('app/public/gallery'),
            'url' => env('APP_URL') . '/storage/gallery',
            'visibility' => 'public',
        ],
        'project' => [
            'driver' => 'local',
            'root' => storage_path('app/public/project'),
            'url' => env('APP_URL') . '/storage/project',
            'visibility' => 'public',
        ],
        's3' => [
            'driver' => 's3',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
            'url' => env('AWS_URL'),
            'endpoint' => env('AWS_ENDPOINT'),
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Symbolic Links
    |--------------------------------------------------------------------------
    |
    | Here you may configure the symbolic links that will be created when the
    | `storage:link` Artisan command is executed. The array keys should be
    | the locations of the links and the values should be their targets.
    |
    */

    'links' => [
        public_path('storage') => storage_path('app/public'),
    ],

];
