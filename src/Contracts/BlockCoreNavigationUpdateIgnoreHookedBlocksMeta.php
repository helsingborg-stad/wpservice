<?php

namespace WpService\Contracts;

interface BlockCoreNavigationUpdateIgnoreHookedBlocksMeta
{
    /**
 * Updates the post meta with the list of ignored hooked blocks when the navigation is created or updated via the REST API.
 *
 * @access private
 * @since 6.5.0
 *
 * @param \stdClass $post Post object.
 * @return \stdClass The updated post object.
 */
    public function blockCoreNavigationUpdateIgnoreHookedBlocksMeta(\stdClass $post): \stdClass;
}
