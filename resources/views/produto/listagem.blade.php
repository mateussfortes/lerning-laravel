
@extends('principal')

@section('conteudo')


@if(empty($produtos))
	<div>Você não tem nenhum produto cadastrado.</div>

@else

	<h1>Listagem de Produtos</h1>
	
	@if(old('nome'))
		<div class="alert alert-success">
			<strong>Sucesso!</strong> O produto {{old('nome')}} foi adicionado com sucesso!
		</div>
	@endif

	<table class="table table-striped table-bordered table-hover">
		@foreach ($produtos as $p)
			<tr class="{{ $p->quantidade <= 1 ? 'danger' : ''}}" >
				<td>{{$p->nome}}</td>
				<td>{{$p->valor}}</td>
				<td>{{$p->descricao}}</td>
				<td>{{$p->quantidade}}</td>
				<td>
					<a href="/produtos/mostra/{{$p->id}}">
						Visualizar
					</a>
				</td>
				<td>
					<a href="{{action('ProdutoController@remove', $p->id)}}">
						Remover
					</a>
				</td>
			</tr>
		@endforeach
	</table>

@endif

@stop