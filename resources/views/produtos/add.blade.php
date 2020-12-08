@extends('layouts.padrao')
@section('conteudo')

<form class="row g-3 needs-validation" method="POST" action="{{route('store-produtos')}}">
    @csrf
  <div class="col-md-6">
    <label for="validationCustom01" class="form-label">Nome do produto</label>
    <input type="text" class="form-control" id="validationCustom01" name="nome_produto" required>
    <div class="valid-feedback">
      cadastrado com sucesso!
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom02" class="form-label">Quantidade</label>
    <input type="text" class="form-control" id="validationCustom02" name="estoque" required>
    <div class="valid-feedback">
    cadastrado com sucesso!
    </div>
  </div>
  
  <div class="col-md-6 " style="margin-top:2%; ">
    <button class="btn btn-primary btn-lg" type="submit">Enviar</button>
  </div>
</form>
@endsection