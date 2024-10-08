<?php

namespace WpService\Contracts;

interface TheBlockEditorMetaBoxPostFormHiddenFields
{
    /**
     * Renders the hidden form required for the meta boxes form.
     *
     * @since 5.0.0
     *
     * @param \WP_Post $post Current post object.
     */
    public function theBlockEditorMetaBoxPostFormHiddenFields(\WP_Post $post): void;
}
