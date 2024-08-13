@extends('layout')
@section('content')

        <div class="card">
            <div class="card-header text-center">
                <h4>Route Details</h4>
                <a href="{{url('/roads/create')}}" class="btn btn-outline-success btn-sm float-start" title="add new student">
                <i class="fa fa-plus" aria-hidden="true"></i><b>Add New Route</b>
                </a>
            </div>
            <div class="card-body">
               
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>PickUp</th>
                                <th>Destination</th>
                                <th>Timing</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($roads as $road)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$road->RTitle}}</td>
                                <td>{{$road->PickUp}}</td>
                                <td>{{$road->Destination}}</td>
                                <td>{{$road->Timing}}</td>
                                <td>
                                <a href="{{ route('roads.edit', $road->id) }}" class="btn btn-outline-primary btn-sm">
                                    <b>Edit</b>
                                </a>


            
                                       
                                        <form action="{{route('roads.destroy', $road->id) }}" method="POST" class="d-inline">
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
