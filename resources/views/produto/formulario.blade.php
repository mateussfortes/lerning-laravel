
@extends('principal')

@section('conteudo')

	<h1>Novo produto</h1>
	<form action="/produtos/adiciona" method="post">

		<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

		<div class="form-group">
			<label>Nome</label>
			<input class="form-control" name="nome"/>
		</div>
	
		<div class="form-group">
			<label>Descricao</label>
			<input class="form-control" name="descricao"/>
		</div>

		<div class="form-group">
			<label>Valor</label>
			<input class="form-control" name="valor"/>
		</div>
	
		<div class="form-group">
			<label>Quantidade</label>
			<input class="form-control" type="number" name="quantidade"/>
		</div>

		<button type="submit" class="btn btn-primary btn-block">Adicionar</button>

	</form>
@stop