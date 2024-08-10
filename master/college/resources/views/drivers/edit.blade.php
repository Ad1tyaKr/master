<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Drivers details
                            <a href="{{ url('/drivers') }}" class="btn btn-danger float-end">back</a> 
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('drivers.update', $driver->id) }}" method="POST"> 
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                            <label>Driver Name</label>
                            <input type="text" name="dName" class="form-control" value="{{$driver->dName}}"/>
                            @error('dName') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label>Id No</label>
                            <input type="text" name="dId" class="form-control" value="{{$driver->dId}}"/>
                            @error('dId') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label>Id Proof</label>
                            <select name="Idproof" id="Idproof" class="form-control" value="{{$driver->Idproof}}">
                            <option value="" disabled>Select</option>
        <option value="AadharCard" @selected($driver->Idproof == 'AadharCard')>Aadhar Card</option>
        <option value="PanCard" @selected($driver->Idproof == 'PanCard')>Pan Card</option>
        <option value="Passport" @selected($driver->Idproof == 'Passport')>Passport</option>
        <option value="RationCard" @selected($driver->Idproof == 'RationCard')>Ration Card</option>
        <option value="DrivingLicense" @selected($driver->Idproof == 'DrivingLicense')>Driving License</option>
                            </select>
                            @error('Idproof') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label>Phone No</label>
                            <input type="text" name="DphoneNo" class="form-control" value="{{$driver->DphoneNo}}"/>
                            @error('DphoneNo') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="text" name="Demail" class="form-control" value="{{$driver->Demail}}"/>
                            @error('Demail') <span class="text-danger">{{$message}}</span> @enderror
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>