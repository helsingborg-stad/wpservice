<?php

namespace WpService\Contracts;

interface BodyClass
{
    /**
     * Displays the class names for the body element.
     *
     * @since 2.8.0
     *
     * @param string|string[] $cssClass Optional. Space-separated string or array of class names
     *                                   to add to the class list. Default empty.
     */
    public function bodyClass(string|array $cssClass = ''): void;
}
