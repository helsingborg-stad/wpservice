<?php

namespace WpService\Contracts;

interface WpUpdateCategory
{
    /**
 * Aliases wp_insert_category() with minimal args.
 *
 * If you want to update only some fields of an existing category, call this
 * function with only the new values set inside $catarr.
 *
 * @since 2.0.0
 *
 * @param array $catarr The 'cat_ID' value is required. All other keys are optional.
 * @return int|false The ID number of the new or updated Category on success. Zero or FALSE on failure.
 */
    public function wpUpdateCategory(array $catarr): int|false;
}
