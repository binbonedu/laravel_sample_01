<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Models;

class Course extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'courses';

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
    	'course_code',
    	'course_name',
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
     * The student that belong to the course.
     */
    public function students()
    {
        return $this->belongsToMany(Student:class);
    }
    
}
