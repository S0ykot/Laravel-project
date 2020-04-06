 @extends('student/ParentLayout/header')

@section('home')
  <div class="page-header row no-gutters py-4" style="margin-left: 10px">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Overview</span>
                <h3 class="page-title">My Research</h3>
              </div>
            </div>
        
          <!-- / .main-navbar -->
          <!-- <%if(thesisResult==null){%> -->
          <!-- <center>
                <div >
                  <div>
                    <div class="card card-small mb-4 pt-3">
                      <div class="card-header border-bottom text-center">
                        
                          <h3 class="page-title" style="margin-bottom: 50px">YOU ARE NOT ENROLLED IN ANY TOPIC YET!!</h3>
                          <button class="btn btn-accent" id="apply">Click to Apply</button>
                       
                      </div>
                     
                    </div>
                  </div>
                </div>
          </center> -->
         <!-- <%}else{%> -->
          
           <div class="container">
              <div class="row justify-content-lg-center justify-content-md-center justify-content-sm-center">
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <div class="card card-small mb-4 pt-3">
                  <div class="card-header border-bottom">
                   
                    <h4 class="mb-0">&ensp;</h4>
                    <h6 class="mb-0"></h6>
                    <div style="width: 100%;margin-left: 100px; margin-left: -10px;" class="rw">
                      <table class="table table-sm table-borderless table-hover" width="100%">
                        
                          <td width="100px"></td>
                          <td width="200px">Group ID</td>
                          <td>:</td>
                          <td>Demo<!-- <%=thesisResult.group_id%> --></td>
                          <td width="20px"></td>
                        </tr>
                       <tr>
                         <td width="100px"></td>
                         <td width="200px" style="vertical-align: top">Topic Name</td>
                         <td style="vertical-align: top">:</td>
                         <td>Demo<!-- <%=subDomResults.subDom_name%> --></td>
                         <td width="20px"></td>
                       </tr>
                       <tr>
                         <td width="100px"></td>
                         <td width="200px" style="vertical-align: top">Topic Description</td>
                         <td style="vertical-align: top">:</td>
                         <td>Demo<!-- <%=subDomResults.subDom_desc%> --></td>
                         <td width="20px"></td>
                       </tr>
                       <tr>
                         <td width="100px"></td>
                         <td width="200px">Domain</td>
                         <td>:</td>
                         <td>Demo<!-- <%=domainResult[0].dom_name%> --></td>
                         <td width="20px"></td>
                       </tr>
                       
                       <tr>
                         <td width="100px"></td>
                         <td width="200px">Supervisor</td>
                         <td>:</td>
                         <td>Demo<!-- <%=facultyResult[0].faculty_fname%> -->&nbsp;Demo<!-- <%=facultyResult[0].faculty_fname%> --></td>
                         <td width="20px"></td>
                       </tr>
                      <!--  <%if(thesisResult.external==null){%> -->
                      <!--   <tr>
                        <td width="100px"></td>
                        <td width="200px">Supervisor</td>
                        <td>:</td>
                        <td>Not Appointed Yet</td>
                        <td width="20px"></td>
                      </tr> -->
                      <!-- <%}else{%> -->
                        <tr>
                          <td width="100px"></td>
                          <td width="200px">External</td>
                          <td>:</td>
                          <td>Demo<!-- <%=thesisResult.external%> --></td>
                          <td width="20px"></td>
                        </tr>
                        <!-- <%}%> -->
                       
                        <tr>
                         <td width="100px"></td>
                         <td width="200px">Type</td>
                         <td>:</td>
                         <td>Demo<!-- <%=typeResult[0].type_name%> --></td>
                         <td width="20px"></td>
                       </tr>
          
                       <tr>
                        <td width="100px"></td>
                        <td width="200px">Progress</td>
                        <td>:</td>
                        <td>
                          <div class="progress" style="height: 20px; margin-top: 1px">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%; height: 100%">75%</div>
                          </div>
                        </td>
                        <td width="20px"></td>
                      </tr>
                        
                        <tr >
                          <td width="100px"></td>
                          <td style="padding-bottom:50px" width="200px"></td>
                          <td></td>
                          <td></td>
                          <td width="20px"></td>
                        </tr>
                        <tr>
                          <td width="100px"></td>
                          <td width="230px"><button class="btn btn-sm btn-info" value="Demo" onclick="groupDetails(this.value)">Group Details</button>&emsp;<button class="btn btn-sm btn-danger goHome">Go Home</button></td>
                          <td></td>
                          <td></td>
                          <td width="20px"></td>
                        </tr>
                    
                      </table>
                    </div>
                  </div>
                 </div>
                </div>
                </div>
              </div>
            <!-- <%}%> -->
@endsection