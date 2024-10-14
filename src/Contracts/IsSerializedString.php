<?php

namespace WpService\Contracts;

interface IsSerializedString
{
/**
 * Checks whether serialized data is of string type.
 *
 * @since 2.0.5
 *
 * @param string $data Serialized data.
 * @return bool False if not a serialized string, true if it is.
 */
    public function isSerializedString(string $data): bool;
}
