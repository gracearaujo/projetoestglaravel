@if (session('sucesso'))

<div class="alert alert-success" role="alert">
      {{session('sucesso')}}
</div>
    @endif

@if($errors->any())
 <div class="alert alert-danger" role="alert">
  @foreach($errors->all() as $error)
   
   {{ $error }} <br>
     
  @endforeach
 </div> 
@endif

