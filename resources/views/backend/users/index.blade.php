@extends('backend.master')

@section('content')
@if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif
    <div class="container">
        <div class="card shadow">
            <div class="card-header">

                <div class="row">
                    <div class="col-6">
                        <form  action="{{ route('users.index')}}"  method="GET">
                            <input type="text" name="cat_name" />
                            <button type="submit"></button>
                        </form>
                    </div>
                    <div class="col-6">
                        User List
                        


                    </div>
                </div>



            </div>




            <div class="card-body p-3">
                <table class="table table-sm table-bordered ">
                    <tr>
                        <th class="text-center">Ser No</th>
                        <th class="text-center">Name</th>
                        <th>Email</th>
                        <th class="text-center">Permission</th>
                    </tr>
                   <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td class="text-center">{{ ++$serNo }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <a href="" class="btn btn-sm btn-info">User</a>
                                <a  href="" class="btn btn-sm btn-warning">Editor</a>
                                <a  href="" class="btn btn-sm btn-warning">Admin</a>
                                
                            </td>
                        </tr>
                    @endforeach
                   </tbody>
                </table>

                

            </div>
        </div>
    </div>
@endsection
