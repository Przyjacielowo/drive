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
                            <label for="file-input">Plik wejściowy</label>
                        </div>
                        <div class="form-group">
                            <input type="file" id="file-input" style="display: none; background-color: blue; padding: 8px; color: #fff; border: 2px solid #9ec3ff; border-radius: 9px; cursor: pointer;" multiple>
                            <label for="file-input" style="background-color: blue; padding: 8px; color: #fff; border: 2px solid #9ec3ff; border-radius: 9px; cursor: pointer;">
                                <i class="glyphicon glyphicon-open"></i>
                                &nbsp;Wybierz plik...
                            </label>
                            <span>
                                <strong>Wybrany plik:</strong>
                                <span id="file-name">...</span>
                            </span>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Dodaj</button>
                    </div>
                </form>
            </div>
        </div> 
    </div>
    <script>
        let inputFile = document.getElementById('file-input');
        let fileNameField = document.getElementById('file-name');
        inputFile.addEventListener('change', function(event){
            let uploadedFileName = event.target.files[0].name;
            fileNameField.textContent = uploadedFileName;
        })
    </script>   
@endsection
