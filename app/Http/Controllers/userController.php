<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userdatas;
use Illuminate\Support\Facades\Storage;

class userController extends Controller
{

    public function lehome()
    {
        $userdata = userdatas::all();
        // dd($userdata);
        return view ('lehome', compact('userdata'));
    }

    public function setting()
    {
        $userdata = userdatas::all();
        // dd($userdata);
        return view ('datadata', compact('userdata'));
    }

    public function add()
    {
        return view('adddata');
    }

    public function adding(Request $request)
    {
        $userdata = userdatas::create($request->all());
        if ($request ->hasFile('face')){
            $request->file('face')->move('face/', $request->file('face')->getClientOriginalName());
            $userdata->face = $request->file('face')->getClientOriginalName();
            $userdata->save();
        }

        return redirect()->route('lehome');
    }

    public function showdata($id){
        $userdata = userdatas::find($id);

        return view('showdata', compact('userdata'));
    }

    public function updatedata(Request $request, $id){
        $userdata = userdatas::find($id);
        $userdata->update($request->all());
        return redirect()->route('lehome');
    }

    public function delete($id){
        $userdata = userdatas::find($id);
        if ($userdata->face != "") {
            Storage::delete('public/face' . $userdata->face);
        }
        $userdata->delete();
        return redirect()->route('lehome');
    }
}
