<?php

namespace Dapr\Actors;

use DateInterval;

/**
 * Class ActorConfig
 * @package Dapr\Actors
 */
class ActorConfig
{
    /**
     * ActorConfig constructor.
     *
     * @param array $actor_name_to_type An array of dapr types to concrete types
     * @param DateInterval|null $idle_timeout How long an actor may be idle before being deactivated
     * @param DateInterval|null $scan_interval How often to scan for actors to deactivate
     * @param DateInterval|null $drain_timeout How long to wait when draining, before ending the actor
     * @param bool|null $drain_enabled Whether draining actors is enabled
     */
    public function __construct(
        protected array $actor_name_to_type = [],
        protected DateInterval|null $idle_timeout = null,
        protected DateInterval|null $scan_interval = null,
        protected DateInterval|null $drain_timeout = null,
        protected bool|null $drain_enabled = null
    ) {
    }

    /**
     * @return array An array of dapr types
     */
    public function get_supported_actors(): array
    {
        return array_keys($this->actor_name_to_type);
    }

    /**
     * Given a Dapr Type, returns the name of a concrete implementation
     *
     * @param string $dapr_type The dapr type
     *
     * @return string|null The concrete type, or null if not found
     */
    public function get_actor_type_from_dapr_type(string $dapr_type): string|null
    {
        return $this->actor_name_to_type[$dapr_type] ?? null;
    }

    /**
     * @return DateInterval|null The timeout or null for the framework default
     */
    public function get_idle_timeout(): DateInterval|null
    {
        return $this->idle_timeout;
    }

    /**
     * @return DateInterval|null The interval or null for the framework default
     */
    public function get_scan_interval(): DateInterval|null
    {
        return $this->scan_interval;
    }

    /**
     * @return DateInterval|null The timeout or null for the framework default
     */
    public function get_drain_timeout(): DateInterval|null
    {
        return $this->drain_timeout;
    }

    /**
     * @return bool|null Whether draining is enabled, or null for the framework default
     */
    public function drain_enabled(): bool|null
    {
        return $this->drain_enabled;
    }
}
