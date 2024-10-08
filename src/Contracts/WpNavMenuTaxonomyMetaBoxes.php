<?php

namespace WpService\Contracts;

interface WpNavMenuTaxonomyMetaBoxes
{
    /**
     * Creates meta boxes for any taxonomy menu item.
     *
     * @since 3.0.0
     */
    public function wpNavMenuTaxonomyMetaBoxes(): void;
}
