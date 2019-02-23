<?php

namespace App\Http\Controllers\API;

use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\StudentInformation;
use Maatwebsite\Excel\Facades\Excel;
use Matrix\Exception;


class StudentController extends Controller
{
    public $successStatus = 200;
    public $failStatus = 503;


    /**
     * details api
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */


    public function add_student(Request $request)
    {

        $age = $request['age'];
        $registration_no = $request['registration_no'];
        $name = $request['name'];


        try {
            $student = new StudentInformation();
            $student->name = $name;
            $student->registration_no = $registration_no;
            $student->age = $age;
            $student->save();

        } catch (QueryException $exception) {
            return response()->json(['status' => 'failure', 'log' => $exception->getMessage(), 'code' => $this->failStatus], $this->failStatus);
        }
        return response()->json(['status' => 'success', 'data' => $student, 'code' => $this->successStatus], $this->successStatus);
    }


    public function import_students(Request $request)
    {
        if ($request->hasFile('name')) {
            $fileItself = $request->file('name');
            $load = Excel::load($fileItself, function ($reader) {
            })->get();
            foreach ($load as $row) {
                $age = $row['age'];
                $registration_no = $row['registration_no'];
                $name = $row['name'];

                $student = StudentInformation::where('registration_no', $registration_no)->first();

                if ($student === NULL) {
                    try {

                        $student_information = new StudentInformation();

                        $student_information->name = $name;
                        $student_information->registration_no = $registration_no;
                        $student_information->age = $age;
                        $student_information->save();

                    } catch (QueryException $exception) {
                        return response()->json(['status' => 'failure', 'log' => $exception->getMessage(), 'code' => $this->failStatus], $this->failStatus);
                    }
                } else {
                    try {
                        StudentInformation::where('registration_no', $registration_no)->update(['age' => $age, 'registration_no' => $registration_no, 'name' => $name]);
                    } catch (QueryException $exception) {
                        return response()->json(['status' => 'failure', 'log' => $exception->getMessage(), 'code' => $this->failStatus], $this->failStatus);
                    }
                }
            }
        }
        return response()->json(['status' => 'success', 'data' => StudentInformation::where('registration_no', $registration_no)->first(), 'code' => $this->successStatus], $this->successStatus);

    }

    public function get_student($registration_no)
    {
        try {
            $student = StudentInformation::where('registration_no', $registration_no)->first();

        } catch (QueryException $exception) {
            return response()->json(['status' => 'failure', 'log' => $exception->getMessage(), 'code' => $this->failStatus], $this->failStatus);
        }

        return response()->json(['status' => 'success', 'data' => $student, 'code' => $this->successStatus], $this->successStatus);
    }

    public function get_all_students()
    {

        try {
            $student = StudentInformation::all();

        } catch (QueryException $exception) {
            return response()->json(['status' => 'failure', 'log' => $exception->getMessage(), 'code' => $this->failStatus], $this->failStatus);
        }

        return response()->json(['status' => 'success', 'data' => $student, 'code' => $this->successStatus], $this->successStatus);

    }

    public function update_student(Request $request, $registration_no)
    {

        $age = $request['age'];
        $name = $request['name'];


        try {
            StudentInformation::where('registration_no', $registration_no)->update(['age' => $age, 'name' => $name]);

        } catch (QueryException $exception) {
            return response()->json(['status' => 'failure', 'log' => $exception->getMessage(), 'code' => $this->failStatus], $this->failStatus);
        }

        return response()->json(['status' => 'success', 'data' => StudentInformation::where('registration_no', $registration_no)->first(), 'code' => $this->successStatus], $this->successStatus);

    }

    public function delete_student($registration_no)
    {
        try {
            StudentInformation::where('registration_no', $registration_no)->delete();

        } catch (QueryException $exception) {
            return response()->json(['status' => 'failure', 'log' => $exception->getMessage(), 'code' => $this->failStatus], $this->failStatus);
        }

        return response()->json(['status' => 'success', 'data' => StudentInformation::where('registration_no', $registration_no)->first(), 'code' => $this->successStatus], $this->successStatus);
    }
}