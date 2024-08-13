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
                        <h4>Edit Bus details
                            <a href="{{ url('/buses') }}" class="btn btn-danger float-end">back</a> 
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('buses.update', $bus->id) }}" method="POST"> 
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                            <label>Bus Title</label>
                            <input type="text" name="title" class="form-control" value="{{$bus->title}}"/>
                            @error('title') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label>Registration No</label>
                            <input type="text" name="regNo" class="form-control" value="{{$bus->regNo}}"/>
                            @error('regNo') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="dName">Driver Name</label>
                            <select id="dName" name="dName" class="form-select">
                            @foreach ($drivers as $driver)
                            <option value="{{ $driver->dName }}" 
                                {{ $driver->dName == $bus->dName ? 'selected' : '' }}>{{ $driver->dName }}
                            </option>
                            @endforeach
                            </select>
                            @error('dName') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label>Insuarance Id</label>
                            <input type="text" name="insurance_id" class="form-control" value="{{$bus->insurance_id}}"/>
                            @error('insurance_id') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label>Validity Upto</label>
                            <input type="date" name="validity" class="form-control" value="{{$bus->validity}}"/>
                            @error('validity') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label>Incharge</label>
                            <input type="text" name="incharge" class="form-control" value="{{$bus->incharge}}"/>
                            @error('incharge') <span class="text-danger">{{$message}}</span> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="RTitle">Route Details</label>
                            <select id="RTitle" name="RTitle" class="form-select">
                                @foreach ($roads as $road)
                                <option value="{{ $road->RTitle }}" 
                                    {{ $road->RTitle == $bus->RTitle ? 'selected' : '' }}> {{ $road->RTitle }}
                                </option>
                                @endforeach
                            </select>
                            @error('RTitle') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                       
                        <div class="mb-3">
                        <button type="submit" class="btn btn-outline-primary"><b>Save</b></button>
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