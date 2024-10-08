<?php

namespace WpService\Contracts;

interface ConvertInvalidEntities
{
    /**
     * Converts invalid Unicode references range to valid range.
     *
     * @since 4.3.0
     *
     * @param string $content String with entities that need converting.
     * @return string Converted string.
     */
    public function convertInvalidEntities(string $content): string;
}
