<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property
 * @property mixed name
 * @property mixed registration_no
 * @property mixed age
 */
class StudentInformation extends Model
{
    protected $table = 'student_information';


    //protected  $primaryKey = 'registration_no';

    protected $fillable = [
        'name', 'registration_no', 'age'
    ];


}
