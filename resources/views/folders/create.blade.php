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
                        
                        <input type="file" name="file" id="file" class="inputfile" data-multiple-caption="{count} files selected" multiple="" style="width: 0.1px; height: 0.1px; opacity: 0; overflow: hidden; position: absolute; z-index: -1; font-size: 1.25em; font-weight: 700;     color: white; background-color: black; display: inline-block; background-color: red; cursor: pointer;"/>
                        <label for="file" style="font-size: 1.25em; font-weight: 700; color: white; background-color: black; display: inline-block; background-color: red; cursor: pointer;">Choose a file</label>
                        <script>
                            var inputs = document.querySelectorAll( '.inputfile' );
                            Array.prototype.forEach.call( inputs, function( input )
                            {
                                var label	 = input.nextElementSibling,
                                    labelVal = label.innerHTML;

                                input.addEventListener( 'change', function( e )
                                {
                                    var fileName = '';
                                    if( this.files && this.files.length > 1 )
                                        fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
                                    else
                                        fileName = e.target.value.split( '\' ).pop();

                                    if( fileName )
                                        label.querySelector( 'span' ).innerHTML = fileName;
                                    else
                                        label.innerHTML = labelVal;
                                });
                            });



                        </script>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Dodaj</button>
                    </div>
                </form>
            </div>
        </div> 
    </div>
@endsection