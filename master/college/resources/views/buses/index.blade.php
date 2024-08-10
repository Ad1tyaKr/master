@extends('layout')
@section('content')

        <div class="card">
            <div class="card-header">
                <h2></h2>
            </div>
            <div class="card-body">
                <a href="{{url('/buses/create')}}" class="btn btn-success btn-sm" title="add new bus">
                <i class="fa fa-plus" aria-hidden="true"></i>Add New Bus
                </a>
                <br>
                <br>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Bus Title</th>
                                <th>Registration No</th>
                                <th>Driver Id</th>
                                <th>Insuarance Id</th>
                                <th>Validity Upto</th>
                                <th>Incharge</th>
                                <th>Route Details</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($buses as $value)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$value->title}}</td>
                                <td>{{$value->regNo}}</td>
                                <td>{{$value->driver_id}}</td>
                                <td>{{$value->insurance_id}}</td>
                                <td>{{$value->validity}}</td>
                                <td>{{$value->incharge}}</td>
                                <td>{{$value->road_id}}</td>
                                <td>
                                <a href="{{ route('buses.edit', $value->id) }}" class="btn btn-outline-success">
                                    <b>Edit</b>
                                </a>
            
                                       
                                        <form action="{{url('/buses', $value->id) }}" method="POST" class="d-inline">
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
