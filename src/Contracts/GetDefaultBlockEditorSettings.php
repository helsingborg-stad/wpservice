<?php

namespace WpService\Contracts;

interface GetDefaultBlockEditorSettings
{
    /**
     * Returns the default block editor settings.
     *
     * @since 5.8.0
     *
     * @return array The default block editor settings.
     */
    public function getDefaultBlockEditorSettings(): array;
}
