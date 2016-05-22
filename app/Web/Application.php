<?php

namespace App\Web;

use Illuminate\Foundation\Application as BaseApplication;

class Application extends BaseApplication
{
    /**
     * The environment file to load during bootstrapping.
     *
     * @var string
     */
    protected $environmentFile = '.env.web';

    /**
     * Get the path to the bootstrap directory.
     *
     * @return string
     */
    public function bootstrapPath()
    {
        return $this->basePath.DIRECTORY_SEPARATOR.'bootstrap/web';
    }

    /**
     * Get the path to the application configuration files.
     *
     * @return string
     */
    public function configPath()
    {
        return $this->basePath.DIRECTORY_SEPARATOR.'config/web';
    }

    /**
     * Get the path to the database directory.
     *
     * @return string
     */
    public function databasePath()
    {
        return $this->databasePath ?: $this->basePath.DIRECTORY_SEPARATOR.'database/web';
    }

    /**
     * Get the path to the language files.
     *
     * @return string
     */
    public function langPath()
    {
        return $this->basePath.DIRECTORY_SEPARATOR.'resources'.DIRECTORY_SEPARATOR.'lang/web';
    }

    /**
     * Get the path to the public / web directory.
     *
     * @return string
     */
    public function publicPath()
    {
        return $this->basePath.DIRECTORY_SEPARATOR.'www-web';
    }

    /**
     * Get the path to the storage directory.
     *
     * @return string
     */
    public function storagePath()
    {
        return $this->storagePath ?: $this->basePath.DIRECTORY_SEPARATOR.'storage/web';
    }


    /**
     * Get the environment file the application is using.
     *
     * @return string
     */
    public function environmentFile()
    {
        return $this->environmentFile ?: '.env.web';
    }
}
