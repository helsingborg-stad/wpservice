<?php

namespace WpService\Contracts;

interface BlockCorePostTimeToReadWordCount
{
/**
 * Counts words or characters in a provided text string.
 *
 * This function currently employs an array of regular expressions
 * to parse HTML and count words, which may result in inaccurate
 * word counts. However, it is designed primarily to agree with the
 * corresponding JavaScript function.
 *
 * Any improvements in the word counting, for example with the HTML API
 * and {@see \IntlBreakIterator::createWordInstance()} should coordinate
 * with changes to the JavaScript implementation to ensure consistency
 * between the editor and the rendered page.
 *
 * @since 6.9.0
 *
 * @param string $text Text to count elements in.
 * @param string $type The type of count. Accepts 'words', 'characters_excluding_spaces', or 'characters_including_spaces'.
 *
 * @return string The rendered word count.
 */
    public function blockCorePostTimeToReadWordCount(string $text, string $type): string;
}
