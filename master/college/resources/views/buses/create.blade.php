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
                        <h4>Add New Bus
                            <a href="{{ url('buses') }}" class="btn btn-close float-end" aria-label="close"></a> 
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('buses.store') }}" method="POST"> 
                            @csrf
                            <div class="mb-3">
                            <label><b>Bus Title</b></label>
                            <input type="text" name="title" class="form-control" />
                            @error('title') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label><b>Registration No</b></label>
                            <input type="text" name="regNo" class="form-control" />
                            @error('regNo') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label><b>Driver Name</b></label>
                            <select name="dName" class="form-control">
                                <option selected disabled>Select Driver</option>
                                @foreach($drivers as $driver)
                                <option value="{{ $driver->dName }}">{{ $driver->dName }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label><b>Insurance Id</b></label>
                            <input type="text" name="insurance_id" class="form-control" />
                            @error('insurance_id') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label><b>Validity Upto</b></label>
                            <input type="date" name="validity" class="form-control" />
                            @error('validity') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label><b>Incharge</b></label>
                            <input type="text" name="incharge" class="form-control" />
                            @error('incharge') <span class="text-danger">{{$message}}</span> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="Title"><b>Route</b></label>
                            <select id="RTitle" name="RTitle" class="form-select">
                            <option selected disabled>Select</option>
                                @foreach ($roads as $road)
                                <option value="{{ $road->RTitle }}">{{ $road->RTitle }}</option>
                                @endforeach
                            </select>
                           
                        </div>
                       
                        <div class="mb-3">
                        <button type="submit" class="btn btn-outline-success"><b>Save</b></button>
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