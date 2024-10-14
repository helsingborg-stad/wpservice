<?php

namespace WpService\Contracts;

interface SmiliesInit
{
/**
 * Converts smiley code to the icon graphic file equivalent.
 *
 * You can turn off smilies, by going to the write setting screen and unchecking
 * the box, or by setting 'use_smilies' option to false or removing the option.
 *
 * Plugins may override the default smiley list by setting the $wpsmiliestrans
 * to an array, with the key the code the blogger types in and the value the
 * image file.
 *
 * The $wp_smiliessearch global is for the regular expression and is set each
 * time the function is called.
 *
 * The full list of smilies can be found in the function and won't be listed in
 * the description. Probably should create a Codex page for it, so that it is
 * available.
 *
 * @since 2.2.0
 *
 * @global array $wpsmiliestrans
 * @global array $wp_smiliessearch
 */
    public function smiliesInit(): void;
}
