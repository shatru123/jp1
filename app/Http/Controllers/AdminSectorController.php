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
    public function create()
    {


        return view('admin.sectors.create');
    }
 public function edit($id)
    {
        $sectors = Sector::findOrFail($id);
        return view('admin.sectors.edit',compact('sectors'));
    }


    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */

        public function store(Request $request)
            {
                //

                $input = $request->all();

                $sectors = new Sector();

                $sectors->create($input);

                return redirect('/admin/sectors');

            }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
                {

                    $input = $request->all();

                    Sector::whereId($id)->first()->update($input);

                    return redirect('/admin/sectors');

                }



    public function destroy($id)
    {
        //

        $sectors = Sector::findOrFail($id);

        $sectors->delete();

        return redirect('/admin/sectors');

    }






}
