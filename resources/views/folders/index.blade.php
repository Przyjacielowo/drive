@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="col-sm-10 my-2 float-right">
            <button type="button" class="btn btn-primary pull-right">Dodaj</button>
        </div>
        <div class="col-md-8">
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
                                    <div class="btn-group btn-group-sm" role="group">
                                        <button type="button" class="btn btn-primary">Zobacz</button>
                                        <button type="button" class="btn btn-success">Edytuj</button>
                                        <button type="button" class="btn btn-danger">Usuń</button>
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
