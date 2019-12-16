@extends('layouts.template')

@section('title')
    Sign In
@endsection

@section('content')
    
    <div class="container rounded form-group" style="height: 300px; padding-top: 100px; padding-left: 50px; padding-right: 50px;">
        <form action="authenticationSuccess" method="POST" >
            <div>
                <h2>Sign In</h2> <hr/>
            </div>

            <div>
                <label for="username">Username</label>
                <input type="text" id="username" placeholder="your username">
            </div><hr/><hr/>

            <div>
                <label for="password">Password</label>
                <input type="password" id="password" placeholder="your password">
            </div><hr/><hr/>

            <button type="submit" class="btn btn-primary">Submit</button><hr/><hr/>
        </form>
    </div>

@endsection