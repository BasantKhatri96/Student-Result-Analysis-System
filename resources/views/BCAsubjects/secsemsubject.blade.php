@extends('layouts.app')


@section('content')


<div class="page-heading">
    <h3>Subjects</h3>
</div>
<div class="">
    <ul class="list-group ">
   <li class="list-group-item p-2"><h4> <a class="text-decoration-none" href="{{ route('IndianLanguage.index')}}">Indian Language</a></h4></li>
   <li class="list-group-item p-2"><h4><a class="text-decoration-none" href="{{ route('FirstSemEnglish.index')}}">English</a></h4> </li>
   <li class="list-group-item p-2"><h4><a class="text-decoration-none" href="{{ route('FirstSemProblemSolvingUsingC.index')}}">Data Structure</a></h4> </li>
    <li class="list-group-item p-2"><h4><a class="text-decoration-none" href="{{ route('FirstSemDigitalElectronic.index')}}">DBMS</a></h4></li>
    <li class="list-group-item p-2"><h4><a class="text-decoration-none" href="{{ route('FirstSemDiscreteMathematics.index')}}">Numerical and Statistical

        Methods</a></h4></li>
    
    </ul>
</div>



@endsection