<?php

namespace WpService\Contracts;

interface WpGetTranslationUpdates
{
/**
 * Retrieves a list of all language updates available.
 *
 * @since 3.7.0
 *
 * @return object[] Array of translation objects that have available updates.
 */
    public function wpGetTranslationUpdates(): array;
}
