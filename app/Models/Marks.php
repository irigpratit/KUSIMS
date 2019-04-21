<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Marks extends Model
{
    use SoftDeletes;

    protected $fillable = ['student_id', 'course_id','marks'];
    protected $hidden = [];
    
    protected $table = 'marks';

    /**
     * Set attribute to money format
     * @param $input
     */



    
}