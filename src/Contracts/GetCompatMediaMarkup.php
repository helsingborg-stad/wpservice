<?php

namespace WpService\Contracts;

interface GetCompatMediaMarkup
{
    /**
 * @since 3.5.0
 *
 * @param int $attachmentId
 * @param array $args
 * @return array
 */
    public function getCompatMediaMarkup(int $attachmentId, array $args): array;
}
