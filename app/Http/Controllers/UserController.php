<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::get();
        return view('index', ['dados' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $dados = User::create($request->all());
            $msg = 'alert-success|Usuário criado com sucesso!';
        }catch (\Throwable $e){
            $msg = 'alert-danger|Erro ao criar usuário! Se persistir, comunique o administrador!';
        }
        return redirect()->route('users.edit',[$dados->id])->with('alertMessage', $msg);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('edit',['dados' => $user]);
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
        
        try{
            $dados = User::find($id);
            if($request->password === null){ 
                $up = $request->except('password');
            }else{
                $up = $request->all();
            }
            $dados->update($up);
            $msg = 'alert-success|Usuário alterado com sucesso!';
        }catch(\Throwable $e){
            $msg = 'alert-danger|Erro ao alterar usuário! Se persistir, comunique o administrador!';
        }

        return redirect()->route('users.edit',[$dados->id])->with('alertMessage', $msg);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    { 
        try {
            $user = User::find($id);
            $user->delete();
            $msg = 'alert-success|Usuário removido com sucesso!';
        } catch (Throwable  $e) {
            $msg = 'alert-warning|Erro ao remover usuário! Se o erro persistir, entre em contato com o administrador.';
        }
        return redirect()->route('users.index')->with('alertMessage', $msg);
    }
}
