<section class="content">
<div class="container-fluid">
<div class="row">
{{-- Inicio Evidencias-Tipo de Actividad --}}
<div class="col-md-6">
<div class="card card-danger">
    <div class="card-header">
        <h3 class="card-title">Evidencias-Tipo de Actividad</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
            </button>
        </div>
    </div>
    <div class="card-body">
        <div id="donutChart" data-bs-evi_1="{{ $count_evi_1 }}" data-bs-evi_2="{{ $count_evi_2 }}"
         data-bs-evi_3="{{ $count_evi_3 }}" data-bs-evi_4="{{ $count_evi_4 }}" data-bs-evi_5="{{ $count_evi_5 }}"
         style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;">
     </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            var datos = document.querySelector("#donutChart")
            var evi_1 = Number(datos.getAttribute('data-bs-evi_1'))
            var evi_2 = Number(datos.getAttribute('data-bs-evi_2'))
            var evi_3 = Number(datos.getAttribute('data-bs-evi_3'))
            var evi_4 = Number(datos.getAttribute('data-bs-evi_4'))
            var evi_5 = Number(datos.getAttribute('data-bs-evi_5'))

            var options = {
                series: [evi_1, evi_2, evi_3, evi_4, evi_5],
                chart: {
                    type: 'pie',
                    width: 430,
                    toolbar: {
                        show: true,
                    }
                },
                labels: ['Político Ideológico', 'Académico', 'Investigativa', 'Extensión Universitaria', 'Otras'],
                responsive: [{
                    breakpoint: 680,
                    options: {
                        chart: {
                            width: 200
                        },
                        legend: {
                            position: 'bottom'
                        }
                    }
                }],
            };
            var chart = new ApexCharts(datos, options);
            chart.render();
        });
    </script>

</div>
</div>

{{-- Fin Evidencias-Tipo de Actividad --}}

{{-- Inicio Actividades-Tipo de Actividad --}}
<div class="col-md-6">
    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title">Actividades-Tipo de Actividad</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            <div id="pieChart" data-bs-act_1="{{ $count_act_1 }}" data-bs-act_2="{{ $count_act_2 }}"
            data-bs-act_3="{{ $count_act_3 }}" data-bs-act_4="{{ $count_act_4 }}" data-bs-act_5="{{ $count_act_5 }}"
             style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;">
         </div>
        </div>

        <script>
            document.addEventListener("DOMContentLoaded", () => {
                var datos = document.querySelector("#pieChart")
                var act_1 = Number(datos.getAttribute('data-bs-act_1'))
                var act_2 = Number(datos.getAttribute('data-bs-act_2'))
                var act_3 = Number(datos.getAttribute('data-bs-act_3'))
                var act_4 = Number(datos.getAttribute('data-bs-act_4'))
                var act_5 = Number(datos.getAttribute('data-bs-act_5'))

                var options = {
                    series: [act_1, act_2, act_3, act_4, act_5],
                    chart: {
                        type: 'pie',
                        width: 430,
                        toolbar: {
                            show: true,
                        }
                    },
                    labels: ['Político Ideológico', 'Académico', 'Investigativa', 'Extensión Universitaria', 'Otras'],
                    responsive: [{
                        breakpoint: 680,
                        options: {
                            chart: {
                                width: 2000
                            },
                            legend: {
                                position: 'bottom'
                            }
                        }
                    }],
                };
                var chart = new ApexCharts(datos, options);
                chart.render();
            });
        </script>

    </div>
    </div>

    {{-- Fin Actividades-Tipo de Actividad --}}

    {{-- Inicio Participantes-Tipo-Actividad --}}
    <div class="col-md-6">
        <div class="card card-success">
            <div class="card-header">
                <h3 class="card-title">Participantes-Tipo de Actividad</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="barchart">
                    <div id="barChart"

                    @foreach ($count_part_1 as $uno)
                    @foreach ($count_part_2 as $dos)
                    @foreach ($count_part_3 as $tres)
                    @foreach ($count_part_4 as $cuatro)
                    @foreach ($count_part_4 as $cinco)
                    @endforeach
                    @endforeach
                    @endforeach
                    @endforeach
                    @endforeach

                    data-bs-par_1= "{{ $uno->total }}"  data-bs-par_2= "{{ $dos->total }}"
                    data-bs-par_3= "{{ $tres->total }}" data-bs-par_4= "{{ $cuatro->total }}" data-bs-par_5= "{{ $cinco->total }}"


                    style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></div>
                </div>
            </div>
            <script>
                document.addEventListener("DOMContentLoaded", () => {
                    var datos = document.querySelector("#barChart")
                    var par_1 = Number(datos.getAttribute('data-bs-par_1'))
                    var par_2 = Number(datos.getAttribute('data-bs-par_2'))
                    var par_3 = Number(datos.getAttribute('data-bs-par_3'))
                    var par_4 = Number(datos.getAttribute('data-bs-par_4'))
                    var par_5 = Number(datos.getAttribute('data-bs-par_5'))

                    var options = {
                        series: [{
                        name: 'Participantes',
                        data: [par_1, par_2, par_3, par_4, par_5]

                        }],
                        chart: {
                            type: 'bar',
                            height: 240
                        },
                        plotOptions: {
                            bar: {
                            borderRadius: 4,
                            horizontal: false,
                            vertical: true,
                            }
                        },
                        dataLabels: {
                            enabled: false
                        },
                        xaxis: {
                        categories: ['Académica', 'Investigativa', 'Política-Ideológica', 'Extensión Universitaria', 'Otras'],
                        noData:['Cargango...']
                        }
                    };

                    var chart = new ApexCharts(datos, options);
                    chart.render();
                })
            </script>
        </div>
    </div>

    {{-- Fin Participantes-Tipo-Actividad --}}

    {{-- Inicio Actividades-Anno --}}
    <div class="col-md-6">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Actividades-Año</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <table id="" class="table table-striped shadow-lg w-100">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th>Actividades</th>
                            <th>Años</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($actividades_anno as $actividades)
                        <tr>
                            <td>{{$actividades->actividades}}</td>
                            <td>{{$actividades->anno}}</td>
                        </tr>

                        @endforeach

                    </tbody>

                </table>
                </div>
            </div>

        </div>
    </div>

    {{-- Fin Actividades-Anno --}}


    {{-- Inicio Actividades-Participantes --}}
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Actividades-Participantes</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <table id="actividades_annos" class="table table-striped shadow-lg w-100">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th>Actividad</th>
                            <th>Participantes</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($cant_participantes as $participantes)
                        <tr>
                            <td>{{$participantes->nombre}}</td>
                            <td>{{$participantes->total}}</td>
                        </tr>

                        @endforeach

                    </tbody>

                </table>
            </div>
        </div>
    </div>

    {{-- Fin Actividades-Participantes --}}
</div>
</div>
</section>

