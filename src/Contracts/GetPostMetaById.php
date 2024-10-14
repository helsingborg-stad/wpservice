<?php

namespace WpService\Contracts;

interface GetPostMetaById
{
/**
 * Returns post meta data by meta ID.
 *
 * @since 2.1.0
 *
 * @param int $mid
 * @return object|bool
 */
    public function getPostMetaById(int $mid): object|bool;
}
