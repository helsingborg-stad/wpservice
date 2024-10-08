<?php

namespace WpService\Contracts;

interface GetTypographyStylesForBlockCoreSearch
{
    /**
     * Returns typography styles to be included in an HTML style tag.
     * This excludes text-decoration, which is applied only to the label and button elements of the search block.
     *
     * @since 6.1.0
     *
     * @param array $attributes The block attributes.
     *
     * @return string A string of typography CSS declarations.
     */
    public function getTypographyStylesForBlockCoreSearch(array $attributes): string;
}
