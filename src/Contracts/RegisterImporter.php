<?php

namespace WpService\Contracts;

interface RegisterImporter
{
    /**
 * Registers importer for WordPress.
 *
 * @since 2.0.0
 *
 * @global array $wp_importers
 *
 * @param string $id          Importer tag. Used to uniquely identify importer.
 * @param string $name        Importer name and title.
 * @param string $description Importer description.
 * @param callable $callback    Callback to run.
 * @return void|\WP_Error Void on success. WP_Error when $callback is WP_Error.
 */
    public function registerImporter(string $id, string $name, string $description, callable $callback): mixed;
}
