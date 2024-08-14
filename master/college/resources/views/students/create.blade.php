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
                        <h4>Add Student
                            <a href="{{ url('students') }}" class="btn btn-close float-end" aria-label="close"></a> 
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('students.store') }}" method="POST"> 
                            @csrf
                            <div class="mb-3">
                            <label><b>Student Id</b></label>
                            <input type="text" name="stdId" class="form-control" />
                            @error('stdId') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label><b>Student Name</b></label>
                            <input type="text" name="stdName" class="form-control" />
                            @error('stdName') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label><b>Branch</b></label>
                            <input type="text" name="branch" class="form-control" />
                            @error('branch') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label><b>Phone No</b></label>
                            <input type="text" name="phoneNo" class="form-control" />
                            @error('phoneNo') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label><b>Email</b></label>
                            <input type="text" name="email" class="form-control" />
                            @error('email') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label><b>Address</b></label>
                            <input type="text" name="address" class="form-control" />
                            @error('address') <span class="text-danger">{{$message}}</span> @enderror
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