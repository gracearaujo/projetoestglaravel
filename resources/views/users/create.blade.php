@extends('layouts.admin')
@section('conteudo') 

<div class="card mt-4 mb-4 border-light shadow">

<div class="card-header d-flex justify-content-between align-items-center"">
  
  <span>Cadastrar Colaborador</span>
  
  <span class="ms-auto d-sm-flex  flex-row">
  <a href="{{route('user.index')}}" class="btn btn-primary btn-sm me-1">Listar</a><br>
  </span>


 </div>
  
 <div class="card-body">
  <x-alerta/>






<form action="{{ route('user.store')}}" method="POST">
      @csrf
      @method('POST')
      
      <label>Nome: </label>
      <input type="text" name="name" placeholder="Nome Completo" value="{{old('name')}}"><br><br>

      <label>Setor: </label>
      <select name="setor">
                  <option value="Tecnologia">Tecnologia</option>
                  <option value="Administrativo">Administrativo</option>
                  <option value="Projeto">Projeto</option>
                </select> <br><br>
      
      <label>Cidade: </label>
                <select  name="cidade">
                  <option value="Rio Branco">Rio Branco (AC)</option>
                  <option value="Maceió">Maceió (AL)</option>
                  <option value="Macapá">Macapá (AP)</option>
                  <option value="Manaus">Manaus (AM)</option>
                  <option value="Salvador">Salvador (BA)</option>
                  <option value="Fortaleza">Fortaleza (CE)</option>
                  <option value="Brasília">Brasília (DF)</option>
                  <option value="Vitória">Vitória (ES)</option>
                  <option value="Goiânia">Goiânia (GO)</option>
                  <option value="São Luís">São Luís (MA)</option>
                  <option value="Cuiabá">Cuiabá (MT)</option>
                  <option value="Campo Grande">Campo Grande (MS)</option>
                  <option value="Belo Horizonte">Belo Horizonte (MG)</option>
                  <option value="Belém">Belém (PA)</option>
                  <option value="João Pessoa">João Pessoa (PB)</option>
                  <option value="Curitiba">Curitiba (PR)</option>
                  <option value="Recife">Recife (PE)</option>
                  <option value="Teresina">Teresina (PI)</option>
                  <option value="Rio de Janeiro">Rio de Janeiro (RJ)</option>
                  <option value="Natal">Natal (RN)</option>
                  <option value="Porto Alegre">Porto Alegre (RS)</option>
                  <option value="Porto Velho">Porto Velho (RO)</option>
                  <option value="Boa Vista">Boa Vista (RR)</option>
                  <option value="Florianópolis">Florianópolis (SC)</option>
                  <option value="São Paulo">São Paulo (SP)</option>
                  <option value="Aracaju">Aracaju (SE)</option>
                  <option value="Palmas">Palmas (TO)</option>
                </select> <br><br>
    
      <label>Data de Check-In: </label>
      <input type="date" name="data" placeholder="Data check-in" value="{{ old('data') ? \Carbon\Carbon::parse(old('data'))->format('Y-m-d') : '' }}"><br><br>

      <button type="submit">Cadastrar</button>
</form>

@endsection