@extends('layout')
@section('content')

        <div class="card">
            <div class="card-header">
                <h2></h2>
            </div>
            <div class="card-body">
                <a href="{{url('/students/create')}}" class="btn btn-success btn-sm" title="add new student">
                <i class="fa fa-plus" aria-hidden="true"></i>Add New Student
                </a>
                <br>
                <br>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Student Id</th>
                                <th>Student Name</th>
                                <th>Branch</th>
                                <th>Phone No</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($students as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->stdId}}</td>
                                <td>{{$item->stdName}}</td>
                                <td>{{$item->branch}}</td>
                                <td>{{$item->phoneNo}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->address}}</td>
                                <td>
                                <a href="{{ route('students.edit', $item->id) }}" class="btn btn-outline-success">
                                    <b>Edit</b>
                                </a>


            
                                       
                                        <form action="{{route('students.destroy', $item->id) }}" method="POST" class="d-inline">
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
