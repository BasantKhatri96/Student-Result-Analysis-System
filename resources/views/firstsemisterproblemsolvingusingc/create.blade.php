@extends('layouts.app')


@section('content')

<div class="page-heading">
  <h3>Create</h3>
</div>
<div class="card card-default">
    <div class="card-header">
        BCA
    </div>
    <div class="card-body">
        
        <form action="{{ route('FirstSemProblemSolvingUsingC.store') }}" method="post">
            @csrf

            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" name="Student_name" id="name" class="form-control" placeholder="Enter Student Name" aria-describedby="helpId">
              
            </div>

            <div class="form-group">
              <label for="register_number">Register Number</label>
              <input type="text" name="Reg_No" id="register_number" class="form-control" placeholder="Enter Register Number" aria-describedby="helpId">
              
            </div>
            <div class="form-group">
              <label for="first_unit_test_mark">First Unit Test</label>
              <input type="text" name="U1" id="first_unit_test_mark" class="form-control" placeholder="Enter Unit Test mark" aria-describedby="helpId">
            </div>

            <div class="form-group">
              <label for="first_internal_assessment">First Internal Assessment</label>
              <input type="text" name="IA1" id="first_internal_assessment" class="form-control" placeholder="" aria-describedby="helpId">
              <span>Enter 0 if First Internal Assessment not conducted</span>
            </div>

            <div class="form-group">
                <label for="second_unit_test_mark">Second Unit Test</label>
                <input type="text" name="U2" id="second_unit_test_mark" class="form-control" placeholder="Enter Second Unit Test mark" aria-describedby="helpId">
                <span>Enter 0 if Second Unit Test not conducted</span>
              </div>

              <div class="form-group">
                <label for="first_internal_assessment">First Internal Assessment</label>
                <input type="text" name="IA2" id="first_internal_assessment" class="form-control" placeholder="" aria-describedby="helpId">
                <span>Enter 0 if SFirst Internal Assessment not conducted</span>
              </div>

              <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
        </form>
        
          
    </div>
</div>
    
@endsection