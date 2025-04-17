<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Http\Requests\UserRequest;
class UserController extends Controller

{
    public function index()
    {
         //Recuperar os registros do bd
         $users = User::orderByDesc('id')->get();

        //Carrega a view (o frontend)
        return view('users.index', ['users'=> $users]);
    }
    public function create()
    {
        //Carrega a view (o frontend)
        return view('users.create');
    }
    public function store(UserRequest $request)
    {
        // Validando o forms
        $request ->validated();


        
        // Cadastra o colaborador no bd
        User::create([
            'name'=> $request->name,
            'setor'=> $request->setor,
            'cidade'=> $request->cidade,
            'data'=> $request-> data,
        ]);
        //Redireciona o colaborador para a pagina index (de listar) e exibe a mensagem de sucesso
        return redirect()->route('user.index')->with('sucesso', 'Cadastro bem-sucedido!');
    }
      public function edit(User $user){
      
        return view('users.edit', ['user'=> $user]);
      }


    public function show(User $user){
        return view('users.show', ['user'=> $user]);
    }
    
    public function update(UserRequest $request, User $user){
       
        //validando o forms
        $request->validated();

        //editando as informacoes no bd
        $user->update([
            'name'=> $request->name,
            'setor'=> $request->setor,
            'cidade'=> $request->cidade,
            'data'=> $request->data,
        ]);

        //Redireciona o colaborador para a pagina index (de listar) e exibe a mensagem de sucesso
        return redirect()->route('user.show', ['user'=>$user->id])->with('sucesso', 'Edição bem-sucedida!');
    }

    public function destroy(User $user)
    {
      //Deletar registro no bd
        $user->delete();  

      //Redireciona o colaborador para a pagina index (de listar) e exibe a mensagem de sucesso
      return redirect()->route('user.index')->with('sucesso', 'Seu usuário foi deletado!');
    }
    
}
