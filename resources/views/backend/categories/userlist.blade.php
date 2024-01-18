
@extends('backend.master')

@section('content')

<div class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">User Name</th>
            <th scope="col">Email</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                
              </tr>
                
            @endforeach
          
        </tbody>
      </table>
   
</div>




@endsection
