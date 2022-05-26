@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="col-md-8">
            <button type="button" class="btn btn-primary pull-right">Dodaj</button>
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Foldery</h3>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nazwa</th>
                            <th scope="col">Opis</th>
                            <th scope="col">Ilość zdjęć</th>
                            <th scope="col">Opcje</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($folders as $folder)
                            <tr>
                                <th scope="row">{{ $folder->id }}</th>
                                <td>{{ $folder->name }}</td>
                                <td>{{ $folder->description }}</td>
                                <td>{{ $folder->count }}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-primary btn-group-sm">Zobacz</button>
                                        <button type="button" class="btn btn-success btn-group-sm">Edytuj</button>
                                        <button type="button" class="btn btn-danger btn-group-sm">Usuń</button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        {{ $folders->links() }}
    </div>
@endsection
