<?php

namespace Gzhegow\Database\Core\Model\Traits\Has;

use Gzhegow\Lib\Lib;
use Gzhegow\Database\Exception\RuntimeException;
use Gzhegow\Database\Package\Illuminate\Database\Eloquent\EloquentModel;


/**
 * @mixin EloquentModel
 *
 * @property string $uuid
 */
trait HasUuidTrait
{
    public function getUuid() : string
    {
        $uuid = null
            ?? Lib::parse()->int_positive($this->attributes[ 'uuid' ] ?? null)
            ?? Lib::parse()->string_not_empty($this->attributes[ 'uuid' ] ?? null);

        if (null === $uuid) {
            throw new RuntimeException(
                'The `uuid` is empty'
            );
        }

        return $uuid;
    }

    public function hasUuid() : ?string
    {
        return $this->attributes[ 'uuid' ] ?? null;
    }


    public function setUuid($uuid) : void
    {
        $_uuid = null
            ?? Lib::parse()->string_not_empty($uuid);

        if (null === $_uuid) {
            throw new RuntimeException(
                'The `uuid` is empty'
            );
        }

        $this->attributes[ 'uuid' ] = $_uuid;
    }

    public function setupUuid($uuid = null) : string
    {
        $current = $this->attributes[ 'uuid' ] ?? null;

        if (! $current) {
            $_uuid = null
                ?? Lib::parse()->string_not_empty($uuid)
                ?? Lib::random()->uuid();

            $this->attributes[ 'uuid' ] = $_uuid;
        }

        return $this->attributes[ 'uuid' ];
    }
}
