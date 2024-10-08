<?php

namespace WpService\Contracts;

interface WpEnqueueEditorFormatLibraryAssets
{
    /**
     * Enqueues the assets required for the format library within the block editor.
     *
     * @since 5.8.0
     */
    public function wpEnqueueEditorFormatLibraryAssets(): void;
}
