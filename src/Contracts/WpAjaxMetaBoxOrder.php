<?php

namespace WpService\Contracts;

interface WpAjaxMetaBoxOrder
{
/**
 * Handles saving the meta box order via AJAX.
 *
 * @since 3.1.0
 */
    public function wpAjaxMetaBoxOrder(): void;
}
