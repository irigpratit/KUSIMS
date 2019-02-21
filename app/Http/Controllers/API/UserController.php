<?php

namespace App\Http\Controllers\API;

use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\StudentInformation;
use Maatwebsite\Excel\Facades\Excel;
use Matrix\Exception;


class UserController extends Controller
{
    public $successStatus = 200;
    public $failStatus = 503;

    /**
     * login api
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        //
        return response();
    }

    /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        /** $validator = Validator::make($request->all(), [
         * 'name' => 'required',
         * 'email' => 'required|email',
         * 'password' => 'required',
         * 'c_password' => 'required|same:password',
         * ]); **/
        return response();

    }


}