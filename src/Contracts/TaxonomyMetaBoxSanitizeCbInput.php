<?php

namespace WpService\Contracts;

interface TaxonomyMetaBoxSanitizeCbInput
{
/**
 * Sanitizes POST values from an input taxonomy metabox.
 *
 * @since 5.1.0
 *
 * @param string $taxonomy The taxonomy name.
 * @param array|string $terms    Raw term data from the 'tax_input' field.
 * @return array
 */
    public function taxonomyMetaBoxSanitizeCbInput(string $taxonomy, array|string $terms): array;
}
