<?php

namespace WpService\Contracts;

interface GetEditorStylesheets
{
/**
 * Retrieves any registered editor stylesheet URLs.
 *
 * @since 4.0.0
 *
 * @global array $editor_styles Registered editor stylesheets
 *
 * @return string[] If registered, a list of editor stylesheet URLs.
 */
    public function getEditorStylesheets(): array;
}
