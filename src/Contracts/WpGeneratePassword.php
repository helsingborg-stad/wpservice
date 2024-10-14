<?php

namespace WpService\Contracts;

interface WpGeneratePassword
{
/**
 * Generates a random password drawn from the defined set of characters.
 *
 * Uses wp_rand() to create passwords with far less predictability
 * than similar native PHP functions like `rand()` or `mt_rand()`.
 *
 * @since 2.5.0
 *
 * @param int $length              Optional. The length of password to generate. Default 12.
 * @param bool $specialChars       Optional. Whether to include standard special characters.
 *                                  Default true.
 * @param bool $extraSpecialChars Optional. Whether to include other special characters.
 *                                  Used when generating secret keys and salts. Default false.
 * @return string The random password.
 */
    public function wpGeneratePassword(int $length = 12, bool $specialChars = true, bool $extraSpecialChars = false): string;
}
