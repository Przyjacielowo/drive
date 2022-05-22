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
                            <label class="custom-file-upload" style="border: 1px solid #ccc; display: inline-block; padding: 6px 12px; cursor: pointer; font-weight: 400; width: 100%; border-radius: 5px;">
                                <input type="file" style="display: none;" multiple/>
                                Wybierz plik
                            </label>
                        </div>
                        <div class="form-group">
                            <div id="yourBtn" style="height: 50px; width: 100px;border: 1px dashed #BBB; cursor:pointer;" onclick="getFile()">Click to upload!</div>
                            <!-- this is your file input tag, so i hide it!-->
                            <div style='height: 0px;width:0px; overflow:hidden;'><input id="upfile" type="file" value="upload"/></div>
                            <!-- here you can have file submit button or you can write a simple script to upload the file automatically-->
                            <input type="submit" value='submit' >
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