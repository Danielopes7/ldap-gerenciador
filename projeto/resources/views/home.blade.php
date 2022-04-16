@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Listagem de usuários</h1>
@stop

@section('content')
    
    <p>Tabela com usuários para buscas simples e avançadas.</p>
    <div class="card">

<div class="card-body">
    {{-- <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dt-buttons btn-group flex-wrap">                <button class="btn btn-secondary buttons-csv buttons-html5" style="background-color: blue" tabindex="0" aria-controls="example1" type="button"><span>Doc</span></button> <button class="btn btn-secondary buttons-excel buttons-html5" style="background-color: green" tabindex="0" aria-controls="example1" type="button"><span>Excel</span></button> <button class="btn btn-secondary buttons-pdf buttons-html5" style="background-color: red" tabindex="0" aria-controls="example1" type="button"><span>PDF</span></button>  <div class="btn-group"><button class="btn btn-secondary buttons-collection dropdown-toggle buttons-colvis" tabindex="0" aria-controls="example1" type="button" aria-haspopup="true"><span>Column visibility</span></button></div> </div></div><div class="col-sm-12 col-md-6"><div id="example1_filter" class="dataTables_filter float-right"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info"> --}}

    <table id="example2" class="table table-bordered table-hover">
    <thead>
        <tr role="row">
            <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Nome</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Usuário de rede</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Cargo</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">E-mail</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Departamento</th>
            </tr>
    </thead>
    <tbody>
        </tr><tr class="even">
        <td class="dtr-control sorting_1" tabindex="0">Gecko</td>
        <td>Firefox 3.0</td>
        <td>Win 2k+ / OSX.3+</td>
        <td>1.9</td>
        <td>
            <a href="" class="btn btn-info btn-sm">
                                        <i class="far fa-eye"></i>
            </a>
            <a href="" class="btn btn-info btn-sm" style="background-color: #28a745;border-color: #28a745;">
                                        <i class="far fa-edit"></i>
            </a>
        </td>
        </tr><tr class="odd">
        <td class="dtr-control sorting_1" tabindex="0">Gecko</td>
        <td>Firefox 3.0</td>
        <td>Win 2k+ / OSX.3+</td>
        <td>1.9</td>
        <td>A</td>
        </tr><tr class="even">
        <td class="dtr-control sorting_1" tabindex="0">Gecko</td>
        <td>Firefox 3.0</td>
        <td>Win 2k+ / OSX.3+</td>
        <td>1.9</td>
        <td>A</td>
        </tr><tr class="odd">
        <td class="dtr-control sorting_1" tabindex="0">Gecko</td>
        <td>Firefox 3.0</td>
        <td>Win 2k+ / OSX.3+</td>
        <td>1.9</td>
        <td>A</td>
        </tr><tr class="even">
        <td class="dtr-control sorting_1" tabindex="0">Gecko</td>
        <td>Firefox 3.0</td>
        <td>Win 2k+ / OSX.3+</td>
        <td>1.9</td>
        <td>A</td>
        </tr><tr class="odd">
        <td class="dtr-control sorting_1" tabindex="0">Gecko</td>
        <td>Firefox 3.0</td>
        <td>Win 2k+ / OSX.3+</td>
        <td>1.9</td>
        <td>A</td>
        </tr><tr class="even">
        <td class="sorting_1 dtr-control">Gecko</td>
        <td>Camino 1.5</td>
        <td>OSX.3+</td>
        <td>1.8</td>
        <td>A</td>
        </tr><tr class="odd">
        <td class="dtr-control sorting_1" tabindex="0">Gecko</td>
        <td>Firefox 3.0</td>
        <td>Win 2k+ / OSX.3+</td>
        <td>1.9</td>
        <td>A</td>
        </tr><tr class="even">
        <td class="sorting_1 dtr-control">Gecko</td>
        <td>Camino 1.5</td>
        <td>OSX.3+</td>
        <td>1.8</td>
        <td>A</td>
        </tr><tr class="odd">
        <td class="dtr-control sorting_1" tabindex="0">Gecko</td>
        <td>Firefox 3.0</td>
        <td>Win 2k+ / OSX.3+</td>
        <td>1.9</td>
        <td>A</td>
        </tr><tr class="even">
        <td class="sorting_1 dtr-control">Gecko</td>
        <td>Camino 1.5</td>
        <td>OSX.3+</td>
        <td>1.8</td>
        <td>A</td>
        </tr><tr class="odd">
        <td class="dtr-control sorting_1" tabindex="0">Gecko</td>
        <td>Firefox 3.0</td>
        <td>Win 2k+ / OSX.3+</td>
        <td>1.9</td>
        <td>A</td>
        </tr><tr class="even">
        <td class="sorting_1 dtr-control">Gecko</td>
        <td>Camino 1.5</td>
        <td>OSX.3+</td>
        <td>1.8</td>
        <td>A</td>
        {{-- @foreach ( $objects as $object ) --}}
            {{-- @isset($object->displayname)
                </tr><tr class="odd">
                    <td>{{ $object->displayname[0] ?? ''}}</td>
                    <td>{{ $object->samaccountname[0] ?? ''}}</td>
                    <td>{{ $object->title[0] ?? ''}}</td>
                    <td>{{ $object->mail[0] ?? ''}}</td>
                    <td>{{ $object->department[0] ?? ''}}</td> --}}
                    {{-- @if( $object->useraccountcontrol[0]== 512 )
                        <td>Ativo</td>
                    @else
                        <td>Inativo</td>
                    @endif --}}
            {{-- @endisset --}}
        {{-- @endforeach --}}
    </tbody>
    </table>
    </div>
</div>

@stop

@section('css')

@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script>
        $(function () {
            $('#example2').DataTable({
            "paging": true,
            "pageLength": 20,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.25/i18n/Portuguese-Brasil.json"

            }
            });
        });
    </script>
@stop