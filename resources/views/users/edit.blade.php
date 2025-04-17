@extends('layouts.admin')
@section('conteudo') 

<div class="card mt-4 mb-4 border-light shadow">

<div class="card-header d-flex justify-content-between align-items-center"">
  
  <span>Editar Dados do Colaborador</span>
  
  <span class="ms-auto d-sm-flex  flex-row">
  <a href="{{route('user.index')}}" class="btn btn-primary btn-sm me-1">Listar</a><br>
  <a href="{{route('user.show', ['user'=>$user])}}" class="btn btn-info btn-sm me-1">Visualizar</a>


  <form method="POST" action="{{route('user.destroy', ['user'=>$user->id])}}">
   @csrf
   @method('delete')
   <button type="submit" class="btn btn-danger btn-sm me-1" onclick="return confirm('Quer mesmo deletar este registro?')">Deletar</button>
  </form> 
  </span>


 </div>
  
 <div class="card-body">
  <x-alerta/>
    




<form action="{{ route('user.update', ['user' => $user->id]) }}" method="POST">
    @csrf
    @method('PUT')
      
      <label>Nome: </label>
      <input type="text" name="name" placeholder="Nome Completo" value="{{old('name', $user->name)}}"><br><br>

      <label>Setor: </label>
<select name="setor">
  <option value="Tecnologia" {{ old('setor', $user->setor ?? '') == 'Tecnologia' ? 'selected' : '' }}>Tecnologia</option>
  <option value="Administrativo" {{ old('setor', $user->setor ?? '') == 'Administrativo' ? 'selected' : '' }}>Administrativo</option>
  <option value="Projeto" {{ old('setor', $user->setor ?? '') == 'Projeto' ? 'selected' : '' }}>Projeto</option>
</select> <br><br>
      
<label>Cidade: </label>
<select name="cidade">
  <option value="Rio Branco" {{ old('cidade', $user->cidade ?? '') == 'Rio Branco' ? 'selected' : '' }}>Rio Branco (AC)</option>
  <option value="Maceió" {{ old('cidade', $user->cidade ?? '') == 'Maceió' ? 'selected' : '' }}>Maceió (AL)</option>
  <option value="Macapá" {{ old('cidade', $user->cidade ?? '') == 'Macapá' ? 'selected' : '' }}>Macapá (AP)</option>
  <option value="Manaus" {{ old('cidade', $user->cidade ?? '') == 'Manaus' ? 'selected' : '' }}>Manaus (AM)</option>
  <option value="Salvador" {{ old('cidade', $user->cidade ?? '') == 'Salvador' ? 'selected' : '' }}>Salvador (BA)</option>
  <option value="Fortaleza" {{ old('cidade', $user->cidade ?? '') == 'Fortaleza' ? 'selected' : '' }}>Fortaleza (CE)</option>
  <option value="Brasília" {{ old('cidade', $user->cidade ?? '') == 'Brasília' ? 'selected' : '' }}>Brasília (DF)</option>
  <option value="Vitória" {{ old('cidade', $user->cidade ?? '') == 'Vitória' ? 'selected' : '' }}>Vitória (ES)</option>
  <option value="Goiânia" {{ old('cidade', $user->cidade ?? '') == 'Goiânia' ? 'selected' : '' }}>Goiânia (GO)</option>
  <option value="São Luís" {{ old('cidade', $user->cidade ?? '') == 'São Luís' ? 'selected' : '' }}>São Luís (MA)</option>
  <option value="Cuiabá" {{ old('cidade', $user->cidade ?? '') == 'Cuiabá' ? 'selected' : '' }}>Cuiabá (MT)</option>
  <option value="Campo Grande" {{ old('cidade', $user->cidade ?? '') == 'Campo Grande' ? 'selected' : '' }}>Campo Grande (MS)</option>
  <option value="Belo Horizonte" {{ old('cidade', $user->cidade ?? '') == 'Belo Horizonte' ? 'selected' : '' }}>Belo Horizonte (MG)</option>
  <option value="Belém" {{ old('cidade', $user->cidade ?? '') == 'Belém' ? 'selected' : '' }}>Belém (PA)</option>
  <option value="João Pessoa" {{ old('cidade', $user->cidade ?? '') == 'João Pessoa' ? 'selected' : '' }}>João Pessoa (PB)</option>
  <option value="Curitiba" {{ old('cidade', $user->cidade ?? '') == 'Curitiba' ? 'selected' : '' }}>Curitiba (PR)</option>
  <option value="Recife" {{ old('cidade', $user->cidade ?? '') == 'Recife' ? 'selected' : '' }}>Recife (PE)</option>
  <option value="Teresina" {{ old('cidade', $user->cidade ?? '') == 'Teresina' ? 'selected' : '' }}>Teresina (PI)</option>
  <option value="Rio de Janeiro" {{ old('cidade', $user->cidade ?? '') == 'Rio de Janeiro' ? 'selected' : '' }}>Rio de Janeiro (RJ)</option>
  <option value="Natal" {{ old('cidade', $user->cidade ?? '') == 'Natal' ? 'selected' : '' }}>Natal (RN)</option>
  <option value="Porto Alegre" {{ old('cidade', $user->cidade ?? '') == 'Porto Alegre' ? 'selected' : '' }}>Porto Alegre (RS)</option>
  <option value="Porto Velho" {{ old('cidade', $user->cidade ?? '') == 'Porto Velho' ? 'selected' : '' }}>Porto Velho (RO)</option>
  <option value="Boa Vista" {{ old('cidade', $user->cidade ?? '') == 'Boa Vista' ? 'selected' : '' }}>Boa Vista (RR)</option>
  <option value="Florianópolis" {{ old('cidade', $user->cidade ?? '') == 'Florianópolis' ? 'selected' : '' }}>Florianópolis (SC)</option>
  <option value="São Paulo" {{ old('cidade', $user->cidade ?? '') == 'São Paulo' ? 'selected' : '' }}>São Paulo (SP)</option>
  <option value="Aracaju" {{ old('cidade', $user->cidade ?? '') == 'Aracaju' ? 'selected' : '' }}>Aracaju (SE)</option>
  <option value="Palmas" {{ old('cidade', $user->cidade ?? '') == 'Palmas' ? 'selected' : '' }}>Palmas (TO)</option>
</select> <br><br>

    
      <label>Data de Check-In: </label>
      <input type="date" name="data" placeholder="Data check-in" value="{{old('data', $user->data)}}"><br><br>

      <button type="submit">Salvar</button>
</form>

@endsection