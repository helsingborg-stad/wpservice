<?php

namespace WpService\Contracts;

interface GetTheCommentsNavigation
{
    /**
 * Retrieves navigation to next/previous set of comments, when applicable.
 *
 * @since 4.4.0
 * @since 5.3.0 Added the `aria_label` parameter.
 * @since 5.5.0 Added the `class` parameter.
 *
 * @param array $args {
 *     Optional. Default comments navigation arguments.
 *
 *     @type string $prev_text          Anchor text to display in the previous comments link.
 *                                      Default 'Older comments'.
 *     @type string $next_text          Anchor text to display in the next comments link.
 *                                      Default 'Newer comments'.
 *     @type string $screen_reader_text Screen reader text for the nav element. Default 'Comments navigation'.
 *     @type string $aria_label         ARIA label text for the nav element. Default 'Comments'.
 *     @type string $class              Custom class for the nav element. Default 'comment-navigation'.
 * }
 * @return string Markup for comments links.
 */
    public function getTheCommentsNavigation(array $args): string;
}
