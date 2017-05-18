<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'departments';

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
    	'department_code',
    	'department_name',
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
     * Get the classroom for the department.
     */
    public function classrooms()
    {
        return $this->hasMany(ClassRoom:class);
    }

    /**
     * Get all of the students for the department.
     */
    public function students()
    {
        return $this->hasManyThrough(
            Student:class, Department:class
            'department_id', 'classroom_id', 'id'
        );
    }
}
