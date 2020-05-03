<?php


namespace Preetender\Base\Domain\User\Models;


use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Address
 * @property int id
 * @property User user
 * @property int user_id
 * @property string city
 * @property string state
 * @property string uf
 * @property int zip_code
 * @property string address
 * @property string district
 * @property int number
 * @property string complement
 * @package Preetender\Base\Domain\User\Models
 */
class Address extends Model
{
    protected $table = 'base_addresses';

    protected $fillable = [
        'city',
        'state',
        'uf',
        'zip_code',
        'address',
        'district',
        'number',
        'complement'
    ];

    /**
     * @return BelongsTo
     */
    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
