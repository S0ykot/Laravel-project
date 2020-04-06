 @extends('student/ParentLayout/header')

@section('home')
   <div class="page-header row no-gutters py-4" style="margin-left: 10px">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Overview</span>
                <h3 class="page-title">Available Topics</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <!-- Default Light Table -->
            <div class="container">
            <div class="row justify-content-lg-center justify-content-sm-center justify-content-md-center">
              <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="card card-small mb-4">
                  <!-- <div class="card-header border-bottom">
                    <h6 class="m-0">Active Users</h6>
                  </div> -->
                  <div class="card-body p-0 pb-3 text-center">
                    <table class="table mb-0 table-sm table-hover">
                      <thead class="bg-light">
                        <tr>
                          <th scope="col" class="border-0">Name</th>
                          <th scope="col" class="border-0">Domain</th>
                          <th scope="col" class="border-0">Supervisor</th>
                          <th scope="col" class="border-0">Type</th>
                          <th scope="col" class="border-0">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <!--  <%if(user==null){% -->
                         <!--   <tr>
                           <td  width="5px"></td>
                           <td width="300px"></td>
                           <td width="5px"></td>
                           <td width="5px"></td>
                           <td  width="5px"></td>
                           <td width="250px">
                            
                           </td>
                                                  </tr -->
                          <!--  <%}else{%>
                             <% for(var i=0; i < user.length; i++){ % --> 
                              <tr>
                                <td>Traffic Monitoring and Life Safety Ensuring system based on IoT and Agent Technology Technology Technology Technology Technology Technology<!-- ><%=user[i].subDom_name% --></td>
                                <td>Network<!-- ><%=dom[0].dom_name% --></td>
                                <td>Mohaimen Bin<!-- ><%=fac[0].faculty_fname% -->&nbsp;Noor<!-- ;<%=fac[0].faculty_lname% --></td>
                                <td>Thesis<!-- ><%=type[0].type_name% --></td>
                               <td>
                                 <button class="btn btn-outline-info btn-sm" value="<%=user[i].subDom_id%>" onclick="goTo(12)" ><i class="fas fa-eye" style="margin-right: 5px;margin-left: -5px"></i>Details</button> 
                               </td>
                            </tr>
                          <!--  <%}% -->
                        <!--  <%}% -->
                   </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            </div>
@endsection