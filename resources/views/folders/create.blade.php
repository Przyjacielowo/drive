@extends('layouts.app')

@section('content')
    <div class="content-wrapper" style="margin-top: 20px;">
        <div class="col-md-8" style="margin: 0 auto;">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Dodaj folder</h3>
                </div>

                <form>
                    <div class="card-body" style="padding: 1rem 1rem 0;">
                        <div class="form-group">
                            <label for="catalog_name">Nazwa folderu</label>
                            <input type="email" class="form-control" id="catalog_name">
                        </div>
                        <div class="form-group">
                            <label>Opis</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="file-upload__input">Plik(i) wejściowy(e)</label><br>
                            <input class="file-upload__input" type="file" name="myFile[]" id="myFile" style="display: none;" multiple accept="image/*">
                            <button class="file-upload__button" type="button" style="display: block; -webkit-appearance: none; color: #fff; background-color: #007bff; border-color: #007bff; box-shadow: none; border-radius: 4px; outline: none; padding: 0.375rem 0.75rem; margin-right: 7px; font-size: 1rem; cursor: pointer; font-weight: 400;">
                                <i class="fa fa-upload" style="margin-right: 7px;"></i>
                                Wybierz plik(i)
                            </button>
                            <span class="file-upload__label" style="display: block; margin: 10px 5px 0; font-size: 0.95em; text-overflow: ellipsis; overflow: hidden;"></span>
                        </div>
                    </div>

                    <div class="card-footer" style="padding: 0 1rem 1rem;">
                        <button type="submit" class="btn btn-primary">Dodaj</button>
                    </div>
                </form>

            </div>
        </div> 
    </div>
    <script>
        // Array.prototype.forEach.call(
        //     document.querySelectorAll(".file-upload__button"),
        //     function(button) {
        //         const hiddenInput = button.parentElement.querySelector(
        //         ".file-upload__input"
        //         );
        //         const label = button.parentElement.querySelector(".file-upload__label");
        //         const defaultLabelText = "";

        //         // Set default text for label
        //         label.textContent = defaultLabelText;
        //         label.title = defaultLabelText;

        //         button.addEventListener("click", function() {
        //             hiddenInput.click();
        //         });

        //         hiddenInput.addEventListener("change", function() {
        //         const filenameList = Array.prototype.map.call(hiddenInput.files, function(
        //             file
        //         ) {
        //             return file.name;
        //         });

        //         label.textContent = filenameList.join(", ") || defaultLabelText;
        //         label.title = label.textContent;
        //         });
        //     }
        // );
    </script>   
@endsection
