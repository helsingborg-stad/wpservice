<?php

namespace WpService\Contracts;

interface RemoveThemeMod
{
    /**
     * Removes theme modification name from active theme list.
     *
     * If removing the name also removes all elements, then the entire option
     * will be removed.
     *
     * @since 2.1.0
     *
     * @param string $name Theme modification name.
     */
    public function removeThemeMod(string $name): void;
}
