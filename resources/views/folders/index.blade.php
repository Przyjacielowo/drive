@extends('layouts.app')

@section('content')
    <div class="margin-content-wraper content-wrapper no-color-content">
        <div class="col-md-10 my-2 d-flex">
            <a type="button" href="{{ route('folders.create') }}" class="btn btn-primary ml-auto">Dodaj</a>
        </div>
        <div class="col-md-8 mx-auto">
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
                                        <a href="{{ route('folders.show', $folder->id) }}"><button type="button" class="btn btn-primary">Zobacz</button></a>
                                        <a href="{{ route('folders.edit', $folder->id) }}"><button type="button" class="btn btn-success">Edytuj</button></a>
                                        <form action="{{ route('folders.destroy', $folder->id) }}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Usuń</button>
                                        </form>
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
