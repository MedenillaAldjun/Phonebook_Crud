@extends('contacts.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Edit Contact</div>
  <div class="card-body">
      
      <form action="{{ url('contact/' .$contacts->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$contacts->id}}" id="id" />

        <label>First Name</label></br>
        <input type="text" name="fname" id="fname" value="{{$contacts->fname}}" class="form-control"></br>
        <label>Middle Name</label></br>
        <input type="text" name="mname" id="mname" value="{{$contacts->mname}}" class="form-control"></br>
        <label>Last Name</label></br>
        <input type="text" name="lname" id="lname" value="{{$contacts->lname}}" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="email" id="email" value="{{$contacts->email}}" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" value="{{$contacts->mobile}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop