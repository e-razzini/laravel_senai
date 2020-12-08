@extends('layouts.padrao')
@section('titulo','lista de Produtos')

@section('conteudo')
<div class="row">
    <div class="col-md-12">
        <table class="table table-dark">
            <thead>
                <tr>
                    <th class="cabe" scope="col">codigo</th>
                    <th class="cabe" scope="col">nome</th>
                    <th class="cabe" scope="col">estoque</th>
                    <th class="cabe" scope="col">opções</th>
                </tr>
            </thead>
            <tbody>

                @foreach($produtos as $value)
                <tr>
                    <td>
                        {{$value->Id_produto}} 
                    </td>
                    <td>
                        {{$value->nome_produto}}
                    </td>
                    <td>
                        {{$value->estoque}}

                    </td>
                    <td>
                       <form method="POST" action="{{route('destroy-produtos')}}?Id_produto={{$value->Id_produto}}">
                           @csrf
                           @method('DELETE')
                           <button type="submit" class="btn btn-danger">eliminar</button>
                       </form>

                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
        
@endsection