@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-center align-items-center">
    <div class="col-md-8 col-lg-6 col-xl-4">
      <h2 class="text-center">Login Form</h2>
      @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $item )
                <li>
                    {{$item}}
                </li>
                @endforeach
            </ul>
        </div>
     @endif
 <form action="" method="POST">
 @csrf
 <!-- User input -->
 <div data-mdb-input-init class="form-outline mb-4">
 <label class="form-label">User</label>
 <input type="text" name="fUser" value="{{old('fUser')}}"class="form-control form-control-md"
 placeholder="Username" />
 </div>
 <!-- Password input -->
 <div data-mdb-input-init class="form-outline mb-3">
 <label class="form-label" >Password</label>
 <input type="password" name="fPass" class="form-control form-control-md"
 placeholder="password" />
 </div>
 <div class="text-center text-lg-start mt-4 pt-2">
 <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-md"
 style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
 </div>
 </form>
 </div>
 </div>
 </div>
 </div>
@endsection
