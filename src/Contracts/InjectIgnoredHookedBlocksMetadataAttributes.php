<?php

namespace WpService\Contracts;

interface InjectIgnoredHookedBlocksMetadataAttributes
{
    /**
 * Inject ignoredHookedBlocks metadata attributes into a template or template part.
 *
 * Given an object that represents a `wp_template` or `wp_template_part` post object
 * prepared for inserting or updating the database, locate all blocks that have
 * hooked blocks, and inject a `metadata.ignoredHookedBlocks` attribute into the anchor
 * blocks to reflect the latter.
 *
 * @since 6.5.0
 * @access private
 *
 * @param \stdClass $changes    An object representing a template or template part
 *                                    prepared for inserting or updating the database.
 * @param \WP_REST_Request $deprecated Deprecated. Not used.
 * @return \stdClass|\WP_Error The updated object representing a template or template part.
 */
    public function injectIgnoredHookedBlocksMetadataAttributes(\stdClass $changes, \WP_REST_Request $deprecated): \stdClass|\WP_Error;
}
