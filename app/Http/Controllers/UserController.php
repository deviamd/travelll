<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use Validator;

class UserController extends Controller
{
    public function _contruct()
    {
        $this->middleware('admin');
    }

    public function index(Request $request)
    {
        $user = User::paginate(3);
        $filterKeyword = $request->get('keyword');
        if ($filterKeyword)
        {
            $user = User::where('name','LIKE',"%$filterKeyword%")->paginate(1);
        }
        return view('user.index', compact('user'));
    }//end method

    public function create()
    {

        return view('user.create');
    }//end method

    public function store(Request $request)
    {
        $data = $request->all();
        $validasi = Validator::make($data,[
            'name'=>'required|max:255',
            'email'=>'required|email|max:255|unique:users',
            'password'=>'required|min:8',

        ]);
        if($validasi->fails())
        {
            return redirect()->route('user.create')->withInput()->withErrors($validasi);
        }

        $data['password'] = bcrypt($data['password']);
        User::create($data);
        //toast('berhasil di tambah', 'success');
        return redirect()->route('user.index');
    }//end method

    public function destroy($id)
    {
        $data = user::findOrFail($id);
        $data->delete();
        return redirect()->route('user.index');
    }//end method


    public function show($id)
    {
        $user = user::findOrFail($id);
        return view('user.show',compact('user'));
    }//end method


    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('user.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    $user = User::findOrFail($id);
    $data = $request->all();
    $validasi = Validator::make($data,[
        'name'=>'required|max:255',
        'email'=>'required|email|max:255|unique:users,email,'.$id,
        'password'=>'sometimes|nullable|min:6'
        ]);
        if($validasi->fails())
        {
            return redirect()->route('user.index',[$id])->withErrors($validasi);
        }
        if($request->input('password'))
        {
            $data['password'] = bcrypt($data['password']);
       }
         else
         {
              $data = Arr::except($data,['password']);
         }
          $user->update($data);
          return redirect()->route('user.index');
       }
}
?>
