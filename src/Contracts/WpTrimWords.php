<?php

namespace WpService\Contracts;

interface WpTrimWords
{
    /**
     * Trims text to a certain number of words.
     *
     * This function is localized. For languages that count 'words' by the individual
     * character (such as East Asian languages), the $num_words argument will apply
     * to the number of individual characters.
     *
     * @since 3.3.0
     *
     * @param string $text      Text to trim.
     * @param int $numWords Number of words. Default 55.
     * @param string $more      Optional. What to append if $text needs to be trimmed. Default '&hellip;'.
     * @return string Trimmed text.
     */
    public function wpTrimWords(string $text, int $numWords = 55, string $more = null): string;
}
