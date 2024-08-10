@extends('layout')
@section('content')

        <div class="card">
            <div class="card-header">
                <h2></h2>
            </div>
            <div class="card-body">
                <a href="{{url('/drivers/create')}}" class="btn btn-success btn-sm" title="add new student">
                <i class="fa fa-plus" aria-hidden="true"></i>Add New Driver
                </a>
                <br>
                <br>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Driver Name</th>
                                <th>Id No</th>
                                <th>Id Proof</th>
                                <th>Phone No</th>
                                <th>Email</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($drivers as $detail)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$detail->dName}}</td>
                                <td>{{$detail->dId}}</td>
                                <td>{{$detail->Idproof}}</td>
                                <td>{{$detail->DphoneNo}}</td>
                                <td>{{$detail->Demail}}</td>
                               
                                <td>
                                <a href="{{ route('drivers.edit', $detail->id) }}" class="btn btn-outline-success">
                                    <b>Edit</b>
                                </a>
            
                                       
                                        <form action="{{url('/drivers', $detail->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('Delete')
                                            <button type="submit" class="btn btn-danger"><b>Delete</b></button>

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
