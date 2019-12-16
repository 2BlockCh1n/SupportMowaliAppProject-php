@extends('layouts.template')

@section('title')
    Sign In
@endsection

@section('content')
    
    <div class="row .bg-info rounded" style="height: 300px; padding-top: 100px; padding-left: 50px; padding-right: 50px;">
        <form action="authenticationSuccess" method="POST" >
            <div>
                <h2>Sign In</h2> <hr/>
            </div>

            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" placeholder="your username">
            </div><hr/><hr/>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="your password">
            </div><hr/><hr/>

            <button type="submit" class="btn btn-primary">Submit</button><hr/><hr/>
        </form>
    </div>


@endsection