@extends('layouts.app')


@section('content')

<div class="card card-default">
    <div class="card-header">
        BCA
    </div>
    <div class="card-body">
        
        <form action="{{ route('FirstSemEnglish.update', $firstsemenglish->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" name="Student_name" id="name" value="{{ $firstsemenglish->Student_name }}" class="form-control" placeholder="Enter Student Name" aria-describedby="helpId">
              
            </div>

            <div class="form-group">
              <label for="register_number">Register Number</label>
              <input type="text" name="Reg_No" id="register_number"  value="{{ $firstsemenglish->Reg_No }}"  class="form-control" placeholder="Enter Register Number" aria-describedby="helpId">
              
            </div>
            <div class="form-group">
              <label for="first_unit_test_mark">First Unit Test</label>
              <input type="text" name="U1" id="first_unit_test_mark"  value="{{ $firstsemenglish->U1 }}"  class="form-control" placeholder="Enter Unit Test mark" aria-describedby="helpId">
            </div>

            <div class="form-group">
              <label for="first_internal_assessment">First Internal Assessment</label>
              <input type="text" name="IA1" id="first_internal_assessment"  value="{{ $firstsemenglish->IA1 }}"  class="form-control" placeholder="" aria-describedby="helpId">
            </div>

            <div class="form-group">
                <label for="second_unit_test_mark">Second Unit Test</label>
                <input type="text" name="U2" id="second_unit_test_mark"  value="{{ $firstsemenglish->U2 }}"  class="form-control" placeholder="Enter Second Unit Test mark" aria-describedby="helpId">
            </div>

            <div class="form-group">
                <label for="first_internal_assessment">First Internal Assessment</label>
                <input type="text" name="IA2" id="first_internal_assessment"  value="{{ $firstsemenglish->IA2 }}"  class="form-control" placeholder="" aria-describedby="helpId">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>   
    </div>
</div>
    
@endsection