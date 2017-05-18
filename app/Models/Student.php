<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
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
    	'student_code',
    	'fullname',
    	'year',
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

    /**
     * Get the classrooms that owns the student.
     */
    public function classroom()
    {
        return $this->belongsTo(ClassRoom:class);
    }

    /**
     * The course that belong to the student.
     */
    public function courses()
    {
        return $this->belongsToMany(Course:class);
    }
}
