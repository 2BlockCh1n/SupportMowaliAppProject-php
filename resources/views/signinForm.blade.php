@extends('layouts.template')

@section('title')
    Sign In
@endsection

@section('content')
    
    <div class="container bg-info rounded" style="height: 500px; margin-top: 100px; margin-left: 25px; margin-right: 25px;">
        <form class=" "action="authenticationSuccess" method="POST" >
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