@extends('firebase.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4>Add Contact
                        <a href="{{url('contacts')}}" class="btn btn-sm btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{url('add-contact')}}" method="POST">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="">First Name</label>
                            <input type="text" name="first_name" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Last Name</label>
                            <input type="text" name="last_name" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Phone Number</label>
                            <input type="text" name="phone" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Email Address</label>
                            <input type="text" name="email" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <button class="btn btn-primary" type="submit">save</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection