@yield('content')
<div class="content-wrapper">
    <div class="col-md-6">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Stwórz katalog</h3>
            </div>


            <form>
                <div class="card-body">
                    <div class="form-group">
                        <label for="catalog_name">Nazwa katalogu</label>
                        <input type="email" class="form-control" id="catalog_name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Dodaj</button>
                </div>
            </form>
        </div>
    </div> 
</div>

