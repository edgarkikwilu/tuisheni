@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-12 text-center">Permission</div>
        <div class="col-md-8">
            <table class="table">
                <thead>
                    <th>#</th>
                    <th>Name</th>
                    <th>Display Name</th>
                    <th>Description</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($permissions as $permission)
                    <tr>
                        <th>{{ $permission->id }}</th>
                        <td>{{ $permission->name }}</td>
                        <td>{{ $permission->display_name }}</td>
                        <td>{{ $permission->description }}</td>
                        <td><a href="" class="btn btn-block btn-danger">Delete</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-4 justify-content-center">
            <form action="{{ route('admin.addpermission') }}" method="post">
                @csrf
                <input type="text" name="name" placeholder="permission name" class="form-control">
                <input type="text" name="display_name" placeholder="permission display-name" class="form-control">
                <input type="text" name="description" placeholder="permission description" class="form-control">
                <button type="submit" class="btn btn-block btn-success">Add Permission</button>
            </form>
        </div>
    </div>
    <br><br>
    <div class="row">
            <div class="col-md-12 text-center">Roles</div>
        <div class="col-md-8">
            <table class="table">
                <thead>
                    <th>#</th>
                    <th>Name</th>
                    <th>Display Name</th>
                    <th>Description</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($roles as $role)
                    <tr>
                        <th>{{ $role->id }}</th>
                        <td>{{ $role->name }}</td>
                        <td>{{ $role->display_name }}</td>
                        <td>{{ $role->description }}</td>
                        <td><a href="" class="btn btn-block btn-danger">Delete</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-4 justify-content-center">
            <form action="{{ route('admin.addrole') }}" method="post">
                @csrf
                <input type="text" name="name" placeholder="role name" class="form-control">
                <input type="text" name="display_name" placeholder="role display-name" class="form-control">
                <input type="text" name="description" placeholder="role description" class="form-control">
                <select name="permissions" class="form-control" multiple>
                    <option value="">select role's permissions</option>
                    @foreach ($permissions as $permission)
                        <option value="{{ $permission->id }}">{{ $permission->display_name }}</option>
                    @endforeach
                </select>
                <button type="submit" class="btn btn-block btn-success">Add Role</button>
            </form>
        </div>
    </div>
@endsection