<?php
namespace App\Http\Controllers;
use App\Models\Sale;
use Illuminate\Http\Request;
class SaleController extends Controller
{
    function sale_add(Request $request){

      
        $insert = [
            'quantity' => $request->quantity,
            'unit_cost'=> $request->unit_cost,
            'selling' => $request->selling,
            'product' => $request->product,
        
        ];
        $add = Sale::create($insert);
        if($add){
            $response = [
                'status'=>'ok',
                'success'=>true,
                'message'=>'Record created succesfully!'
            ];
            return $response;
        }else{
            $response = [
                'status'=>'ok',
                'success'=>false,
                'message'=>'Record created failed!'
            ];
            return $response;
        }
    } 

    function employee_view(Request $request){
        return Employee::find($request->id);
    } 

    function employee_delete(Request $request){
        $delete =  Employee::destroy($request->id);
        if($delete){
            $response = [
                'status'=>'ok',
                'success'=>true,
                'message'=>'Record deleted succesfully!'
            ];
            return $response;
        }else{
            $response = [
                'status'=>'ok',
                'success'=>false,
                'message'=>'Record deleted failed!'
            ];
            return $response;
        }
    } 

    function sale_list(){
        return Sale::all();
    }
} 