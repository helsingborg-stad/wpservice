<?php

namespace WpService\Contracts;

interface DismissCoreUpdate
{
/**
 * Dismisses core update.
 *
 * @since 2.7.0
 *
 * @param object $update
 * @return bool
 */
    public function dismissCoreUpdate(object $update): bool;
}
