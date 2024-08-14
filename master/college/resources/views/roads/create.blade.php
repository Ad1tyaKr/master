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
                        <h4>Add Route Details
                            <a href="{{ url('roads') }}" class="btn btn-close float-end" aria-label="close"></a> 
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('roads.store') }}" method="POST"> 
                            @csrf
                            <div class="mb-3">
                            <label><b>Title</b></label>
                            <input type="text" name="RTitle" class="form-control" />
                            @error('RTitle') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label><b>Pick Up</b></label>
                            <input type="text" name="PickUp" class="form-control" />
                            @error('PickUp') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label><b>Destination</b></label>
                            <input type="text" name="Destination" class="form-control" />
                            @error('Destination') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label><b>Start Time</b></label>
                            <input type="time" name="TimingsS" class="form-control" />
                            @error('TimingsS') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label><b>Reach Time</b></label>
                            <input type="time" name="TimingsE" class="form-control" />
                            @error('TimingsE') <span class="text-danger">{{$message}}</span> @enderror
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