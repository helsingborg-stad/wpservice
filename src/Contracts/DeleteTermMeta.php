<?php

namespace WpService\Contracts;

interface DeleteTermMeta
{
    /**
     * Removes metadata matching criteria from a term.
     *
     * @since 4.4.0
     *
     * @param int $termId    Term ID.
     * @param string $metaKey   Metadata name.
     * @param mixed $metaValue Optional. Metadata value. If provided,
     *                           rows will only be removed that match the value.
     *                           Must be serializable if non-scalar. Default empty.
     * @return bool True on success, false on failure.
     */
    public function deleteTermMeta(int $termId, string $metaKey, mixed $metaValue = ''): bool;
}
