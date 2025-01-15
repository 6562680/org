<?php

namespace Gzhegow\Orm\Core\Relation\Spec;

use Gzhegow\Lib\Modules\BoolModule;
use Gzhegow\Orm\Package\Illuminate\Database\Eloquent\EloquentModel;
use Gzhegow\Orm\Package\Illuminate\Database\Eloquent\EloquentModelQueryBuilder;


/**
 * @property string                             $relationName
 *
 * @property EloquentModel                      $thisModel
 * @property EloquentModel                      $remoteModel
 * @property EloquentModelQueryBuilder          $remoteModelQuery
 *
 * @property string|class-string<EloquentModel> $remoteModelClassOrTableName
 * @property class-string<EloquentModel>        $pivotModelClass
 *
 * @property string|null                        $thisTableRightKey
 * @property string|null                        $pivotTableLeftKey
 * @property string|null                        $pivotTableRightKey
 * @property string|null                        $remoteTableLeftKey
 */
class BelongsToManySpec extends AbstractSpec
{
    /**
     * @var string
     */
    protected $relationName = BoolModule::UNDEFINED;

    /**
     * @var EloquentModel
     */
    protected $thisModel = BoolModule::UNDEFINED;
    /**
     * @var EloquentModel
     */
    protected $remoteModel = BoolModule::UNDEFINED;
    /**
     * @var EloquentModelQueryBuilder
     */
    protected $remoteModelQuery = BoolModule::UNDEFINED;

    /**
     * @var string|class-string<EloquentModel>
     */
    protected $remoteModelClassOrTableName = BoolModule::UNDEFINED;
    /**
     * @var class-string<EloquentModel>
     */
    protected $pivotModelClass = BoolModule::UNDEFINED;

    /**
     * @var string|null
     */
    protected $thisTableRightKey = BoolModule::UNDEFINED;
    /**
     * @var string|null
     */
    protected $pivotTableLeftKey = BoolModule::UNDEFINED;
    /**
     * @var string|null
     */
    protected $pivotTableRightKey = BoolModule::UNDEFINED;
    /**
     * @var string|null
     */
    protected $remoteTableLeftKey = BoolModule::UNDEFINED;
}
