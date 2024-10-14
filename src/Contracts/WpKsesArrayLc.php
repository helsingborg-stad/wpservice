<?php

namespace WpService\Contracts;

interface WpKsesArrayLc
{
/**
 * Converts the keys of an array to lowercase.
 *
 * @since 1.0.0
 *
 * @param array $inarray Unfiltered array.
 * @return array Fixed array with all lowercase keys.
 */
    public function wpKsesArrayLc(array $inarray): array;
}
