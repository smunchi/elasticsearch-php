<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit042702b33a86e187ca9a6128a678bb79
{
    public static $prefixesPsr0 = array (
        'E' => 
        array (
            'ElasticSearch' => 
            array (
                0 => __DIR__ . '/..' . '/nervetattoo/elasticsearch/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit042702b33a86e187ca9a6128a678bb79::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
