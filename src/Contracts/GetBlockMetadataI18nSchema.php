<?php

namespace WpService\Contracts;

interface GetBlockMetadataI18nSchema
{
/**
 * Gets i18n schema for block's metadata read from `block.json` file.
 *
 * @since 5.9.0
 *
 * @return object The schema for block's metadata.
 */
    public function getBlockMetadataI18nSchema(): object;
}
