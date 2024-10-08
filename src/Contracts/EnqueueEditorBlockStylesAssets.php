<?php

namespace WpService\Contracts;

interface EnqueueEditorBlockStylesAssets
{
    /**
     * Function responsible for enqueuing the assets required for block styles functionality on the editor.
     *
     * @since 5.3.0
     */
    public function enqueueEditorBlockStylesAssets(): void;
}
