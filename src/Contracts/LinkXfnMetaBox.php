<?php

namespace WpService\Contracts;

interface LinkXfnMetaBox
{
    /**
 * Displays XFN form fields.
 *
 * @since 2.6.0
 *
 * @param object $link Current link object.
 */
    public function linkXfnMetaBox(object $link): void;
}
