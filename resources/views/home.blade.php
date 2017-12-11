@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Formulario</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
                    <section class="content">
                        <form method="get" action="">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">                        
                            <!-- <input type="" name="id"> -->
                            <input class="input_class" type="text" name="matricula" placeholder="Matricula" minlength="7" maxlength="7"><br>
                            <input class="input_class" type="text" name="carrera" placeholder="Carrera"><br>
                            <input class="input_class" type="text" name="motivo" placeholder="Motivo por el cual no puede asistir">
                            <input class="input_class" type="text" name="_method" placeholder="Fecha: dd/mm/aaaa"><br>
                            <!-- de las <input class="input_date" type="text" name="hora1" placeholder="Hora de salida: 00:00am/pm"> a las <input class="input_date" type="text" name="hora2" placeholder="Hora de regreso: 00:00am/pm"><br> -->
                            <input class="input_button" type="submit">
                        </form>

                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
