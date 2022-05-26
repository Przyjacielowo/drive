@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
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
                                <td>Option</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        {{ $folders->links() }}
    </div>
@endsection
