@extends('layout')    

    @section('body')
    <!-- inner banner -->
    <div class="inner-banner-w3ls d-flex flex-column justify-content-center align-items-center">
    </div>
    <!-- //inner banner -->
    <!-- breadcrumbs -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb d-flex justify-content-center">
            <li class="breadcrumb-item">
                <a href="index.html" class="m-0">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Login</li>
        </ol>
    </nav>
    <!-- //breadcrumbs -->
	<!---728x90--->

    <!-- login  -->
    <div class="modal-body align-w3">
        <form action="#" method="post" class="p-sm-3">
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Username</label>
                <input type="text" class="form-control" placeholder="your name" name="Name" id="recipient-name"
                    required="">
            </div>
            <div class="form-group">
                <label for="password" class="col-form-label">Password</label>
                <input type="password" class="form-control" placeholder="*****" name="Password" id="password" required="">
            </div>
            <div class="right-w3l">
                <input type="submit" class="form-control bg-theme" value="Login">
            </div>
            <div class="row sub-w3l my-3">
                <div class="col-sm-6 sub-w3layouts_hub">
                    <input type="checkbox" id="brand1" value="">
                    <label for="brand1" class="text-secondary">
                        <span></span>Remember me?</label>
                </div>
                <div class="col-sm-6 forgot-w3l text-sm-right">
                    <a href="#" class="text-secondary">Forgot Password?</a>
                </div>
            </div>
            <p class="text-center dont-do text-secondary">Don't have an account?
                <a href="register.html" class="text-theme-2 font-weight-bold">
                    Register Now</a>
            </p>
        </form>
    </div>
    <!-- //login -->
    @endsection