<?php

namespace WpService\Contracts;

interface GetDefaultLinkToEdit
{
    /**
 * Retrieves the default link for editing.
 *
 * @since 2.0.0
 *
 * @return \stdClass Default link object.
 */
    public function getDefaultLinkToEdit(): \stdClass;
}
