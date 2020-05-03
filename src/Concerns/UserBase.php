<?php


namespace Preetender\Base\Concerns;


use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Preetender\Base\Domain\User\Models\Address;

/**
 * Trait UserBase
 * @property Address|Collection addresses
 * @package Preetender\Base\Concerns
 */
trait UserBase
{

    /**
     * Get all addresses.
     *
     * @return HasMany
     */
    public function addresses(): HasMany
    {
        return $this->hasMany(Address::class);
    }
}
