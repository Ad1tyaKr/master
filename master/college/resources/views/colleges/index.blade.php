@extends('layout')
@section('content')

        <div class="card">
       
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="mb-0">List of PMCoE Colleges Completed Bus Agreement</h4>
                <a href="{{url('/colleges/create')}}" class="btn btn-outline-success btn-sm" title="add new data">
                <i class="fa fa-plus" aria-hidden="true"></i><b>Add New Data</b>
                </a>
            </div>
            <br>
            <div class="card-body">
           
                <div class="table-responsive">
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Division</th>
                                <th>College Name</th>
                                <th>District</th>
                                <th>Principal</th>
                                <th>Contact No.</th>
                                <th>Incharge</th>
                                <th>Contact No.</th>
                                <th>Linked to any Bus</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($colleges as $college)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$college->division}}</td>
                                <td>{{$college->college}}</td>
                                <td>{{$college->district}}</td>
                                <td>{{$college->principal}}</td>
                                <td>{{$college->pNo}}</td>
                                <td>{{$college->director}}</td>
                                <td>{{$college->dNo}}</td>
                                <td>{{ $college->busLink == 1 ? 'Yes':'No' }}</td>
                                <td>
                                <a href="{{ route('colleges.edit', $college->id) }}" class="btn btn-primary btn-sm">
                                    <b>Edit</b>
                                </a>
                                        <form action="{{route('colleges.destroy', $college->id) }}" method="POST" class="d-inline">
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
