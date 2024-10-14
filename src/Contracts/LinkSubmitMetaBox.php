<?php

namespace WpService\Contracts;

interface LinkSubmitMetaBox
{
/**
 * Displays link create form fields.
 *
 * @since 2.7.0
 *
 * @param object $link Current link object.
 */
    public function linkSubmitMetaBox(object $link): void;
}
