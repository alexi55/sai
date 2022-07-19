@can('medidas_edit')

<td class="text-center p-1">
  <a href="{{ route('areas.edit', $idarea)}}" class="btn btn-outline-info btn-sm">Editar</a>
</td>

@endcan
@can('file_planta_access')

<td class="text-center p-1">
  <a href="{{ route('areas.file', $idarea)}}" class="btn btn-outline-warning btn-sm"  title="Files Planta">Files Planta</a>
</td>

@endcan
@can('file_contrato_access')

<td class="text-center p-1">
  <a href="{{ route('areas.file2', $idarea)}}" class="btn btn-outline-primary btn-sm"  title="Files Contrato">Files Contrato</a>
</td>

@endcan
