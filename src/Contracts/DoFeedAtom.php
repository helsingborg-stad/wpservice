<?php

namespace WpService\Contracts;

interface DoFeedAtom
{
    /**
     * Loads either Atom comment feed or Atom posts feed.
     *
     * @since 2.1.0
     *
     * @see load_template()
     *
     * @param bool $forComments True for the comment feed, false for normal feed.
     */
    public function doFeedAtom(bool $forComments): void;
}
