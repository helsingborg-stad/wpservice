<?php

namespace WpService\Contracts;

interface UpdateRecentlyEdited
{
    /**
     * Updates the "recently-edited" file for the plugin or theme file editor.
     *
     * @since 1.5.0
     *
     * @param string $file
     */
    public function updateRecentlyEdited(string $file): void;
}
