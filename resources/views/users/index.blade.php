@extends('layouts.admin')
@section('conteudo')    

<div class="card text-center mt-4 mb-4 border-light shadow">

 <div class="card-header d-flex justify-content-between align-items-center"">
   
   <span>Lista de Colaboradores</span>
   
   <span class="ms-auto">
   <a href="{{route('user.create')}}" class="btn btn-secondary" >Cadastrar</a>
   </span>
  </div>
   
  <div class="card-body">
   <x-alerta/>
    
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome: </th>
      <th scope="col">Setor: </th>
      <th scope="col">Cidade: </th>
      <th scope="col">Data de Check-In: </th>
      <th scope="col" class="text-center" >Ações: </th>
    </tr>
    </thead>
    <tbody>


  @forelse($users as $user)
  <tr>
      <th>{{$user->id}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->setor}}</td>
      <td>{{$user->cidade}}</td>
      <td>{{$user->data}}</td>
      <td class="text-center">  
        <a href="{{route('user.show', ['user'=>$user])}}" class="btn btn-info btn-sm">Visualizar</a>
        <a href="{{route('user.edit', ['user'=>$user])}}" class="btn btn-warning btn-sm">Editar</a>
  
  
        <form method="POST" action="{{route('user.destroy', ['user'=>$user->id])}}" class="d-inline">
        @csrf
        @method('delete')
      <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('Quer mesmo deletar este registro?')">Deletar</button>
      </form>
      </td>
  </tr>

  
  @empty
  @endforelse
</tbody>
</table>
</div>
</div>
@endsection