<?php

namespace Unisharp\Laravelfilemanager\Events;

class FolderWasCreated
{
    private $path;

    public function __construct($path)
    {
        $this->path = $path;
    }

    /**
     * @return string
     */
    public function path()
    {
        return $this->path;
    }
}
