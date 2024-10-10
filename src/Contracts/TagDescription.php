<?php

namespace WpService\Contracts;

interface TagDescription
{
    /**
     * Retrieves tag description.
     *
     * @since 2.8.0
     *
     * @param int $tag Optional. Tag ID. Defaults to the current tag ID.
     * @return string Tag description, if available.
     */
    public function tagDescription(int $tag): string;
}
