@extends('layouts.template')

@section('title')
    Sign In
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="container col-sm-10 bg-info rounded" style="height: 400px; margin-top: 40px;">
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
        <div class="col-sm-1"></div>
    </div>

@endsection