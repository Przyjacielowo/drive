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
                            <div class="file-input">
                                <input type="file" id="file" class="file" style="opacity: 0; width: 0.1px; height: 0.1px; position: absolute;" multiple>
                                <label for="file" style="display: block; width: 200px; height: 50px; border-radius: 25px; background: linear-gradient(40deg,#ff6ec4,#7873f5); box-shadow: 0 4px 7px rgba(0, 0, 0, 0.4); display: flex; align-items: center; justify-content: center; color: #fff; font-weight: bold; cursor: pointer; transition: transform .2s ease-out;">
                                    Wybierz plik
                                    
                                </label>
                                <p class="file-name" style="font-size: 0.85rem; color: #555;"></p>
                            </div>
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
        const file = document.querySelector('#file');
        file.addEventListener('change', (e) => {
        // Get the selected file
        const [file] = e.target.files;
        // Get the file name and size
        const { name: fileName, size } = file;
        // Convert size in bytes to kilo bytes
        const fileSize = (size / 1000).toFixed(2);
        // Set the text content
        const fileNameAndSize = `${fileName} - ${fileSize}KB`;
        document.querySelector('.file-name').textContent = fileNameAndSize;
        });
    </script>   
@endsection
