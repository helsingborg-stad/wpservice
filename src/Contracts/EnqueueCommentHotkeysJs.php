<?php

namespace WpService\Contracts;

interface EnqueueCommentHotkeysJs
{
    /**
 * Enqueues comment shortcuts jQuery script.
 *
 * @since 2.7.0
 */
public function enqueueCommentHotkeysJs(): void;
}
