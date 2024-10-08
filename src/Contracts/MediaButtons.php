<?php

namespace WpService\Contracts;

interface MediaButtons
{
    /**
     * Adds the media button to the editor.
     *
     * @since 2.5.0
     *
     * @global int $post_ID
     *
     * @param string $editorId
     */
    public function mediaButtons(string $editorId = 'content'): void;
}
