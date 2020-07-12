<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class SystemLog
 * @package App\Models
 * @version July 11, 2020, 8:39 am UTC
 *
 * @property string $type
 * @property integer $message
 */
class SystemLog extends Model
{
    use SoftDeletes;

    public $table = 'system_logs';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'type',
        'message'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'type' => 'string',
        'message' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];


}
