@extends('layouts.app')

@section('content')

<h1 class ='text-center'><b>My Sales</b></h1>
<div class="container d-flex align-items-center justify-content-center mt-5">
<div class="card" style="width: 18rem;">
     <div class="card-body">
        <h5 class="card-title text-center"><b>Units</b></h5>
         <p class="card-text">Do you want to continue click start.</p>
         <a href="/units" class="btn btn-primary">Start</a>
      </div>
    </div>
 <div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title text-center"><b>Categories</b></h5>
        <p class="card-text">Do you want to continue click start.</p>
        <a href="/categories" class="btn btn-primary">Start</a>
      </div>
     </div>
 <div class="card" style="width: 18rem;">
   <div class="card-body">
       <h5 class="card-title text-center"><b>Merchandices</b></h5>
       <p class="card-text">Do you want to continue click start.</p>
       <a href="/merchandices" class="btn btn-primary">Start</a>
    </div>
</div>
@endsection