<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentInClass extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'students';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'id',
    	'status',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $date = [
    	'create_at',
    	'delete_at',
    ];
}
