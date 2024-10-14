<?php

namespace WpService\Contracts;

interface WpPrepareRevisionsForJs
{
/**
 * Prepare revisions for JavaScript.
 *
 * @since 3.6.0
 *
 * @param \WP_Post|int $post                 The post object or post ID.
 * @param int $selectedRevisionId The selected revision ID.
 * @param int $from                 Optional. The revision ID to compare from.
 * @return array An associative array of revision data and related settings.
 */
public function wpPrepareRevisionsForJs(\WP_Post|int $post, int $selectedRevisionId, int $from = null): array;
}