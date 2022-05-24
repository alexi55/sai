
<div class="form-group row">
	<div class="col-md-3">
		<input type="text" class="form-control " name="searchText" placeholder="Area" >
	</div>
	<div class="col-md-3">
		<input type="text" class="form-control" name="searchText2" placeholder="Proveedor" >
	</div>
	<div class="col-md-3">
		<input type="text" class="form-control" name="searchText3" placeholder="Preventivo" >
	</div>
	<div class="col-md-3 text-right">
		<button type="submit" class="btn btn-outline-primary">
			Buscar
		</button>
		<a href="{{ route('pedido.create') }}" class="btn btn-outline-primary">
			Agregar
		</a>
		@if ($back == false)
			<a href="{{route('pedido.index')}}" class="btn btn-outline-primary">
				<i class="fas fa-angle-double-left"></i>
			</a>
		@endif
	</div>
</div>



