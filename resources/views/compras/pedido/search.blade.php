<form method="GET" action="{{ route('pedido.index') }}" accept-charset="UTF-8">

<div class="form-group">
	<div class="input-group">
		<input type="text" class="form-control " name="searchText" placeholder="Busqueda por Area ......" >
		<input type="text" class="form-control" name="searchText2" placeholder="Busqueda por Proveedor ......" >
		<input type="text" class="form-control" name="searchText3" placeholder="Busqueda por Preventivo ......" >
		<span class="input-group-btn">
			<button type="submit" class="btn btn-outline-primary">Buscar</button>
		</span>
	</div>
</div>



</form>