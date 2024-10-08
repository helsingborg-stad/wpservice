<?php

namespace WpService\Contracts;

interface WpPopularTermsChecklist
{
    /**
 * Retrieves a list of the most popular terms from the specified taxonomy.
 *
 * If the `$display` argument is true then the elements for a list of checkbox
 * `<input>` elements labelled with the names of the selected terms is output.
 * If the `$post_ID` global is not empty then the terms associated with that
 * post will be marked as checked.
 *
 * @since 2.5.0
 *
 * @param string $taxonomy     Taxonomy to retrieve terms from.
 * @param int $defaultTerm Optional. Not used.
 * @param int $number       Optional. Number of terms to retrieve. Default 10.
 * @param bool $display      Optional. Whether to display the list as well. Default true.
 * @return int[] Array of popular term IDs.
 */
    public function wpPopularTermsChecklist(string $taxonomy, int $defaultTerm, int $number, bool $display): array;
}
