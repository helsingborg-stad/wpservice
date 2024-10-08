<?php

namespace WpService\Contracts;

interface GetSearchForm
{
    /**
 * Displays search form.
 *
 * Will first attempt to locate the searchform.php file in either the child or
 * the parent, then load it. If it doesn't exist, then the default search form
 * will be displayed. The default search form is HTML, which will be displayed.
 * There is a filter applied to the search form HTML in order to edit or replace
 * it. The filter is {@see 'get_search_form'}.
 *
 * This function is primarily used by themes which want to hardcode the search
 * form into the sidebar and also by the search widget in WordPress.
 *
 * There is also an action that is called whenever the function is run called,
 * {@see 'pre_get_search_form'}. This can be useful for outputting JavaScript that the
 * search relies on or various formatting that applies to the beginning of the
 * search. To give a few examples of what it can be used for.
 *
 * @since 2.7.0
 * @since 5.2.0 The `$args` array parameter was added in place of an `$echo` boolean flag.
 *
 * @param array $args {
 *     Optional. Array of display arguments.
 *
 *     @type bool   $echo       Whether to echo or return the form. Default true.
 *     @type string $aria_label ARIA label for the search form. Useful to distinguish
 *                              multiple search forms on the same page and improve
 *                              accessibility. Default empty.
 * }
 * @return void|string Void if 'echo' argument is true, search form HTML if 'echo' is false.
 */
    public function getSearchForm(array $args = []): mixed;
}
