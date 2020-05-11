@extends('faculty/topicDetails/index')

@section('content')

            <div class="row">
              <div class="col">
                <div class="card card-small mb-4">

                  <div class="card-body p-0 pb-3 text-center">
                    <table class="table mb-0">
                      <thead class="bg-light">
                        <tr>
                          <th>Name :</th>
                          <td><%=data[id].subDom_name%></td>
                        </tr>
                        <tr>
                          <th>Description :</th>
                          <td><%=data[id].subDom_desc%></td>
                        </tr>
                        <tr>
                          <th>Type :</th>
                          <td><%=data[id].type_name%></td>
                        </tr>
                        <tr>
                          <th>Domain :</th>
                          <td><%=data[id].dom_name%></td>
                        </tr>
                        <tr>
                          <th>Progress :</th>
                          <td><%=data[id].thesis_progress%>% <br><progress id="file" value="<%=data[id].thesis_progress%>" max="100"></progress></td>
                        </tr>
                        <tr>
                          <th>Semester :</th>
                          <td><%=data[id].sem_name%></td>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td></td>
                        </tr>
                          <tr>
                            <th colspan="4"><h3>Students</h3></th>
                          </tr>
                      </tbody>
                      <tbody>
                        <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>EMAIL</th>
                            <th>CONTACT</th>
                        </tr>
                        <%for(var i=0;i<data1.length;i++){%>
                        <tr>
                          <td><%=data1[i].student_id%></td>
                          <td><%=data1[i].student_fname%> <%=data[i].student_lname%></td>
                          <td><%=data1[i].student_email%></td>
                          <td><%=data1[i].student_contact%></td>
                        </tr>
                        <%}%>
                      </tbody>
                      <tbody>
                        <br><hr>
                        <tr>
                          <th colspan="4"><h2>Files<h2></th>
                        </tr>
                        <%if(files){%>
                          <%for(var i=0;i<files.length;i++){%>
                          <tr>
                            <td colspan="3"><a href="/viewTopic/download/<%=files[i].fileName%>"><%=files[i].fileName%></a></td>
                          </tr>
                          <%}%>
                        <%}%>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>


@if($errors->any())
            <script>alert`{!! implode('', $errors->all(':message')) !!}`</script>
          @endif

@endsection