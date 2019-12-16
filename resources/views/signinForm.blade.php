@extends('layouts.template')

@section('title')
    Sign In
@endsection

@section('content')
 
    <form class="container bg-info rounded" action="authenticationSuccess" method="POST" style="height: 300px; padding-top: 100px;">
        <div>
            <h2>Sign In</h2> <hr/>
        </div>

        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" placeholder="your username">
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="your password">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button><hr/><hr/>
    </form>


@endsection