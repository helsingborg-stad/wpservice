<?php

namespace WpService\Contracts;

interface GetHiddenMetaBoxes
{
/**
 * Gets an array of IDs of hidden meta boxes.
 *
 * @since 2.7.0
 *
 * @param string|\WP_Screen $screen Screen identifier
 * @return string[] IDs of hidden meta boxes.
 */
    public function getHiddenMetaBoxes(string|\WP_Screen $screen): array;
}
