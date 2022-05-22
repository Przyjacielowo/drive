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
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">zwrot butów.PNG</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="file-upload" class="custom-file-upload" style="border: 1px solid #ccc; display: inline-block; padding: 6px 12px; cursor: pointer; font-weight: 400; width: 100%; border-radius: 5px;">
                                Wybierz plik
                            </label>
                            <input id="file-upload" type="file" style="display: none;" multiple/>
                        </div>
                        <div class="form-group">
                            <input type="file" name="file" id="file" class="inputfile" style="width: 0.1px; height: 0.1px; opacity: 0; overflow: hidden; position: absolute; z-index: -1;"/>
                            <label for="file" style="font-size: 1.25em; font-weight: 700; color: white; background-color: black; display: inline-block; cursor: pointer;">Wybierz plik</label>
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