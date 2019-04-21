<?php

namespace App\Imports;


use App\Models\Marks;
use App\Models\Student;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class MarksImport implements ToCollection,WithHeadingRow
{
    


    private $course_id;
    
    public function setParameter(int $course_id)
    {
        $this->course_id = $course_id;

    }

    public function collection(Collection $rows)
    {
        foreach ($rows as $row) 
        {
            // dd($row);
            $mark = new Marks();
            
            $student = Student::where('reg_no', $row['registration_no'])->first();
    
            $mark->student_id = $student->id;
            $mark->marks = $row['marks'];
            $mark->course_id =$this->course_id;

            $mark->save();
            
        }
    }
}