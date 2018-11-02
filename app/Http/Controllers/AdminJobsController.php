<?php

namespace App\Http\Controllers;

use App\Job;
use App\Sector;
use App\Specialization;
use Illuminate\Http\Request;

class AdminJobsController extends Controller
{
    //

    public function index()
    {
      $jobs=Job::all();
        return view('admin.jobs.index',compact('jobs'));
    }

    public function create()
    {
        $sectors=Sector::pluck('name','id')->all();
        $specialization=Specialization::pluck('specialization_name','id')->all();

        return view('admin.jobs.create',compact('sectors','specialization'));
    }

    public function edit($id)
    {
        $sectors=Sector::pluck('name','id')->all();
        $specialization=Specialization::pluck('specialization_name','id')->all();
        $job = Job::findOrFail($id);
        return view('admin.jobs.edit',compact('job','sectors','specialization'));
    }

    public function store(Request $request)
        {
            //
            
            $request->validate([
                'title' => 'required',
                'role_description' => 'required',
                'country' => 'required',
                'region' => 'required',
                'experties' => 'required',
                'education' => 'required',

            ]);
            $input = $request->all();


            $jobs=new Job();

            $jobs->create($input);

            return redirect('/admin/jobs');

        }

       public function update(Request $request, $id)
        {
            //
            $request->validate([
                'title' => 'required',
                'role_description' => 'required',
                'country' => 'required',
                'region' => 'required',
                'experties' => 'required',
                'education' => 'required',

            ]);
            $input = $request->all();

            $jobs=new Job();

            $jobs->whereId($id)->first()->update($input);

            return redirect('/admin/jobs');

        }


         public function destroy($id)
        {
            $jobs = Job::findOrFail($id);
            $jobs->delete();
            return redirect('/admin/jobs');

        }



}
