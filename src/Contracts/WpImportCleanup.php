<?php

namespace WpService\Contracts;

interface WpImportCleanup
{
/**
 * Cleanup importer.
 *
 * Removes attachment based on ID.
 *
 * @since 2.0.0
 *
 * @param string $id Importer ID.
 */
    public function wpImportCleanup(string $id): void;
}
