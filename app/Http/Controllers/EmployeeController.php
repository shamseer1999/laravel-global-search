<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Designation;
use App\Models\User;
use Illuminate\Http\Request;
use ProtoneMedia\LaravelCrossEloquentSearch\Search;


class EmployeeController extends Controller
{
    //
    public function index()
    {
        
        $result=User::with('department','designation')->get();
        $data['results']=$result;
        return view('employee.index',$data);
    }
    public function search(Request $request)
    {
        $search=$request->input('search');
        $result=User::where('name','like','%'.$search.'%')
            ->orWhereHas('department',function($query) use($search){
                $query->where('name','like','%'.$search.'%');
            })
            ->orWhereHas('designation',function($query) use($search){
                $query->where('name','like','%'.$search.'%');
            })
            ->get()->load('department','designation');
        // $result=Search::add(User::class,'name')
        
        // ->add(Department::class,'name')
        // ->add(Designation::class,'name')
        
        // ->beginWithWildcard()
        // ->get($search);
        $out=array(
            'result'=>$result
        );
        echo json_encode($out);
    }
}
