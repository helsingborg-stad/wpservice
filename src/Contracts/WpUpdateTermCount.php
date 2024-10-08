<?php

namespace WpService\Contracts;

interface WpUpdateTermCount
{
    /**
 * Updates the amount of terms in taxonomy.
 *
 * If there is a taxonomy callback applied, then it will be called for updating
 * the count.
 *
 * The default action is to count what the amount of terms have the relationship
 * of term ID. Once that is done, then update the database.
 *
 * @since 2.3.0
 *
 * @param int|array $terms       The term_taxonomy_id of the terms.
 * @param string $taxonomy    The context of the term.
 * @param bool $doDeferred Whether to flush the deferred term counts too. Default false.
 * @return bool If no terms will return false, and if successful will return true.
 */
    public function wpUpdateTermCount(int|array $terms, string $taxonomy, bool $doDeferred): bool;
}
