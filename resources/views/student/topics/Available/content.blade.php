 @extends('student/topics/available/header')

 @section('home')
 <div class="page-header row no-gutters py-4" style="margin-left: 10px">
     <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
         <span class="text-uppercase page-subtitle">Overview</span>
         <h3 class="page-title">Available Topics</h3>
     </div>
 </div>
 <div class="container">
     <div class="row justify-content-lg-center justify-content-sm-center justify-content-md-center" id="page">
         @include('student/topics/available/page')
     </div>
 </div>
 @csrf
 @endsection
