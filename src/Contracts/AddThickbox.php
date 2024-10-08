<?php

namespace WpService\Contracts;

interface AddThickbox
{
    /**
     * Enqueues the default ThickBox js and css.
     *
     * If any of the settings need to be changed, this can be done with another js
     * file similar to media-upload.js. That file should
     * require array('thickbox') to ensure it is loaded after.
     *
     * @since 2.5.0
     */
    public function addThickbox(): void;
}
