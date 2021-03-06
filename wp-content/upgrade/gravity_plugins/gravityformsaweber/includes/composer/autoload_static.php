<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita88f42528ed1ba7c08b63051ba3fcff7
{
    public static $classMap = array (
        'AWeberAPI' => __DIR__ . '/..' . '/aweber/aweber/aweber_api/aweber.php',
        'AWeberAPIBase' => __DIR__ . '/..' . '/aweber/aweber/aweber_api/aweber.php',
        'AWeberAPIException' => __DIR__ . '/..' . '/aweber/aweber/aweber_api/exceptions.php',
        'AWeberCollection' => __DIR__ . '/..' . '/aweber/aweber/aweber_api/aweber_collection.php',
        'AWeberEntry' => __DIR__ . '/..' . '/aweber/aweber/aweber_api/aweber_entry.php',
        'AWeberEntryDataArray' => __DIR__ . '/..' . '/aweber/aweber/aweber_api/aweber_entry_data_array.php',
        'AWeberException' => __DIR__ . '/..' . '/aweber/aweber/aweber_api/exceptions.php',
        'AWeberMethodNotImplemented' => __DIR__ . '/..' . '/aweber/aweber/aweber_api/exceptions.php',
        'AWeberOAuthAdapter' => __DIR__ . '/..' . '/aweber/aweber/aweber_api/oauth_adapter.php',
        'AWeberOAuthDataMissing' => __DIR__ . '/..' . '/aweber/aweber/aweber_api/exceptions.php',
        'AWeberOAuthException' => __DIR__ . '/..' . '/aweber/aweber/aweber_api/exceptions.php',
        'AWeberResourceNotImplemented' => __DIR__ . '/..' . '/aweber/aweber/aweber_api/exceptions.php',
        'AWeberResponse' => __DIR__ . '/..' . '/aweber/aweber/aweber_api/aweber_response.php',
        'AWeberResponseError' => __DIR__ . '/..' . '/aweber/aweber/aweber_api/exceptions.php',
        'AWeberServiceProvider' => __DIR__ . '/..' . '/aweber/aweber/aweber_api/aweber.php',
        'CurlInterface' => __DIR__ . '/..' . '/aweber/aweber/aweber_api/curl_object.php',
        'CurlObject' => __DIR__ . '/..' . '/aweber/aweber/aweber_api/curl_object.php',
        'CurlResponse' => __DIR__ . '/..' . '/aweber/aweber/aweber_api/curl_response.php',
        'OAuthApplication' => __DIR__ . '/..' . '/aweber/aweber/aweber_api/oauth_application.php',
        'OAuthServiceProvider' => __DIR__ . '/..' . '/aweber/aweber/aweber_api/oauth_application.php',
        'OAuthUser' => __DIR__ . '/..' . '/aweber/aweber/aweber_api/oauth_application.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInita88f42528ed1ba7c08b63051ba3fcff7::$classMap;

        }, null, ClassLoader::class);
    }
}
