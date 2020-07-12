<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Attendance
 * @package App\Models
 * @version July 9, 2020, 9:13 am UTC
 *
 * @property string $pin
 * @property string $date_time
 * @property integer $verified
 * @property integer $status
 * @property integer $work_code
 * @property boolean $sync
 * @property string $message
 * @property string $employee_name
 * @property string $employee_number
 * @property integer $reader_id
 */
class Attendance extends Model
{
    use SoftDeletes;

    public $table = 'attendances';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'pin',
        'date_time',
        'verified',
        'status',
        'work_code',
        'sync',
        'message',
        'employee_name',
        'employee_number',
        'reader_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'pin' => 'string',
        'date_time' => 'datetime',
        'verified' => 'integer',
        'status' => 'integer',
        'work_code' => 'integer',
        'sync' => 'boolean',
        'message' => 'string',
        'employee_name' => 'string',
        'employee_number' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];

    public function reader()
    {
        return $this->belongsTo(Reader::class);
    }


}
