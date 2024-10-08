<?php

namespace WpService\Contracts;

interface WpRegisterFontCollection
{
    /**
     * Registers a new font collection in the font library.
     *
     * See {@link https://schemas.wp.org/trunk/font-collection.json} for the schema
     * the font collection data must adhere to.
     *
     * @since 6.5.0
     *
     * @param string $slug Font collection slug. May only contain alphanumeric characters, dashes,
     *                     and underscores. See sanitize_title().
     * @param array $args {
     *     Font collection data.
     *
     * @type string       $name          Required. Name of the font collection shown in the Font Library.
     * @type string       $description   Optional. A short descriptive summary of the font collection. Default empty.
     * @type array|string $font_families Required. Array of font family definitions that are in the collection,
     *                                       or a string containing the path or URL to a JSON file containing the font collection.
     * @type array        $categories    Optional. Array of categories, each with a name and slug, that are used by the
     *                                       fonts in the collection. Default empty.
     * }
     * @return \WP_Font_Collection|\WP_Error A font collection if it was registered
     *                                     successfully, or WP_Error object on failure.
     */
    public function wpRegisterFontCollection(string $slug, array $args): \WP_Font_Collection|\WP_Error;
}
