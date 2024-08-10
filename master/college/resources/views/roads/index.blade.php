@extends('layout')
@section('content')

        <div class="card">
            <div class="card-header">
                <h2></h2>
            </div>
            <div class="card-body">
                <a href="{{url('/roads/create')}}" class="btn btn-success btn-sm" title="add new student">
                <i class="fa fa-plus" aria-hidden="true"></i>Add New Route
                </a>
                <br>
                <br>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>PickUp</th>
                                <th>Destination</th>
                                <th>Timings</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($roads as $sum)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$sum->Title}}</td>
                                <td>{{$sum->PickUp}}</td>
                                <td>{{$sum->Destination}}</td>
                                <td>{{$sum->Timings}}</td>
                                <td>
                                <a href="{{ route('roads.edit', $sum->id) }}" class="btn btn-outline-success">
                                    <b>Edit</b>
                                </a>


            
                                       
                                        <form action="{{route('roads.destroy', $sum->id) }}" method="POST" class="d-inline">
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
