@extends('layouts.app')


@section('content')
@auth
<div class="">
    <ul class="list-group">
   <li class="list-group-item"> <a href="{{ route('IndianLanguage.index')}}">Indian Language</a></li>

   

   <li class="list-group-item"> <a href="">English</a></li>
   <li class="list-group-item"> <a href="">Data Structure</a></li>
    <li class="list-group-item"><a href="">Database Management System</a></li>
    <li class="list-group-item"><a href="">Numerical and Statistical methods</a></li>
    <li class="list-group-item"><a href="">Data Structure Lab</a></li>
    <li class="list-group-item"><a href="">DBMS Lab</a></li>
    </ul>
</div>
@endauth


@endsection