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
                            <div class="file-upload">
                                <input class="file-upload__input" type="file" name="myFile[]" id="myFile" style="display: none;" multiple>
                                <button class="file-upload__button" type="button" style="-webkit-appearance: none; background: #009879; border: 2px solid #00745d; border-radius: 4px; outline: none; padding: 0.5em 0.8em; margin-right: 15px; color: #ffffff  font-size: 1em; cursor: pointer;">Choose File(s)</button>
                                <span class="file-upload__label" sttyle="max-width: 250px; font-size: 0.95em; text-overflow: ellipsis; overflow: hidden; white-space: nowrap;"></span>
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
        Array.prototype.forEach.call(
        document.querySelectorAll(".file-upload__button"),
        function(button) {
            const hiddenInput = button.parentElement.querySelector(
            ".file-upload__input"
            );
            const label = button.parentElement.querySelector(".file-upload__label");
            const defaultLabelText = "No file(s) selected";

            // Set default text for label
            label.textContent = defaultLabelText;
            label.title = defaultLabelText;

            button.addEventListener("click", function() {
            hiddenInput.click();
            });

            hiddenInput.addEventListener("change", function() {
            const filenameList = Array.prototype.map.call(hiddenInput.files, function(
                file
            ) {
                return file.name;
            });

            label.textContent = filenameList.join(", ") || defaultLabelText;
            label.title = label.textContent;
            });
        }
        );
    </script>   
@endsection
