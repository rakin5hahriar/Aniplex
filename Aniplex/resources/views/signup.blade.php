@extends('layouts.main')


@section('main')

<div class="page df aic">
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="card">
                    <div class="card-header">
                        <h4>Sign Up</h4>
                    </div>
                    <div class="card-body">
                        <form action="/signup" method="post">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="password_confirmation">Confirm Password</label>
                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
                            </div>
                            
                            <button type="submit" class="btn btn-primary w-100">Sign Up</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>




<style>
    .page{
        min-height: 100vh;
        display: flex;
        align-items: center;
        background-color: ghostwhite
    }

    
</style>


@endsection