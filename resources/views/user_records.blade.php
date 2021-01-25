@extends('app_layout')
@section('title')
    All Users
@stop
@section('content')
<div class="container">
    <div class="dashboard user-data">
        <div class="card">
            <div class="card-header">
                <h3>All Users ({{$users_count}})</h3>
            </div>
            <div class="card-body">
                <table class="table">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Name</th>
                      <th scope="col">Email</th>
                      <th scope="col">Phone</th>
                      <th scope="col">Country</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($users as $user)
                        <tr>
                            <th scope="row">{{$user->id}}</th>
                            <td class="text-capitalize">{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->phone}}</td>
                            <td class="text-capitalize">{{$user->country}}</td>
                        </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
            {{ $users->links() }}
        </div> 
    </div>
</div>
@stop
