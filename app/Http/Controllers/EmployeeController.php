<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $employees = Employee::get();
        return response()->json([
            'status' => true,
            'messages' => 'Susccessfully',
            'code' => 200,
            'results'=> $employees
            
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     //This is the function that deletes the records, it also has a validator for the requested requirements.

    public function create(Request $request)
        {
    //I added a user validator through JWT that allows us to return an authentication token that will identify the user of the system.
           $validator = Validator::make($request->all(), [
               'name' => 'required',
               'last_name' => 'required',
               'mail' => 'required',
               'age'=> 'required',
               'delivered_food' => 'required',
            ]);
    
           if ($validator->fails()) {
               return response()->json([
                   'status' => false,
                   'messages' => 'error',
                   'code' => 400,
                   'results' => $validator->messages()
               ]);
           }
   
           $employee = new Employee;
           $employee->name = $request->name;
           $employee->last_name =$request->last_name;
           $employee->phone = $request->phone;
           $employee->mail = $request->mail;
           $employee->age = $request->age;
           $employee->direction = $request->direction;
           $employee->delivered_food = $request->delivered_food;
           $employee->observation = $request->observation;
           $employee->save();
   
           return response()->json([
               'status' => true,
               'messages' => 'Employee created successfully!',
               'code' => 200,
               'results' => $employee
           ]);
   
   
        
        }


//This is the function that deletes the records

    public function delete(Request $request){
        if(Employee::where("id",$request->id)->exists()){

            $datadelete = Employee::find($request->id);
            $datadelete->delete();
            return response()->json([
                "status"=> 1,
                "message"=>"Delete successfully"
            ]);

        }else{

            
                    return response()->json([
                        "status"=> 1,
                        "message"=>"Delete succesfully"
            
                    ]);

        }
    }

    //This is the function that obtains the records
    public function dataGet(){
        $dataresponse = Employee::get();
        return response()->json([
            "status"=> 1,
            "message"=>"Data-get successfully",
            "data"=>$dataresponse
        ]);
    }

//This is the Function that updates the records

    public function update(Request $request)
    {
$employee = Employee::findOrfail($request->id);   

$employee->name = $request->name;
$employee->last_name =$request->last_name;
$employee->mail = $request->mail;
$employee->age = $request->age;
$employee->delivered_food = $request->delivered_food;
$employee->phone = $request->phone;
$employee->direction = $request->direction;
$employee->observation = $request->observation;
$employee->save();

return $employee;



}
//This is the Function that filters the records by id, by name and sorts them from highest to lowest.
    public function searchCustomer(Request $request)
    {
        
       $mail = $request->mail;
       $age = $request->age;
       $name = $request->name;
       $id = $request->id;
       $search = Employee::where(function($query) use ($name, $mail, $id){
            if ($mail){
                $query->where('age', 'like', '%'.$mail.'%')->get();
            }
            if ($age){
                $query->orderBy('ASC')->get();
            }
            if ($id){
                $query->findOrFail($id)->first();
            }
            if ($name){
                $query->where('name', 'like', '%'.$name.'%')->get();
            }
       })->orderBy('ASC');

       if (!$search){
            return response()->json([
                    'status' => false,
                    'messages' => 'Resource not found!',
                    'code' => 404,
                ]);
        }

        return response()->json([
            'status' => true,
            'messages' => 'Search retrievied!',
            'code' => 200,
            'results' => $search
        ]);
    }

}
