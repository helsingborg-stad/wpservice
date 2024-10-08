<?php

namespace WpService\Contracts;

interface TaxonomyMetaBoxSanitizeCbCheckboxes
{
    /**
 * Sanitizes POST values from a checkbox taxonomy metabox.
 *
 * @since 5.1.0
 *
 * @param string $taxonomy The taxonomy name.
 * @param array $terms    Raw term data from the 'tax_input' field.
 * @return int[] Array of sanitized term IDs.
 */
    public function taxonomyMetaBoxSanitizeCbCheckboxes(string $taxonomy, array $terms): array;
}
