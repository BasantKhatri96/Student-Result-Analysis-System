@extends('layouts.app')

@section('content')

@auth

  <div class="mb-3 d-flex">
    <a class="btn btn-primary mr-3" href="{{ route('FirstSemEnglish.create')}}">CREATE</a>
 
    <form action="{{route('FirstSemEnglish.deleteall')}}" method="post">
      @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-success">Delete All Records</button>
    </form>
  </div>



@endauth
          
            
          

              <div class="card card-default">
                <div class="card-header">
                    <h4>1 <sup>st</sup> SEM English | @if ($firstsemenglish->count() <= 0)
                      <span> No Data  <span>
                   @else
                   <strong>{{ $firstsemenglish->count() }} Datas Found<strong>
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
                              @foreach($firstsemenglish as $firstsemenglish)
                                <tr>
                                    <td>{{$firstsemenglish->id}}</td>
                                    <td>{{$firstsemenglish->Student_name}}</td>
                                    <td>{{$firstsemenglish->Reg_No}}</td>
                                    <td>{{$firstsemenglish->U1}}
                                    @if($firstsemenglish->U1 >= 10)
                                  
                                        <span class="badge bg-primary">Passed</span>
                                    @else
                                    <span class="badge bg-success">Failed</span>
                                  </td>
                                    @endif
                                    <td>{{$firstsemenglish->IA1}}
                                      @if($firstsemenglish->IA1 >= 10)
                                  
                                      <span class="badge bg-primary">Passed</span>
                                  @else
                                  <span class="badge bg-success">Failed</span>
                                </td>
                                  @endif
                                    </td>
                                    <td>{{$firstsemenglish->U2}}
                                      @if($firstsemenglish->U2 >= 10)
                                  
                                      <span class="badge bg-primary">Passed</span>
                                  @else
                                  <span class="badge bg-success">Failed</span>
                                 </td>
                                  @endif
                                  </td>
                                    <td>{{$firstsemenglish->IA2}}
                                      @if($firstsemenglish->IA2 >= 10)
                                  
                                      <span class="badge bg-primary">Passed</span>
                                  @else
                                  <span class="badge bg-success">Failed</span>
                                 </td>
                                  @endif
                                    </td>
                                    <td>{{ $firstsemenglish->U1 + $firstsemenglish->U2 + $firstsemenglish->IA1 + $firstsemenglish->IA2 }}</td>

                                    
                                    @auth
                                    <td class="d-flex"><a class="btn btn-primary mr-2" href="{{ route('FirstSemEnglish.edit',$firstsemenglish->id)}}">Edit</a>
                                    
                                      <form action="{{route('FirstSemEnglish.destroy',$firstsemenglish->id)}}" method="post">
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