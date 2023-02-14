@extends('contacts.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Add new contact</div>
  <div class="card-body">
      
      <form action="{{ url('contact') }}" method="post">
        {!! csrf_field() !!}
        <label>First Name</label></br>
        <input type="text" name="fname" id="fname" class="form-control"></br>
        <label>Middle Name</label></br>
        <input type="text" name="mname" id="mname" class="form-control"></br>
        <label>Last Name</label></br>
        <input type="text" name="lname" id="lname" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="email" id="email" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop