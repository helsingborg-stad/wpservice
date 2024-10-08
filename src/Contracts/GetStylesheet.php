<?php

namespace WpService\Contracts;

interface GetStylesheet
{
    /**
     * Retrieves name of the current stylesheet.
     *
     * The theme name that is currently set as the front end theme.
     *
     * For all intents and purposes, the template name and the stylesheet name
     * are going to be the same for most cases.
     *
     * @since 1.5.0
     *
     * @return string Stylesheet name.
     */
    public function getStylesheet(): string;
}
