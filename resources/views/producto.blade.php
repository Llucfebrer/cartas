@extends('layouts.frontend')
@section('content')



<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <strong>Restaurante : {{$producto->carta->restaurante->nombre}}</strong> 
</div>

<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    <strong>Carta :  {{$producto->carta->nombre}}</strong> 
  </div>
<script>
  $(".alert").alert();
</script>
<div class="row bg-info p-2 mt-4">
    
    <div class="col-6">
 Plato:   {{$producto->nombre}}    
    </div>
    <div class="col-3">
        <b>Alergicos</b>
        @foreach ($producto->alergicos as $alergico)
            {{$alergico->nombre}} <br>
        @endforeach
    </div>
</div>

@endsection