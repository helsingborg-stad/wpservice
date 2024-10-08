<?php

namespace WpService\Contracts;

interface WpMetadataLazyloader
{
    /**
 * Retrieves the queue for lazy-loading metadata.
 *
 * @since 4.5.0
 *
 * @return \WP_Metadata_Lazyloader Metadata lazyloader queue.
 */
    public function wpMetadataLazyloader(): \WP_Metadata_Lazyloader;
}
