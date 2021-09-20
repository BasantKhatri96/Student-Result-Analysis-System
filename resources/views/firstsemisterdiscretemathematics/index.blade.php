
@extends('layouts.app')

@section('content')

@auth

  <div class="mb-3 d-flex">
    <a class="btn btn-primary mr-3" href="{{ route('FirstSemDiscreteMathematics.create')}}">CREATE</a>
 
    <form action="#" method="post">
      @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-success">Delete All Records</button>
    </form>
  </div>



@endauth
          
            
          

              <div class="card card-default">
                <div class="card-header">
                    <h4>1 <sup>st</sup> SEM Discrete Mathematics | @if ($FirstSemDiscreteMathamatic->count() <= 0)
                      <span> No Data  <span>
                   @else
                   <strong>{{ $FirstSemDiscreteMathamatic->count() }} Datas Found<strong>
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
                              @foreach($FirstSemDiscreteMathamatic as $FirstSemDiscreteMathamatic)
                                <tr>
                                    <td>{{$FirstSemDiscreteMathamatic->id}}</td>
                                    <td>{{$FirstSemDiscreteMathamatic->Student_name}}</td>
                                    <td>{{$FirstSemDiscreteMathamatic->Reg_No}}</td>
                                    <td>{{$FirstSemDiscreteMathamatic->U1}}
                                    @if($FirstSemDiscreteMathamatic->U1 >= 10)
                                  
                                        <span class="badge bg-primary">Passed</span>
                                    @else
                                    <span class="badge bg-success">Failed</span>
                                  </td>
                                    @endif
                                    <td>{{$FirstSemDiscreteMathamatic->IA1}}
                                      @if($FirstSemDiscreteMathamatic->IA1 >= 10)
                                  
                                      <span class="badge bg-primary">Passed</span>
                                  @else
                                  <span class="badge bg-success">Failed</span>
                                </td>
                                  @endif
                                    </td>
                                    <td>{{$FirstSemDiscreteMathamatic->U2}}
                                      @if($FirstSemDiscreteMathamatic->U2 >= 10)
                                  
                                      <span class="badge bg-primary">Passed</span>
                                  @else
                                  <span class="badge bg-success">Failed</span>
                                 </td>
                                  @endif
                                  </td>
                                    <td>{{$FirstSemDiscreteMathamatic->IA2}}
                                      @if($FirstSemDiscreteMathamatic->IA2 >= 10)
                                  
                                      <span class="badge bg-primary">Passed</span>
                                  @else
                                  <span class="badge bg-success">Failed</span>
                                 </td>
                                  @endif
                                    </td>
                                    <td>{{ $FirstSemDiscreteMathamatic->U1 + $FirstSemDiscreteMathamatic->U2 + $FirstSemDiscreteMathamatic->IA1 + $FirstSemDiscreteMathamatic->IA2 }}</td>

                                    
                                    @auth
                                    <td class="d-flex"><a class="btn btn-primary mr-2" href="{{ route('FirstSemDiscreteMathematics.edit',$FirstSemDiscreteMathamatic->id)}}">Edit</a>
                                    
                                      <form action="{{route('FirstSemDiscreteMathematics.destroy',$FirstSemDiscreteMathamatic->id)}}" method="post">
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


  
                
             