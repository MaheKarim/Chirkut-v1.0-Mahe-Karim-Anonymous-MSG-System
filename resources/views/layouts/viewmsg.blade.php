
             

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

                <div class="card-header text-center">
                
                &#8595  চিরকুট  &#8595;  
                </div>

                <div class="card-body text-center">
                   
                <form class="form" action="{{ url('/dataInsert') }}" method="POST"> 
                
                @csrf
                <label for="">Send Chirkut</label>
                <input class="form-control" type="text" name="send_msg">
               
                <br> 
                <button class="btn btn-success" type="submit" > সেন্ড করুন  </button>
                </form>
                 

               


                </div>
            </div>
        </div>
    </div>

    <br> <br> <br> <br> <br>  
 <footer class="text-center">
   <b> * Send MSG Anonymously  To  MAHE KARIM  <br>
_____________________________________________________
<br>
    * MAHE@MAHEKARIM.COM


    </b>

 </footer>

</div>
@endsection
 