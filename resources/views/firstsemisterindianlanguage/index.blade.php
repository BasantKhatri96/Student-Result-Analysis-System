
@extends('layouts.app')

@section('content')

@auth

  <div class="mb-3 d-flex">
    <a class="btn btn-primary mr-3" href="{{ route('IndianLanguage.create')}}">CREATE</a>
 
    <form action="#" method="post">
      @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-success">Delete All Records</button>
    </form>
  </div>



@endauth
          
            
          

              <div class="card card-default">
                <div class="card-header">
                    <h4>1 <sup>st</sup> SEM Indian Language | @if ($firstsemindianlanguage->count() <= 0)
                      <span> No Data  <span>
                   @else
                   <strong>{{ $firstsemindianlanguage->count() }} Datas Found<strong>
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
                              @foreach($firstsemindianlanguage as $firstsemindianlanguage)
                                <tr>
                                    <td>{{$firstsemindianlanguage->id}}</td>
                                    <td>{{$firstsemindianlanguage->Student_name}}</td>
                                    <td>{{$firstsemindianlanguage->Reg_No}}</td>
                                    <td>{{$firstsemindianlanguage->U1}}
                                    @if($firstsemindianlanguage->U1 >= 10)
                                  
                                        <span class="badge bg-primary">Passed</span>
                                    @else
                                    <span class="badge bg-success">Failed</span>
                                  </td>
                                    @endif
                                    <td>{{$firstsemindianlanguage->IA1}}
                                      @if($firstsemindianlanguage->IA1 >= 10)
                                  
                                      <span class="badge bg-primary">Passed</span>
                                  @else
                                  <span class="badge bg-success">Failed</span>
                                </td>
                                  @endif
                                    </td>
                                    <td>{{$firstsemindianlanguage->U2}}
                                      @if($firstsemindianlanguage->U2 >= 10)
                                  
                                      <span class="badge bg-primary">Passed</span>
                                  @else
                                  <span class="badge bg-success">Failed</span>
                                 </td>
                                  @endif
                                  </td>
                                    <td>{{$firstsemindianlanguage->IA2}}
                                      @if($firstsemindianlanguage->IA2 >= 10)
                                  
                                      <span class="badge bg-primary">Passed</span>
                                  @else
                                  <span class="badge bg-success">Failed</span>
                                 </td>
                                  @endif
                                    </td>
                                    <td>{{ $firstsemindianlanguage->U1 + $firstsemindianlanguage->U2 + $firstsemindianlanguage->IA1 + $firstsemindianlanguage->IA2 }}</td>

                                    
                                    @auth
                                    <td class="d-flex"><a class="btn btn-primary mr-2" href="{{ route('IndianLanguage.edit',$firstsemindianlanguage->id)}}">Edit</a>
                                    
                                      <form action="{{route('IndianLanguage.destroy',$firstsemindianlanguage->id)}}" method="post">
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


  
                
             