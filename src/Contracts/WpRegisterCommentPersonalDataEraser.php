<?php

namespace WpService\Contracts;

interface WpRegisterCommentPersonalDataEraser
{
    /**
 * Registers the personal data eraser for comments.
 *
 * @since 4.9.6
 *
 * @param array $erasers An array of personal data erasers.
 * @return array An array of personal data erasers.
 */
    public function wpRegisterCommentPersonalDataEraser(array $erasers): array;
}
