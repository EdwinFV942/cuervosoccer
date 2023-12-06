@extends('layout.app')
@section('title', 'Perfil')
@section('titles')
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active">Crear jugador</li>
@stop
@section('content')
    <section class="table">
        <div class="container">
            <div class="row shadow-lg p-3 mb-5 bg-white rounded">
                <table class="display" id="example" style="overflow-x:auto;">
                    <a href="{{route('jugadoresCreate')}}" class="btn btn-success">Crear Jugador</a>
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Jugador</th>
                            <th scope="col">Equipo</th>
                            <th scope="col">Operaciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        ?>
                        @foreach ($jugadores as $jugador)
                            <tr>
                                <th scope="row">{{ $i++ }}</th>
                                <th>{{ $jugador->nombre }}</th>
                                <td>{{ $jugador->equipo->nombre }}</td>
                                <td>
                                    <a href="" class="btn btn-primary"><i class="bi bi-eye"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
