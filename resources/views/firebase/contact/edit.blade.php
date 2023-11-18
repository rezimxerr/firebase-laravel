@extends('firebase.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4>Edit Contact
                        <a href="{{url('contacts')}}" class="btn btn-sm btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{url('update-contact/'.$key)}}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="">First Name</label>
                            <input type="text" name="first_name" class="form-control" value="{{$editdata['fname']}}">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Last Name</label>
                            <input type="text" name="last_name" class="form-control" value="{{$editdata['lname']}}">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Phone Number</label>
                            <input type="text" name="phone" class="form-control" value="{{$editdata['phone']}}">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Email Address</label>
                            <input type="text" name="email" class="form-control" value="{{$editdata['email']}}">
                        </div>

                        <div class="form-group mb-3">
                            <button class="btn btn-primary" type="submit">Update</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection