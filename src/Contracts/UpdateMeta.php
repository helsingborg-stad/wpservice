<?php

namespace WpService\Contracts;

interface UpdateMeta
{
    /**
 * Updates post meta data by meta ID.
 *
 * @since 1.2.0
 *
 * @param int $metaId    Meta ID.
 * @param string $metaKey   Meta key. Expect slashed.
 * @param string $metaValue Meta value. Expect slashed.
 * @return bool
 */
    public function updateMeta(int $metaId, string $metaKey, string $metaValue): bool;
}
