<?php

namespace WpService\Contracts;

interface DeleteMeta
{
    /**
     * Deletes post meta data by meta ID.
     *
     * @since 1.2.0
     *
     * @param int $mid
     * @return bool
     */
    public function deleteMeta(int $mid): bool;
}
