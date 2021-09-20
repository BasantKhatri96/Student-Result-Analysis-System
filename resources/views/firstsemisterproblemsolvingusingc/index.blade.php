@extends('layouts.app')

@section('content')

@auth
<div class="d-grid mb-3">
  <a class="btn btn-primary" href="{{ route('FirstSemProblemSolvingUsingC.create')}}">Create</a>
</div>
@endauth


  @guest
      
  @endguest
    <div class="card card-default">
        <div class="card-header">
            <h4>1 <sup>st</sup> SEM ProblemSolving Using C</h4>
        </div>
        <div class="card-body">
            
    
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">SL/NO</th>
                    <th scope="col">Name</th>
                    <th scope="col">Register No.</th>
                    <th scope="col">U1</th>
                    <th scope="col">IA1</th>
                    <th scope="col">U2</th>
                    <th scope="col">IA2</th>
                    <th scope="col">Total</th>
                    @auth
                    <th scope="col">Actions</th>
                    <th scope="col"></th>
                    @endauth
                    
                  </tr>
                </thead>
                <tbody>

                  @foreach ($firstsemproblemsolvingusingc  as $firstsemproblemsolvingusingc)
                  <tr>
                    <th scope="row">{{$firstsemproblemsolvingusingc->id}}</th>
                    <td>{{$firstsemproblemsolvingusingc->Student_name}}</td>
                    <td>{{$firstsemproblemsolvingusingc->Reg_No}}</td>
                    <td>{{$firstsemproblemsolvingusingc->U1}}</td>
                    <td>{{$firstsemproblemsolvingusingc->IA1}}</td>
                    <td>{{$firstsemproblemsolvingusingc->U2}}</td>
                    <td>{{$firstsemproblemsolvingusingc->IA2}}</td>
                    <td>{{ $firstsemproblemsolvingusingc->U1 + $firstsemproblemsolvingusingc->U2}}</td>

                    @auth
                    <td><a class="btn btn-primary" href="{{ route('FirstSemProblemSolvingUsingC.edit',$firstsemproblemsolvingusingc->id)}}">Edit</a></td>
                    <td>
                      <form action="{{route('FirstSemProblemSolvingUsingC.destroy',$firstsemproblemsolvingusingc->id)}}" method="post">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                      </form>
                    
                    </td>
                    @endauth
                    
                  </tr>
                  @endforeach
                  
                  
                </tbody>
              </table>
        </div>
    </div>
@endsection
{{-- -------- --}}

@extends('layouts.app')

@section('content')

@auth

  <div class="mb-3 d-flex">
    <a class="btn btn-primary mr-3" href="{{ route('FirstSemProblemSolvingUsingC.create')}}">CREATE</a>
 
    <form action="#" method="post">
      @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-success">Delete All Records</button>
    </form>
  </div>



@endauth
          
            
          

              <div class="card card-default">
                <div class="card-header">
                    <h4>1 <sup>st</sup> SEM Indian Language | @if ($firstsemproblemsolvingusingc->count() <= 0)
                      <span> No Data  <span>
                   @else
                   <strong>{{ $firstsemproblemsolvingusingc->count() }} Datas Found<strong>
                   @endif </h4>
                    
                </div>
                <div class="card-body">
                    
                  <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">SL/NO</th>
                            <th scope="col">Name</th>
                            <th scope="col">Reg No.</th>
                            <th scope="col">U1</th>
                            <th scope="col">IA1</th>
                            <th scope="col">U2</th>
                            <th scope="col">IA2</th>
                            <th scope="col">Total</th>
                            @auth
                            <th scope="col">Actions</th>
                            <th scope="col"></th>
                            @endauth
                                </tr>
                            </thead>
                            <tbody>
                              @foreach($firstsemproblemsolvingusingc as $firstsemproblemsolvingusingc)
                                <tr>
                                    <td>{{$firstsemproblemsolvingusingc->id}}</td>
                                    <td>{{$firstsemproblemsolvingusingc->Student_name}}</td>
                                    <td>{{$firstsemproblemsolvingusingc->Reg_No}}</td>
                                    <td>{{$firstsemproblemsolvingusingc->U1}}
                                    @if($firstsemproblemsolvingusingc->U1 >= 10)
                                  
                                        <span class="badge bg-primary">Passed</span>
                                    @else
                                    <span class="badge bg-success">Failed</span>
                                  </td>
                                    @endif
                                    <td>{{$firstsemproblemsolvingusingc->IA1}}
                                      @if($firstsemproblemsolvingusingc->IA1 >= 10)
                                  
                                      <span class="badge bg-primary">Passed</span>
                                  @else
                                  <span class="badge bg-success">Failed</span>
                                </td>
                                  @endif
                                    </td>
                                    <td>{{$firstsemproblemsolvingusingc->U2}}
                                      @if($firstsemproblemsolvingusingc->U2 >= 10)
                                  
                                      <span class="badge bg-primary">Passed</span>
                                  @else
                                  <span class="badge bg-success">Failed</span>
                                 </td>
                                  @endif
                                  </td>
                                    <td>{{$firstsemproblemsolvingusingc->IA2}}
                                      @if($firstsemproblemsolvingusingc->IA2 >= 10)
                                  
                                      <span class="badge bg-primary">Passed</span>
                                  @else
                                  <span class="badge bg-success">Failed</span>
                                 </td>
                                  @endif
                                    </td>
                                    <td>{{ $firstsemproblemsolvingusingc->U1 + $firstsemproblemsolvingusingc->U2 + $firstsemproblemsolvingusingc->IA1 + $firstsemproblemsolvingusingc->IA2 }}</td>

                                    
                                    @auth
                                    <td class="d-flex"><a class="btn btn-primary mr-2" href="{{ route('FirstSemProblemSolvingUsingC.edit',$firstsemproblemsolvingusingc->id)}}">Edit</a>
                                    
                                      <form action="{{route('FirstSemProblemSolvingUsingC.destroy',$firstsemproblemsolvingusingc->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                      </form>
                                    </td>
                                    
                                    @endauth
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                </div>

            
              
        
   

    
@endsection


  
                
             