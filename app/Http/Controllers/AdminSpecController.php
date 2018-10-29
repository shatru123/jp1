<?php

namespace App\Http\Controllers;

use App\Sector;
use App\Specialization;
use Illuminate\Http\Request;

class AdminSpecController extends Controller
{
    //
    public function index()
    {
        $specializations=Specialization::all();
        return view('admin.specialization.index',compact('specializations'));
    }

        public function create()
        {
            $sectors=Sector::pluck('name','id')->all();
            $specialization=Specialization::pluck('specialization_name','id')->all();


            return view('admin.specialization.create',compact('sectors','specialization'));
        }


         public function destroy($id)
        {
            //

            $specializations = Specialization::findOrFail($id);

            $specializations->delete();

            return redirect('/admin/specialization');

        }
        public function store(Request $request)
            {
                //

                $input = $request->all();

                $specializations = new Specialization();

                $specializations->create($input);

                return redirect('/admin/specialization');

            }


            public function edit($id)
            {
                $sectors=Sector::pluck('name','id')->all();
                $specializations = Specialization::findOrFail($id);
                return view('admin.specialization.edit',compact('specializations','sectors'));
            }


               public function update(Request $request, $id)
                {
                    //

                    $input = $request->all();


                    Specialization::whereId($id)->first()->update($input);

                    return redirect('/admin/specialization');

                }











}
