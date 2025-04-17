@extends('layouts.admin')
@section('conteudo') 
    
<div class="card mt-4 mb-4 border-light shadow">

<div class="card-header d-flex justify-content-between align-items-center"">
  
  <span>Visualizar os Dados do Colaborador</span>
  
  <span class="ms-auto d-sm-flex  flex-row">
  <a href="{{route('user.index')}}" class="btn btn-primary btn-sm me-1">Listar</a><br>
  <a href="{{route('user.edit', ['user'=>$user])}}" class="btn btn-warning btn-sm me-1">Editar</a>

  <form method="POST" action="{{route('user.destroy', ['user'=>$user->id])}}">
   @csrf
   @method('delete')
   <button type="submit" class="btn btn-danger btn-sm me-1" onclick="return confirm('Quer mesmo deletar este registro?')">Deletar</button>
  </form> 
  </span>


 </div>
  
 <div class="card-body">
  <x-alerta/>

  <dl class="row">
  <dt class="col-sm-3"> ID: </dt>
  <dd class="col-sm-9"> {{$user->id}}</dd>

  <dt class="col-sm-3">  Nome: </dt>
  <dd class="col-sm-9"> {{$user->name}}</dd>

  <dt class="col-sm-3"> Setor: </dt>
  <dd class="col-sm-9"> {{$user->setor}}</dd>

  <dt class="col-sm-3"> Cidade: </dt>
  <dd class="col-sm-9"> {{$user->cidade}}</dd>

  <dt class="col-sm-3"> Data de Check-In:</dt>
  <dd class="col-sm-9">  {{ \Carbon\Carbon::parse($user->data)->format('m/d/y')}} <br>
  </dd>


  </dl>
  </div>
  </div>

  @endsection
