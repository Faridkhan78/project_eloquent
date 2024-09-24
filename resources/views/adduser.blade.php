@extends('layout')

@section('title')
  Add new  Users 
@endsection

@section('content')
<form action="{{route('user.store')}}" method="post">
    @csrf
    <div class="mb-3">
        <label for="username" class="form-label">User Name</label>
        <input type="text" class="form-control"  name="username">
    </div>
    <div class="mb-3">
        <label for="useremail" class="form-label">User Email</label>
        <input type="email" class="form-control"  name="useremail">
    </div>
    <div class="mb-3">
        <label for="userage" class="form-label">Age</label>
        <input type="number" class="form-control"  name="userage">
    </div>
      
    <div class="mb-3">
        <label for="usercity" class="form-label">UserCity</label>
        <input type="text" class="form-control"  name="usercity">
    </div>
    
    
    <button type="submit" class="btn btn-primary">save</button>
 
</form>

@endsection