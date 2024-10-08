<?php

namespace WpService\Contracts;

interface GetTheArchiveTitle
{
    /**
     * Retrieves the archive title based on the queried object.
     *
     * @since 4.1.0
     * @since 5.5.0 The title part is wrapped in a `<span>` element.
     *
     * @return string Archive title.
     */
    public function getTheArchiveTitle(): string;
}
