 @extends('student/ParentLayout/header')

 @section('home')
 <div class="page-header row no-gutters py-4" style="margin-left: 10px">
     <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
         <span class="text-uppercase page-subtitle">Overview</span>
         <h3 class="page-title">Available Topics</h3>
     </div>
 </div>
 <div class="container">
     <div class="row justify-content-center">
         <div class="col-lg-10">
             <div class="card card-small mb-4">
                 <div class="card-body p-0 pb-3 text-center">
                     <table class="table mb-0 table-sm table-hover">
                         <thead class="bg-light">
                            <tr>
                              <td style="width: 5%"></td>
                              <th scope="col" class="border-0">SL</th>
                              <td style="width: 5%"></td>
                              <th scope="col" class="border-0">User ID</th>
                              <th scope="col" class="border-0">Name</th>
                              <th scope="col" class="border-0">Email</th>
                              <th scope="col" class="border-0">Contact</th>
                              <th scope="col" class="border-0">Department</th>
                            </tr>
                         </thead>
                         <tbody>
                             @foreach($group as $key=>$s)
                             <tr>
                                 <td style="width: 5%"></td>
                                 <td style="font-size: 14px">{{++$key}}</td>
                                 <td style="width: 5%"></td>
                                 <td style="font-size: 14px">{{$s->student_id}}</td>
                                 <td style="font-size: 14px">{{$s->student_fname}} {{$s->student_lname}}</td>
                                 <td style="font-size: 14px">{{$s->student_email}}</td>
                                 <td style="font-size: 14px">{{$s->student_contact}}</td>
                                 <td style="font-size: 14px">{{$s->student_dept}}</td>
                             </tr>
                             @endforeach
                         </tbody>
                     </table>
                 </div>
             </div>
         </div>
     </div>
     <div class="row justify-content-center">
            <button class="btn btn-sm btn-danger myResearch">Back</button>
     </div>
 </div>
 
 @endsection
