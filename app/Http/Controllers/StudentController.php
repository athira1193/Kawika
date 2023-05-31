<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Student;
use DataTables;
class StudentController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function getStudents(Request $request)
    {
        if ($request->ajax()) {
            $data = Student::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->addColumn('image', function($row){

                    return '<img src="uploads/'.$row->profile_pic.' " width="100"/>';
                })
                ->rawColumns(['action','image'])
                ->make(true);
        }
    }
    public function createStudent()
    {
        return view('create_student');
    }
    public function addStudent(Request $request)
    {
        $fourdigitrandom = rand(1000,9999);
        $fileName = time().'.'.$request->file->extension();
        $request->file->move(public_path('uploads'), $fileName);
        $student = new Student;
        $student->name = $request->name;
        $student->number = $fourdigitrandom;
        $student->email = $request->email;
        $student->class = $request->class;
        $student->profile_pic = $fileName;
        $student->state = $request->state;
        $student->country = $request->country;
        $student->save();
        return back()->with('success', 'Image uploaded Successfully!');
    }
}
