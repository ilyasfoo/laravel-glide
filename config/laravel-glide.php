<?php

return [

    /*
     * The driver that will be used to create images. Can be set to gd or imagick.
     */
    'driver' => 'gd',

    /*
     * Storage key that will be used for source file according to filesystem config. 
     * Your laravel default should have local, public, and s3.
     */
    'source_storage' => 'local',
];
