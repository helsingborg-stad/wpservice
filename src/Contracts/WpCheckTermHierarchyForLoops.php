<?php

namespace WpService\Contracts;

interface WpCheckTermHierarchyForLoops
{
/**
 * Checks the given subset of the term hierarchy for hierarchy loops.
 * Prevents loops from forming and breaks those that it finds.
 *
 * Attached to the {@see 'wp_update_term_parent'} filter.
 *
 * @since 3.1.0
 *
 * @param int $parentTerm `term_id` of the parent for the term we're checking.
 * @param int $termId     The term we're checking.
 * @param string $taxonomy    The taxonomy of the term we're checking.
 * @return int The new parent for the term.
 */
    public function wpCheckTermHierarchyForLoops(int $parentTerm, int $termId, string $taxonomy): int;
}
