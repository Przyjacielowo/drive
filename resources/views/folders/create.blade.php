@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="col-md-8">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Dodaj folder</h3>
                </div>

                <form>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="catalog_name">Nazwa folderu</label>
                            <input type="text" class="form-control" id="catalog_name" name="catalog_name">
                        </div>
                        <div class="form-group">
                            <label for="form-control">Opis</label>
                            <textarea class="form-control" rows="3" name="catalog_description"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="file_upload_input">Pliki wejściowe</label>
                            <input class="file_upload_input" type="file" name="file[]" id="file" multiple accept="image/*">
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
