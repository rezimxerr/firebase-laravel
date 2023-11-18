@extends('firebase.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if(session('status'))
            <h4 class="alert alert-warning mb-2">{{session('status')}}</h4>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4>Contact List - Total : {{$total_contact}}
                        <a href="{{url('add-contact')}}" class="btn btn-sm btn-primary float-end">Add Contct</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>FIRST NAME</th>
                                <th>LAST NAME</th>
                                <th>EMAIL</th>
                                <th>PHONE</th>
                                <th>EDIT</th>
                                <th>DELETE</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i=1; @endphp
                            @forelse ($contacts as $key => $item)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$item['fname']}}</td>
                                <td>{{$item['lname']}}</td>
                                <td>{{$item['email']}}</td>
                                <td>{{$item['phone']}}</td>
                                <td>
                                    <a href="{{url('edit-contact/'.$key)}}" class="btn btn-sm btn-success">Edit</a>
                                </td>
                                <td>
                                    <!-- <form action="{{url('edit-contact/'.$key)}}" method = "POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form> -->
                                    <a href="{{url('delete-contact/'.$key)}}" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                            @empty

                            <tr>
                                <td colspan="7">No Record Found</td>
                            </tr>
                            
                            @endforelse
                        </tbody>
                    </table>
                    contact data
                </div>
            </div>
        </div>

    </div>
</div>
@endsection