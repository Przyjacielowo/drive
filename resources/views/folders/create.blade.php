@extends('layouts.app')

@section('content')
    <div class="content-wrapper" style="margin-top: 20px;">
        <div class="col-md-8" style="margin: 0 auto;">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Dodaj folder</h3>
                </div>


                <form>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="catalog_name">Nazwa folderu</label>
                            <input type="email" class="form-control" id="catalog_name">
                        </div>
                        <div class="form-group">
                            <label>Opis</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Plik wejściowy</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFileLang" lang="pl-Pl" multiple>
                                <label class="custom-file-label" for="customFileLang">Wybierz pliki</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="custom-file-upload" style="border: 1px solid #ccc; display: inline-block; padding: 6px 12px; cursor: pointer;">
                                <input type="file" style="display: none;"/>
                                Custom Upload
                            </label>
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