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
                                <label for="file" class="input-label" style="background-color: #007bff; color: #fff; padding: 10px; border-radius: 10px;">
                                    <i class="fa fa-upload" style="margin-right: 10px;"></i>
                                    <span id="label_span">Wybierz plik...</span>
                                </label>
                                <input id="file" type="file" style="display:none;" multiple="true">
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
            $('#file').on('change', function(){
                var files = $(this)[0].files;
                if(files.length>=2) {
                    $('#label_span').text(files.length + ' plików')
                } else {
                    var filename = e.target.value.split('\\').pop();
                    $('#label_span').text(filename);
                }
            });
    </script>   
@endsection
