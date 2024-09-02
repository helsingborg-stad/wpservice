<?php

namespace WpCronService\WpCronJob;

/**
 * Represents a WordPress cron job.
 */
class WpCronJob implements WpCronJobInterface
{
    /**
     * Constructor.
     *
     * @param string $hookName
     * @param string $interval
     * @param mixed $callback Needs to be callable.
     * @param array $args
     */
    public function __construct(
        private string $hookName,
        private string $interval,
        private mixed $callback,
        private array $args,
    ) {
        if (!is_callable($callback)) {
            throw new \TypeError('Callback must be callable');
        }
    }

    /**
     * @inheritDoc
     */
    public function getHookName(): string
    {
        return $this->hookName;
    }

    /**
     * @inheritDoc
     */
    public function getInterval(): string
    {
        return $this->interval;
    }

    /**
     * @inheritDoc
     */
    public function getArgs(): array
    {
        return $this->args;
    }

    /**
     * @inheritDoc
     */
    public function getCallback(): callable
    {
        return $this->callback;
    }
}
