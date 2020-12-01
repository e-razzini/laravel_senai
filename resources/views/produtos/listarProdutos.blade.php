<h1>Produtos listados</h1>
<p>{{$result}}</p>

@for ($i = 0; $i <= {{$arrayNumeros}}; $i++)
     <p>{{$arrayNumeros[$i]}}</p> 
@endfor

