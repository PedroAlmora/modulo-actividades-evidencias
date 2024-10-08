@extends('adminlte::page')

@section('template_title')
    Modificar Tribunal Taller
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Modificar Tribunal Taller</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('tribunaltaller.update', $tribunaltaller->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('Modulo_GECE.tribunaltaller.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection