<?php

namespace Gzhegow\Orm\Core\Model\Traits\Has;

use Gzhegow\Calendar\Calendar;
use Gzhegow\Orm\Package\Illuminate\Database\Eloquent\EloquentModel;


/**
 * @mixin EloquentModel
 *
 * @property \DateTimeInterface $created_at
 */
trait HasCreatedAtTrait
{
    public function setCreatedAt($createdAt) : void
    {
        $_createdAt = $createdAt;

        if (null !== $_createdAt) {
            $_createdAt = Calendar::dateTimeImmutable($_createdAt);
        }

        $this->attributes[ 'created_at' ] = $_createdAt;
    }

    public function setupCreatedAt($createdAt = null) : string
    {
        $current = $this->attributes[ 'created_at' ] ?? null;

        if (null === $current) {
            if (null === $createdAt) {
                $_createdAt = Calendar::nowImmutable();

            } else {
                $_createdAt = Calendar::dateTimeImmutable($createdAt);
            }

            $this->attributes[ 'created_at' ] = $_createdAt;
        }

        return $this->created_at;
    }
}
