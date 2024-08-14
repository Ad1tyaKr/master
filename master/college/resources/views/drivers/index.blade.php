@extends('layout')
@section('content')

        <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Driver Details</h4>
            <a href="{{ url('/drivers/create') }}" class="btn btn-outline-success btn-sm" title="Add new driver">
                <i class="fa fa-plus" aria-hidden="true"></i><b>Add New Driver</b>
            </a>
        </div>
            <br>
            <div class="card-body">
               
                <div class="table-responsive">
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Driver Name</th>
                                <th>Id Proof</th>
                                <th>Id No</th>
                                <th>Upload</th>
                                <th>Phone No</th>
                                <th>Email</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach($drivers as $driver)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$driver->dName}}</td>
                                <td>{{$driver->Idproof}}</td>
                                <td>{{$driver->dId}}</td>
                            <td> @if($driver->upload)
                                <a href="{{ asset('storage/images/' . $driver->upload) }}" target="_blank">View ID</a>
                                @else
                                No Image
                                @endif
                            </td> 
                                <td>{{$driver->DphoneNo}}</td>
                                <td>{{$driver->Demail}}</td>
                               
                                <td>
                                <a href="{{ route('drivers.edit', $driver->id) }}" class="btn btn-primary btn-sm">
                                    <b>Edit</b>
                                </a>
            
                                       
                                        <form action="{{url('/drivers', $driver->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('Delete')
                                            <button type="submit" class="btn btn-danger btn-sm"><b>Delete</b></button>

                                        </form>
                                    </td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                        

                    </table>
                    
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection
