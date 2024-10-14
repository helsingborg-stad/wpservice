<?php

namespace WpService\Contracts;

interface PostCustom
{
/**
 * Retrieves post custom meta data field.
 *
 * @since 1.5.0
 *
 * @param string $key Meta data key name.
 * @return array|string|false Array of values, or single value if only one element exists.
 *                            False if the key does not exist.
 */
    public function postCustom(string $key = ''): array|string|false;
}
