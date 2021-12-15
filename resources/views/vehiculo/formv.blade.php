    
    <h1>{{ $modo }} vehiculo</h1>

    @if(count($errors)>0)

        <div class="alert alert-danger" role="alert">

            <ul>
                @foreach ($errors->all() as $error)
                   <li>{{ $error }}</li> 
                @endforeach
            </ul>    
            
        </div>
       

    @endif

    <div class="form-group">

        <label for="Matricula"> Matricula </label>
        <input type="text" class="form-control" name="Matricula"
        value="{{ isset($vehiculo->Matricula)?$vehiculo->Matricula:old('Matricula')}}" id="Matricula">
        <br>

    </div>

    <div class="form-group">
        <label for="Marca"> Marca </label>
        <input type="text" class="form-control" name="Marca" 
        value="{{ isset($vehiculo->Marca)?$vehiculo->Marca:old('Marca')}}" id="Marca">
        <br>
    </div>

    <div class="form-group">
        <label for="Categoria"> Categoria </label>
        <input type="text" class="form-control" name="Categoria" 
        value="{{ isset($vehiculo->Categoria)?$vehiculo->Categoria:old('Categoria') }}" id="Categoria">
        <br>
    </div>

    <div class="form-group">
        <label for="Proveedor">Proveedor</label>
        <input type="text" class="form-control" name="Proveedor" 
        value="{{ isset($vehiculo->Proveedor)?$vehiculo->Proveedor:old('Proveedor') }}" id="Proveedor">
        <br>
    </div>

    <div class="form-group">
        <label for="Foto"></label>
        @if(isset($vehiculo->Foto))
        <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$vehiculo->Foto }}" width="100" alt="">
        @endif
        <input type="file" class="form-control"  name="Foto" value="" id="Foto">
    <br>
    </div>

    <input class="btn btn-success" type="submit" value="{{ $modo }} datos">

    <a class="btn btn-primary" href="{{ url('vehiculo/') }}">Regresar </a>

    <br>