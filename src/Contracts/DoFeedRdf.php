<?php

namespace WpService\Contracts;

interface DoFeedRdf
{
    /**
     * Loads the RDF RSS 0.91 Feed template.
     *
     * @since 2.1.0
     *
     * @see load_template()
     */
    public function doFeedRdf(): void;
}
