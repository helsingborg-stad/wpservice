<?php

namespace WpService\Contracts;

interface WpEnqueueEditorBlockDirectoryAssets
{
/**
 * Enqueues the assets required for the block directory within the block editor.
 *
 * @since 5.5.0
 */
    public function wpEnqueueEditorBlockDirectoryAssets(): void;
}
