 @extends('student/ParentLayout/header')

@section('home')
     <!-- <%if(user==null){%> -->
          <div class="container-fluid">
             <div class="row justify-content-lg-center justify-content-md-center justify-content-sm-center">
               <div class="col-md-12 col-sm-12 col-lg-12">
                 <div class="card card-small mb-4 mt-5 pt-3">
                   <div class="card-header border-bottom text-center">
                      <h3 class="page-title" style="margin-bottom: 50px">YOU HAVE NOTHING TO DOWNLOAD</h3>
                      <div>
                        <button class="btn btn-accent goHome" id="create">Go Home</button>  
                      </div>
                   </div>
                 </div>
               </div>
             </div> 
                  <!-- <%}else{%> -->
             <div class="row justify-content-lg-center justify-content-md-center justify-content-sm-center">
             <div class="col-md-12 col-sm-12 col-lg-12">
               <div class="card card-small mb-4">
                 <div class="card-header border-bottom">
                   <h6 class="m-0">Active Users</h6>
                 </div>
                 <div class="card-body p-0 pb-3 text-center">
                   <table class="table mb-0 table-sm table-hover table-borderless">
                     <thead class="bg-light">
                       <tr>
                         <th scope="col" class="border-0">#</th>
                         <th scope="col" class="border-0">File Name</th>
                         <th scope="col" class="border-0">Action</th>
                       </tr>
                     </thead>
                     <tbody>
                    <!-- <%for(var i = 0; i < user.length; i++){%> -->
                       <tr>
                         <td>Demo<!-- <%=user[i].file_id%> --></td>
                         <td>Demo<!-- <%=user[i].fileName%> --></td>
                         <td>
                           <button class="btn btn-primary btn-sm" value="<%=user[i].fileName%>" onclick="download(this.value)"><i class="fas fa-eye" style="margin-right: 5px;margin-left: -5px"></i>Download</button>
                         </td>
                      </tr>
                    <!-- <%}%> -->
                  <!-- <%}%> -->
                     </tbody>
                   </table>
                </div>
             </div>
          </div>
        </div>
@endsection