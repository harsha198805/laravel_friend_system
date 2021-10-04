@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                                      <div class="card-header bg-info">
                        My Friend List
                        <a href="{{route('invite')}}"    class="btn btn-success float-right ">Invite new</a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$user->fname}}</td>
                                <td>{{$user->email}}</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
						{{$users->links("pagination::bootstrap-4")}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
