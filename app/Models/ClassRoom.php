<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Models;

class ClassRoom extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'classrooms';

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
    	'class_name',
    	'year',
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


    /**
     * Get the student for the classroom.
     */
    public function students()
    {
        return $this->hasMany(Student:class);
    }

    /**
     * Get the classrooms that owns the department.
     */
    public function department()
    {
        return $this->belongsTo(Department:class);
    }
}
