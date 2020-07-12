<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Reader
 * @package App\Models
 * @version July 11, 2020, 7:05 am UTC
 *
 * @property string $ip
 * @property integer $internal_id
 * @property integer $com_key
 * @property string $description
 * @property integer $soap_port
 * @property integer $udp_port
 * @property string $encoding
 * @property boolean $status
 */
class Reader extends Model
{
    use SoftDeletes;

    public $table = 'readers';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'ip',
        'internal_id',
        'com_key',
        'description',
        'soap_port',
        'udp_port',
        'encoding',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'ip' => 'string',
        'internal_id' => 'integer',
        'com_key' => 'integer',
        'description' => 'string',
        'soap_port' => 'integer',
        'udp_port' => 'integer',
        'encoding' => 'string',
        'status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'ip' => 'required|string',
        'internal_id' => 'required|integer',
        'com_key' => 'required|integer',
        'description' => 'required|string',
        'soap_port' => 'required|integer',
        'udp_port' => 'required|integer',
        'encoding' => 'required|string',
    ];

    public function lastRecord()
    {
        return $this->hasOne(Attendance::class)->orderby('id', 'desc');
    }


}
