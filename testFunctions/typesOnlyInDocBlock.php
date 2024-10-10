<?php

/**
 * @param string $foo Lorem ipsum dolor sit amet, consectetur adipiscing elit.
 * @param int $bar Lorem ipsum dolor sit amet, consectetur adipiscing elit.
 * @param int $baz_qux Lorem ipsum dolor sit amet, consectetur adipiscing elit.
 * @param int $quuxCorge Lorem ipsum dolor sit amet, consectetur adipiscing elit.
 * @return string Lorem ipsum dolor sit amet, consectetur adipiscing elit.
 */
function typesOnlyInDocBlock($foo, $bar, $baz_qux, $quuxCorge): string
{
    return $foo . $bar;
}
