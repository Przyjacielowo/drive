@extends('layouts.app')

@section('content')
    <div class="content-wrapper no-color-content">
        <div class="col-md-10 my-2 d-flex">
            <a type="button" href="{{ route('folders.index') }}" class="btn btn-primary ml-auto">Lista</a>
        </div>
        <div class="col-md-8 mx-auto">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Dodaj folder</h3>
                </div>

                <form action="{{ route('folders.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="folder_name">Nazwa folderu</label>
                            <input type="text" class="form-control" id="folder_name" name="folder_name">
                        </div>
                        <div class="form-group">
                            <label for="form-control">Opis</label>
                            <textarea class="form-control" rows="3" name="folder_description"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="file_upload_input">Pliki wejściowe</label>
                            <input class="file_upload_input" type="file" name="folder_file[]" id="file" multiple accept="image/*">
                            <button class="file_upload_button" type="button">
                                <i class="fa fa-upload"></i>
                                Wybierz pliki
                            </button>
                            <span class="file_upload_label"></span>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Dodaj</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
