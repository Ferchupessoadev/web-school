<?php

namespace App\Middlewares;

abstract class Middleware
{
    protected $next;

    /**
     * Set next
     * @param Middleware $next
     */
    public function setNext(Middleware $next): Middleware
    {
        $this->next = $next;
        return $next;
    }

    /**
     * Handle
     * @param array $request
     * @return array|null
     */
    public abstract function handle(array $request): array|null;
}
