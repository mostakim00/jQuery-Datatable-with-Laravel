<?php
namespace App\Http\Controllers;

use App\Http\Requests;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::all();

        return view('emp.index', compact('employees'));
    }
}?>
