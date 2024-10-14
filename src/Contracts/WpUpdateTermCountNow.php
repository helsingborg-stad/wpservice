<?php

namespace WpService\Contracts;

interface WpUpdateTermCountNow
{
/**
 * Performs term count update immediately.
 *
 * @since 2.5.0
 *
 * @param array $terms    The term_taxonomy_id of terms to update.
 * @param string $taxonomy The context of the term.
 * @return true Always true when complete.
 */
    public function wpUpdateTermCountNow(array $terms, string $taxonomy): true;
}
