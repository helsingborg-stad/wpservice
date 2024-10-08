<?php

namespace WpService\Contracts;

interface GetTermBy
{
    /**
     * Gets all term data from database by term field and data.
     *
     * Warning: $value is not escaped for 'name' $field. You must do it yourself, if
     * required.
     *
     * The default $field is 'id', therefore it is possible to also use null for
     * field, but not recommended that you do so.
     *
     * If $value does not exist, the return value will be false. If $taxonomy exists
     * and $field and $value combinations exist, the term will be returned.
     *
     * This function will always return the first term that matches the `$field`-
     * `$value`-`$taxonomy` combination specified in the parameters. If your query
     * is likely to match more than one term (as is likely to be the case when
     * `$field` is 'name', for example), consider using get_terms() instead; that
     * way, you will get all matching terms, and can provide your own logic for
     * deciding which one was intended.
     *
     * @todo Better formatting for DocBlock.
     *
     * @since 2.3.0
     * @since 4.4.0 `$taxonomy` is optional if `$field` is 'term_taxonomy_id'. Converted to return
     *              a WP_Term object if `$output` is `OBJECT`.
     * @since 5.5.0 Added 'ID' as an alias of 'id' for the `$field` parameter.
     *
     * @see sanitize_term_field() The $context param lists the available values for get_term_by() $filter param.
     *
     * @param string $field    Either 'slug', 'name', 'term_id' (or 'id', 'ID'), or 'term_taxonomy_id'.
     * @param string|int $value    Search for this term value.
     * @param string $taxonomy Taxonomy name. Optional, if `$field` is 'term_taxonomy_id'.
     * @param string $output   Optional. The required return type. One of OBJECT, ARRAY_A, or ARRAY_N, which
     *                             correspond to a WP_Term object, an associative array, or a numeric array,
     *                             respectively. Default OBJECT.
     * @param string $filter   Optional. How to sanitize term fields. Default 'raw'.
     * @return \WP_Term|array|false WP_Term instance (or array) on success, depending on the `$output` value.
     *                             False if `$taxonomy` does not exist or `$term` was not found.
     */
    public function getTermBy(string $field, string|int $value, string $taxonomy = '', string $output = OBJECT, string $filter = 'raw'): \WP_Term|array|false;
}
