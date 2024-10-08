<?php

namespace WpService\Contracts;

interface StylesForBlockCoreSearch
{
    /**
 * Builds an array of inline styles for the search block.
 *
 * The result will contain one entry for shared styles such as those for the
 * inner input or button and a second for the inner wrapper should the block
 * be positioning the button "inside".
 *
 * @since 5.8.0
 *
 * @param array $attributes The block attributes.
 *
 * @return array Style HTML attribute.
 */
    public function stylesForBlockCoreSearch(array $attributes): array;
}
