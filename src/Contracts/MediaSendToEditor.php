<?php

namespace WpService\Contracts;

interface MediaSendToEditor
{
/**
 * Adds image HTML to editor.
 *
 * @since 2.5.0
 *
 * @param string $html
 */
    public function mediaSendToEditor(string $html): void;
}
