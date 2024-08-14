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
                        <h4>Add College Details
                            <a href="{{ url('/colleges') }}" class="btn btn-close float-end" aria-label="close"></a> 
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('colleges.update', $college->id) }}" method="POST"> 
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                            <label><b>Division</b></label>
                            <input type="text" name="division" class="form-control" value="{{$college->division}}" />
                            @error('division') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label><b>College Name</b></label>
                            <input type="text" name="college" class="form-control" value="{{$college->college}}"/>
                            @error('college') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label><b>District</b></label>
                            <input type="text" name="district" class="form-control" value="{{$college->district}}"/>
                            @error('district') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label><b>Principal</b></label>
                            <input type="text" name="principal" class="form-control" value="{{$college->principal}}"/>
                            @error('principal') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label><b>Contact No.</b></label>
                            <input type="text" name="pNo" class="form-control" value="{{$college->pNo}}"/>
                            @error('pNo') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label><b>Incharge</b></label>
                            <input type="text" name="director" class="form-control" value="{{$college->director}}"/>
                            @error('director') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label><b>Contact No.</b></label>
                            <input type="text" name="dNo" class="form-control" value="{{$college->dNo}}"/>
                            @error('dNo') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label><b>Linked to any bus?</b></label><br>
                            <input type="checkbox" name="busLink" {{$college->status == 1 ? 'checked':''}} checked style="width:18px;height:18px"/> Checked=yes, unchecked=No
                            @error('busLink') <span class="text-danger">{{$message}}</span> @enderror
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