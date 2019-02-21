<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property
 */
class StudentInformation extends Model
{
    protected $table = 'student_information';

    //protected  $primaryKey = 'registration_no';

    protected $fillable = [
        'name', 'registration_no', 'age'
    ];

}
