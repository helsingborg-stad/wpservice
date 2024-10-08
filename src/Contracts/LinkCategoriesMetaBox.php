<?php

namespace WpService\Contracts;

interface LinkCategoriesMetaBox
{
    /**
     * Displays link categories form fields.
     *
     * @since 2.6.0
     *
     * @param object $link Current link object.
     */
    public function linkCategoriesMetaBox(object $link): void;
}
