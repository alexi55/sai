@can('proveedores_edit')
<td class="text-center p-1">
    <a href="{{ route('proveedores.edit',$idproveedor) }}" class="btn btn-outline-success">Editar</a>
</td>
@endcan
@can('proveedores_edit')
<a href="{{route('admin.users.edit', $idproveedor)}}" class="btn btn-outline-warning" data-toggle="tooltip"
    data-placement="top" title="Permite cargar documentos del proveedor">Documentos</a>
@endcan