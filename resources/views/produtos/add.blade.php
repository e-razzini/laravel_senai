@extends('layouts.padrao')
@section('conteudo')

<form class="row g-3 needs-validation" method="POST" action="{{route('store-produtos')}}">
  @csrf
  <div class="col-md-6">
    <label for="validationCustom01" class="form-label">Nome do produto</label>
     
    <input type="text" class="form-control" id="nome_produto" name="nome_produto" value="{{$produto->nome_produto}}" required>

    <input type="hidden" value="{{$produto->Id_produto}}" name="Id_produto" id="Id_produto">
  </div>
  <div class="col-md-6">
    <label for="validationCustom02" class="form-label">Quantidade</label>
    <input type="text" class="form-control" id="estoque" name="estoque" value="{{$produto->estoque}}" required>
  </div>

  <div class="col-md-6 " style="margin-top:2%; ">
    <button type="submit" class="btn btn-success">enviar</button>
  </div>
</form>
@endsection