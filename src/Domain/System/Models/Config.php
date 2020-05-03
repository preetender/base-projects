<?php


namespace Preetender\Base\Domain\System\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Config
 * @property int id
 * @property string label
 * @property string description
 * @property string ref
 * @property array data
 * @package Preetender\Base\Domain\System\Models
 */
class Config extends Model
{
    /** @var string */
    protected $table = 'system_configs';

    /**
     * @var array
     */
    protected $fillable = [
        'label',
        'description',
        'ref',
        'data'
    ];

    /**
     * @var array
     */
    protected $casts = [
        'data' => 'object'
    ];
}
