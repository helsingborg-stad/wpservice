<?php

namespace WpService\Contracts;

interface PrependAttachment
{
    /**
 * Wraps attachment in paragraph tag before content.
 *
 * @since 2.0.0
 *
 * @param string $content
 * @return string
 */
    public function prependAttachment(string $content): string;
}
