<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditProfileRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //
    public function index()
    {
        return view('admin.administrador.index')->with('users', User::all());
    }

    public function edit()
    {
        
        return view('admin.perfil.edit')->with('users', auth()->user());
    }



    public function changeAdmin(User $user){
        if($user->isAdmin())

            $user->role = 'user';
        else
            $user->role = 'admin';

        $user->save();
        session()->flash('sucess' , 'Usuario autenticado como administrador com sucesso');
        return redirect()->back();
    }


      // Atualiza o perfil do administrador
      public function update(EditProfileRequest $request)
      {
          $user = auth()->user();
          $user->name = $request->name;
  
          if ($user->email != $request->email) {
              $user->email = $request->email;
              $user->email_verified_at = null;
          }
  
          if ($request->password) {
              $user->password = Hash::make($request->password);
          }
  
          $user->save();
          session()->flash('success', 'Usuário alterado com sucesso');
          return redirect(route('users.index'));
      }


      public function NewUserAdmin(){
          return view('admin.administrador.newuseradmin');
      }
}
