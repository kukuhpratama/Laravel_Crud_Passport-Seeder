<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Employees;
use App\User;
use Illuminate\Support\Facades\Auth;
use Validator;

class EmployeesController extends Controller
{

   

    public function employee(){
        
        $user = Auth::user();
        $data = Employees::all();
        $response['status'] = 'success';
        $response['data'] = $data;
        return response()->json($response);
    }

    public function employee_byId($id){
        
        $user = Auth::user();
        $data = Employees::where('id', $id)->get();
        $response['status'] = 'success';
        $response['data'] = $data;
        return response()->json($response);
    }


    public function create(Request $request){
        $user = Auth::user();
        $employees = new Employees;
        $employees->employee_name = $request->employee_name;
        $employees->employee_salary = $request->employee_salary;
        $employees->employee_age = $request->employee_age;
        $employees->profile_image = $request->profile_image;
        $employees->save();
        $response['status'] = 'success';
        $response['data'] = $employees;
        return response()->json($response);
      
    }

    public function update(Request $request,$id){
        $user = Auth::user();
        $employee_name = $request->employee_name;
        $employee_salary = $request->employee_salary;
        $employee_age = $request->employee_age;
        $profile_image = $request->profile_image;

        $employees = Employees::find($id);
        $employees->employee_name = $request->employee_name;
        $employees->employee_salary = $request->employee_salary;
        $employees->employee_age = $request->employee_age;
        $employees->profile_image = $request->profile_image;
        $employees->save();
        $response['status'] = 'success';
        $response['data'] = $employees;
        return response()->json($response);
    }

    public function delete($id){
        $employees = Employees::find($id);
        $employees->delete();
        $response['status'] = 'success';
        $response['data'] = $employees;
        return response()->json($response);
    }


    
}
