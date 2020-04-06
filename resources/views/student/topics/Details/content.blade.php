 @extends('student/ParentLayout/header')

@section('home')
    <div class="page-header row no-gutters py-4" style="margin-left: 10px">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Overview</span>
                <h3 class="page-title">Topic Details</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <!-- Default Light Table -->
            <div class="container-fluid">
             <div class="row justify-content-lg-center justify-content-md-center justify-content-sm-center">
                <div class="col-sm-12 col-lg-12 col-md-12">
                  <div class="card card-small mb-4 pt-3">
                    <div class="card-header border-bottom">
                     
                      <h4 class="mb-0">&ensp;</h4>
                      <h6 class="mb-0"></h6>
                      <div style="width: 100%;margin-left: 100px; margin-left: -10px;" class="rw">
                        <table class="table table-sm table-hover table-borderless">
                          <tr>
                            <td width="100px"></td>
                            <td width="200px">Id</td>
                            <td>:</td>
                            <td>Demo<!-- ><%=user.subDom_id% --></td>
                            <td width="20px"></td>
                          </tr>
                          <tr>
                            <td width="100px"></td>
                            <td width="200px" style="vertical-align: top">Name</td>
                            <td style="vertical-align: top">:</td>
                            <td>Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo<!-- ><%=user.subDom_name% --></td>
                            <td width="20px"></td>
                          </tr>
                          <tr>
                            <td width="100px"></td>
                            <td width="200px" style="vertical-align: top">Description</td>
                            <td style="vertical-align: top">:</td>
                            <td>Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo Demo<!-- ><%=user.subDom_desc% --></td>
                            <td width="20px"></td>
                          </tr>
                          <tr>
                            <td width="100px"></td>
                            <td width="200px">Domain</td>
                            <td>:</td>
                            <td>Demo<!-- ><%=dom[0].dom_name% --></td>
                            <td width="20px"></td>
                          </tr>
                          
                          <tr>
                            <td width="100px"></td>
                            <td width="200px">Supervisor</td>
                            <td>:</td>
                            <td>Demo<!-- ><%=fac[0].faculty_fname% -->&nbsp;Demo<!-- ;<%=fac[0].faculty_lname% --></td>
                            <td width="20px"></td>
                          </tr>
                          
                           <tr>
                            <td width="100px"></td>
                            <td width="200px">Type</td>
                            <td>:</td>
                            <td>Demo<!-- ><%=type[0].type_name% --></td>
                            <td width="20px"></td>
                          </tr>
                          
                          <tr >
                            <td width="100px"></td>
                            <td style="padding-bottom:50px" width="200px"></td>
                            <td></td>
                            <td></td>
                            <td width="20px"></td>
                          </tr>
                      <!--      <%if(check!=null){%>
                        <tr>
                          <td width="100px"></td>
                          <td width="200px"><button class="btn btn-danger goHome">Go Home</button></td>
                          <td></td>
                          <td></td>
                          <td width="20px"></td>
                        </tr>
                        <%}else{% -->
                              <tr>
                                <td width="100px"></td>
                                <td width="200px"><button class="btn btn-outline-info btn-sm" value="<%=user.subDom_id%>" onclick="apply(this.value)">Apply</button>&emsp;<button class="btn btn-outline-danger btn-sm goToTopics">Back</button></td>
                                <td></td>
                                <td></td>
                                <td width="20px"></td>
                              </tr>
                              <!--  <%}% -->
                        </table>
                      </div>
                    </div>
                   </div>
                  </div>
              </div>
            </div>
@endsection