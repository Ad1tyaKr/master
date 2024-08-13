@extends('layout')
@section('content')

        <div class="card">
            <div class="card-header text-center">
                <h4>Bus Details</h4>
                <a href="{{url('/buses/create')}}" class="btn btn-outline-success btn-sm float-start" title="add new bus">
                <i class="fa fa-plus" aria-hidden="true"></i><b>Add New Bus</b>
                </a>
            </div>
            <div class="card-body">
             

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Bus Title</th>
                                <th>Registration No</th>
                                <th>Driver Name</th>
                                <th>Insuarance Id</th>
                                <th>Validity Upto</th>
                                <th>Incharge</th>
                                <th>Route</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($buses as $bus)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$bus->title}}</td>
                                <td>{{$bus->regNo}}</td>
                                <td>{{$bus->dName}}</td>
                                <td>{{$bus->insurance_id}}</td>
                                <td>{{$bus->validity}}</td>
                                <td>{{$bus->incharge}}</td>
                                <td>{{$bus->RTitle}}</td>
                                <td>
                                <a href="{{ route('buses.edit', $bus->id) }}" class="btn btn-outline-primary btn-sm"><b>Edit</b></a>
                            
                                        <form action="{{url('/buses', $bus->id) }}" method="POST" class="d-inline">
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
