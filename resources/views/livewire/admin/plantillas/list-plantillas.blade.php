<div>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h5 class="m-0">Plantilla de Trabajadores</h5>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Plantilla</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class="row mb-3 p-2">

        {{-- seleccion de centro --}}
        {{-- combo Centro --}}
    {{--     <div class="col-md-3">
            <div wire:ignore>
                <label for="" class="text-warning">Centros</label>
                <select wire:model.live="selectedCentro"
                id="id_centro" class="form-control select2">
                    @foreach ($centros as $centro)
                        <option value="{{ $centro->id }}" class="p-3 mb-2 bg-primary text-white">
                            {{ $centro->nombre_centro }}
                        </option>
                    @endforeach
                </select>

            </div>
        </div> --}}


        <div class="col-md-3">
            <div liwire:ignore>
                <label for="situacion"class="text-warning">Situacion</label>
                <select wire:model.live="situacion"
                    id="situacion" class="form-control select2">
                    <option value="" selected>Debe seleccionar un elemento</option>
                    <option value="FALLECIDO">FALLECIDO</option>
                    <option value="MUT Y SEG">MUT Y SEG</option>
                </select>
            </div>
        </div>

        {{-- Etiqueta Search --}}
        <div class="col-md-2">
            <label for="" class="text-warning">Buscar</label>
            <input type="text" style="text-transform:uppercase" class="form-control" wire:model.live="search">
        </div>

        <div class="col-md-1">
            <label for="" class="text-warning">Per Page</label>
            <select class="form-control" wire:model.live=perPage>
                <option value="5" class="p-3 mb-2 bg-primary text-white">5</option>
                <option value="10" class="p-3 mb-2 bg-primary text-white">10</option>
                <option value="15" class="p-3 mb-2 bg-primary text-white">15</option>
                <option value="20" class="p-3 mb-2 bg-primary text-white">20</option>
                <option value="25" class="p-3 mb-2 bg-primary text-white">25</option>
            </select>
        </div>


    </div>

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title" style="float: left;">Lista de Trabajadores 1</h5>
                            <a href="#" class="btn btn-sm btn-secondary"
                                style="float: right;">
                                Agregar Trabajador</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive small">
                           {{--      @if (count($plantillas)) --}}
                                    <table class="table table-bordered table-striped table-sm">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col"></th>
                                                <th scope="col">Ficha</th>
                                                <th scope="col">Nombre</th>
                                                <th scope="col">A. Paterno</th>
                                                <th scope="col">A. Materno</th>
                                                <th scope="col">Centro</th>
                                                <th scope="col">Situacion</th>
                                                <th scope="col">Options</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- @foreach ($plantillas as $plantilla)
                                                <tr>
                                                    <th scope="row">{{ $loop->iteration }}</th>
                                                    <td> </td>
                                                    <td>{{ $plantilla->ficha }}</td>
                                                    <td>{{ $plantilla->nombre }}</td>
                                                    <td>{{ $plantilla->apellidop }}</td>
                                                    <td>{{ $plantilla->apellidom }}</td>
                                                    <td>{{ $plantilla->planCentro->nombre_centro }}</td>
                                                    <td>
                                                        @if ($plantilla->situacion == 'MUT Y SEG')
                                                            <span class="badge badge-primary">MUT Y SEG</span>
                                                        @elseif($plantilla->situacion)
                                                            <span class="badge badge-danger">
                                                                {{ $plantilla->situacion }}
                                                            </span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <a href=""
                                                            class="btn btn-primary">Edit</a>
                                                    </td>
                                                </tr>
                                            @endforeach --}}
                                        </tbody>
                                    </table>
                                    {{-- @if ($plantillas->hasPages())
                                        <div class="card-footer">
                                            <span class="mr-1">Registros</span>
                                            {{ $plantillas->total() }}. {{ $plantillas->onEachSide(1)->links() }}

                                        </div>
                                    @endif --}}
                               {{--  @else
                                    No existe ningun registro coincidente
                                @endif --}}
                                {{--  {{ $plantillas->links() }} --}}
                                {{-- @endif --}}
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>

</div>
