@extends('layout')

@section('title')
  Update  Users Data 
@endsection

@section('content')
<form action="{{route('user.update',$users->id)}}" method="post">
    @csrf
    @method('PUT')
    {{-- <pre>
        @php
            print_r($errors->all());
        @endphp
    </pre> --}}
    <div class="mb-3">
        <label for="username" class="form-label"><b>User Name</b></label>
        <input type="text" class="form-control" value="{{$users->name}}" name="username">
    </div>
    <div class="mb-3">
        <label for="useremail" class="form-label"><b>User Email</b></label>
        <input type="email" class="form-control" value="{{$users->email}}"  name="useremail">
    </div>
    <div class="mb-3">
        <label for="userage" class="form-label"><b>Age</b></label>
        <input type="number" class="form-control" value="{{$users->age}}"  name="userage">
    </div>
      
    <div class="mb-3">
        <label for="usercity" class="form-label"><b>UserCity</b></label>
        <input type="text" class="form-control" value="{{$users->city}}"  name="usercity">
    </div>
    
    
    <button type="submit" class="btn btn-primary">Save</button>
 
</form>

@endsection