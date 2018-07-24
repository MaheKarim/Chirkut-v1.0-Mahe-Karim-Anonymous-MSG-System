
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                See Chirkut
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                   <table class="table table-striped">
                       <tr>
                          <th>ID </th> 
                          <th>Message</th> 
                          <th>Sent Date </th>
                          <th>Delete </th>
                       </tr>

                       @foreach($allviewMSG as $maheKarim)

                       <tr>
                          <td>{{ $maheKarim -> id}}</td> 
                          <td> {{ $maheKarim -> send_msg}}</td> 
                          <td>{{ $maheKarim -> created_at}}</td>

                          <td> 
                           <!-- <a href=""> 
                              
                              <button type="button" class="btn btn-warning">
                                Delete

                              </button> 
                            </a> 
                                    -->
                           <form action="{{originalView.$maheKarim-> id}}"></form>         
                          </td>
                       </tr>

                       @endforeach
                       
                   </table>
                 
                    


                </div>
            </div>
        </div>
    </div>

</div>
@endsection
