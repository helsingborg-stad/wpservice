<?php

namespace WpService\Contracts;

interface WpGetSplitTerms
{
/**
 * Gets data about terms that previously shared a single term_id, but have since been split.
 *
 * @since 4.2.0
 *
 * @param int $oldTermId Term ID. This is the old, pre-split term ID.
 * @return array Array of new term IDs, keyed by taxonomy.
 */
    public function wpGetSplitTerms(int $oldTermId): array;
}
