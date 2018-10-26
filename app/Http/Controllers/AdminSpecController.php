<?php

namespace App\Http\Controllers;

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




         public function destroy($id)
        {
            //

            $specializations = Specialization::findOrFail($id);

            $specializations->delete();

            return redirect('/admin/specialization');

        }

}
