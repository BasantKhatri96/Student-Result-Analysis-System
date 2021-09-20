@extends('layouts.app')

@section('content')

@auth

  <div class="mb-3 d-flex">
    <a class="btn btn-primary mr-3" href="{{ route('FirstSemDigitalElectronic.create')}}">CREATE</a>
 
    <form action="#" method="post">
      @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-success">Delete All Records</button>
    </form>
  </div>



@endauth
      

                <div class="card card-default">
                  <div class="card-header">
                      <h4>1 <sup>st</sup> SEM Digital Electronics | @if ($firstsemdigitalelectronic->count() <= 0)
                        <span> No Data  <span>
                     @else
                     <strong>{{ $firstsemdigitalelectronic->count() }} Datas Found<strong>
                     @endif </h4>
                      
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

                                    @foreach($firstsemdigitalelectronic as $firstsemdigitalelectronic)
                                <tr>
                                    <td>{{$firstsemdigitalelectronic->id}}</td>
                                    <td>{{$firstsemdigitalelectronic->Student_name}}</td>
                                    <td>{{$firstsemdigitalelectronic->Reg_No}}</td>
                                    <td>{{$firstsemdigitalelectronic->U1}}
                                    @if($firstsemdigitalelectronic->U1 >= 10)
                                  
                                        <span class="badge bg-primary">Passed</span>
                                    @else
                                    <span class="badge bg-success">Failed</span>
                                  </td>
                                    @endif
                                    <td>{{$firstsemdigitalelectronic->IA1}}
                                      @if($firstsemdigitalelectronic->IA1 >= 10)
                                  
                                      <span class="badge bg-primary">Passed</span>
                                  @else
                                  <span class="badge bg-success">Failed</span>
                                </td>
                                  @endif
                                    </td>
                                    <td>{{$firstsemdigitalelectronic->U2}}
                                      @if($firstsemdigitalelectronic->U2 >= 10)
                                  
                                      <span class="badge bg-primary">Passed</span>
                                  @else
                                  <span class="badge bg-success">Failed</span>
                                 </td>
                                  @endif
                                  </td>
                                    <td>{{$firstsemdigitalelectronic->IA2}}
                                      @if($firstsemdigitalelectronic->IA2 >= 10)
                                  
                                      <span class="badge bg-primary">Passed</span>
                                  @else
                                  <span class="badge bg-success">Failed</span>
                                 </td>
                                  @endif
                                    </td>
                                    <td>{{ $firstsemdigitalelectronic->U1 + $firstsemdigitalelectronic->U2 + $firstsemdigitalelectronic->IA1 + $firstsemdigitalelectronic->IA2 }}</td>




                                    @auth
                                    <td><a class="btn btn-primary btn-sm" href="{{ route('FirstSemDigitalElectronic.edit',$firstsemdigitalelectronic->id)}}">Edit</a></td>
                                    <td>
                                      <form action="{{route('FirstSemDigitalElectronic.destroy',$firstsemdigitalelectronic->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
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


  
                
             