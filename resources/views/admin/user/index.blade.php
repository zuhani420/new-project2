@extends('admin.master')

@section('title')
    Add User Page
@endsection

@section('body')
    <div class="row">
        <div class="card mb-3">
            <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                <h6 class="mb-0 fw-bold ">Add User Form</h6>
            </div>
            <div class="card-body">
                <h4 class="text-center text-success">{{session('message')}}</h4>
                <form action="{{route('user.new-user')}}" method="POST">
                    @csrf
                    <div class="row g-3 align-items-center">
                        <div class="col-md-12">
                            <label class="form-label">User Name</label>
                            <input type="text" class="form-control" required name="name"/>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label">User Email</label>
                            <input type="email" class="form-control" required name="email"/>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label">User Password</label>
                            <input type="password" class="form-control" required name="password"/>
                        </div>

                        <div class="col-md-12">
                            <select class="form-control" name="user_type">
                                <option value=""> -- Select User Type -- </option>
                                <option value="1"> -- Super Admin -- </option>
                                <option value="2"> -- Admin -- </option>
                                <option value="3"> -- Executive -- </option>
                            </select>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary mt-4">Create New User</button>
                </form>
            </div>
        </div>
    </div>
@endsection
