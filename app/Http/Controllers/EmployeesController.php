<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
class EmployeesController extends Controller
{
    //

    public function index()
    {
        $employees=Employee::all();

        return view('admin.employees.index',compact('employees'));
    }
    public function create()
    {

        return view('admin.employees.create');
    }
 public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        return view('admin.employees.edit',compact('employee'));
    }


    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */

        public function store(Request $request)
            {
                $request->validate([
                    'first_name' => 'required',
                    'contact_no' => 'required|min:10',
                    'last_name' => 'required',
                    'email' => 'required',   
                ]);

                $input = $request->all();

                $employees = new Employee();

                $employees->create($input);

                return redirect('/admin/employees');

            }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
                {
                    
                    $request->validate([
                        'first_name' => 'required',
                        'contact_no' => 'required|min:10',
                        'last_name' => 'required',
                        'email' => 'required',
        
                    ]);
                    $input = $request->all();

                    Employee::whereId($id)->first()->update($input);

                    return redirect('/admin/employees');

                }



    public function destroy($id)
    {
        //

        $employees = Employee::findOrFail($id);

        $employees->delete();

        return redirect('/admin/employees');

    }
}
