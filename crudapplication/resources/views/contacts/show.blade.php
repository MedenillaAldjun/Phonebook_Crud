@extends('contacts.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Contact</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">First Name : {{ $contacts->fname }}</h5>
        <h5 class="card-title">Middle Name : {{ $contacts->mname }}</h5>
        <h5 class="card-title">Last Name : {{ $contacts->lname }}</h5>
        <p class="card-text">Email : {{ $contacts->email }}</p>
        <p class="card-text">Phone : {{ $contacts->mobile }}</p>
  </div>
       
    </hr>
  
  </div>
</div>