@extends('layout')
@section('content')

        <div class="card">
            <div class="card-header text-center">
                <h4>Student Details</h4>
                <a href="{{url('/students/create')}}" class="btn btn-outline-success btn-sm float-start" title="add new student">
                <i class="fa fa-plus" aria-hidden="true"></i><b>Add New Student</b>
                </a>
            </div>
            <div class="card-body">
                
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
                            @foreach($students as $student)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$student->stdId}}</td>
                                <td>{{$student->stdName}}</td>
                                <td>{{$student->branch}}</td>
                                <td>{{$student->phoneNo}}</td>
                                <td>{{$student->email}}</td>
                                <td>{{$student->address}}</td>
                                <td>
                                <a href="{{ route('students.edit', $student->id) }}" class="btn btn-outline-primary btn-sm">
                                    <b>Edit</b>
                                </a>

                                <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
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
