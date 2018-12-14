@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">View, Add, Edit, Delete All Web App Variables</div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <table class="table table-stripped">
                    <thead>
                        <th>#</th>
                        <th>Name</th>
                        <th>Value</th>
                        <th>Created_at</th>
                        <th>Last Updated</th>
                        <th></th>
                    </thead>
                    <tbody>
                        @foreach ($variables as $variable)
                            <tr>
                                <th>{{ $variable->id }}</th>
                                <td>{{ $variable->name }}</td>
                                <td>{{ $variable->int_value?$variable->int_value:$variable->string_value }}</td>
                                <td>{{ $variable->created_at }}</td>
                                <td>{{ $variable->updated_at }}</td>
                                <td>
                                    <button value="{{ $variable }}" class="btn btn-block btn-warning editbtn">Edit</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12 justify-content-center text-center align-content-center">
                        <span>Store Variables</span>
                        <div class="container-fluid">
                            <form action="{{ route('admin.store.variable') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" id="name" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="int_value">Integer Value</label>
                                    <input type="text" id="int_value" name="int_value">
                                </div>
                                <div class="form-group">
                                    <label for="string_value">String Value</label>
                                    <input type="text" id="string_value" name="string_value">
                                </div>
                                <button type="submit" class="btn btn-success btn-block">Save</button>
                            </form>
                        </div>
                    </div>
                </div>

                <br><br>

                <div class="row">
                        <div class="col-md-12 text-center">
                            <span>Edit Variable</span>
                            <div class="container-fluid">
                                <form action="{{ route('admin.edit.variable') }}" id="editForm" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" id="edit_name" name="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="int_value">Integer Value</label>
                                        <input type="text" id="edit_int_value" name="int_value">
                                    </div>
                                    <div class="form-group">
                                        <label for="string_value">String Value</label>
                                        <input type="text" id="edit_string_value" name="string_value">
                                    </div>
                                    <button type="submit" class="btn btn-success btn-block">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection