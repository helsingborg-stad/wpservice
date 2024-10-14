<?php

namespace WpService\Contracts;

interface WpOmitLoadingAttrThreshold
{
/**
 * Gets the threshold for how many of the first content media elements to not lazy-load.
 *
 * This function runs the {@see 'wp_omit_loading_attr_threshold'} filter, which uses a default threshold value of 3.
 * The filter is only run once per page load, unless the `$force` parameter is used.
 *
 * @since 5.9.0
 *
 * @param bool $force Optional. If set to true, the filter will be (re-)applied even if it already has been before.
 *                    Default false.
 * @return int The number of content media elements to not lazy-load.
 */
    public function wpOmitLoadingAttrThreshold(bool $force = false): int;
}
