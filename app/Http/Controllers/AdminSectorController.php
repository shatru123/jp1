<?php

namespace App\Http\Controllers;

use App\Sector;
use Illuminate\Http\Request;

class AdminSectorController extends Controller
{
    //
    public function index()
    {
        $sectors=Sector::all();

        return view('admin.sectors.index',compact('sectors'));
    }


    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
        {
            //

            $sectors = Sector::findOrFail($id);



            $sectors->delete();

            return redirect('/admin/sectors');

        }

}
