@extends('adminlte::page')

@section('title', 'STE')

@section('content_header')
    <h1>Reportes Estadísticos</h1>
@stop

@section('content')
<div class="card">
    {{-- <div class="card-header ">
        <nav class="navbar navbar-expand-lg navbar-light bg-light float-right ">
            <i class="fa fa-chart-pie fa-lg "></i>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            --Seleccione Resporte Estadístico--
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#" data-toggle="modal"
                                data-target="">Participantes por Actividades</a>
                            <a class="dropdown-item" href="#" data-toggle="modal"
                                data-target="">Actividades por Año</a>
                            <a class="dropdown-item" href="#" data-toggle="modal"
                                data-target="">Evidencias por Actividades</a>
                            <a class="dropdown-item" href="#" data-toggle="modal"
                                data-target="">Actividades por Tipo de Actividad</a>
                            <a class="dropdown-item" href="#" data-toggle="card card-danger"
                                data-target="grafica_reportes_5">Evidencias por Tipo de Actividad</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div> --}}

    <div class="card-body">
        @include('Modulo_Actividades.reportes_actividades.graficas')
    </div>
</div>



@stop

@section('css')
<link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap5.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/Perfildeusuarios.css') }}">
@stop

@section('js')
<script src="{{ asset('js/apexcharts.min.js') }}"></script>
<script src="{{ asset('js/jquery-3.5.1.js') }}"></script>
<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/dataTables.bootstrap5.min.js') }}"></script>
<script src="{{ asset('js/chart.js') }}"></script>


<script src="{{ asset('js/popper.min.js') }}"></script>
<script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })
</script>

<script>
    $(document).ready(function() {
        $('#actividades_annos').DataTable({

            language: {
                "decimal": "",
                "emptyTable": "No hay información",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Entradas",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscar:",
                "zeroRecords": "Sin resultados encontrados",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            }
        });
    });
</script>
@stop
