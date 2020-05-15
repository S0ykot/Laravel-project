@extends('admin/adminInctiveStudentList/nav')

@section('index')
    <title>Inctive Student List</title>
            <div class="row">
              <div class="col">
                <div class="card card-small mb-4">
                  <!-- <div class="card-header border-bottom">
                    <h6 class="m-0">Active Users</h6>
                  </div> -->
                  <div class="card-body p-0 pb-3 text-center">
                    <table class="table mb-0">
                      <thead class="bg-light">
                        <tr>
                          <th scope="col" class="border-0">ID</th>
                          <th scope="col" class="border-0">First Name</th>
                          <th scope="col" class="border-0">Last Name</th>
                          <th scope="col" class="border-0">Email</th>
                          <th scope="col" class="border-0">Phone</th>
                          <th scope="col" class="border-0">Department</th>
                          <th scope="col" class="border-0">Complete Credit</th>
                          <th scope="col" class="border-0">CGPA</th>
                          <th scope="col" class="border-0">Register Date</th>
                          <th scope="col" class="border-0">Account Status</th>
                          <th scope="col" class="border-0" colspan="2">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <div id="student">
                            @foreach ($student as $key)
                        
          				        <tr>
          				        	<td>{{$key['student_id']}}</td>
      				              	<td>{{$key['student_fname']}}</td>
      					            <td>{{$key['student_lname']}}</td>
      					            <td>{{$key['student_email']}}</td>
      					            <td>{{$key['student_contact']}}</td>
      					            <td>{{$key['student_dept']}}</td>
                                    <td>{{$key['student_credit']}}</td>
                                    <td>{{$key['student_cgpa']}}</td>
      					            <td>{{$key['student_regDate']}}</td>
      					            <td style="color: red;">Inactive</td>
                            
      					            <td colspan="2">
      									<a style="background-color: AliceBlue;color: DodgerBlue;font-weight: bold;padding: 2px 3px;text-align: center;text-decoration: none;display: inline-block;border: 1px solid DodgerBlue;" href="{{route('adminUpdateStudent', $key['student_id'])}}">Update</a><br><br>
      								
      								
                                        <a style="background-color: AliceBlue;color: DodgerBlue;font-weight: bold;padding: 2px 3px;text-align: center;text-decoration: none;display: inline-block;border: 1px solid DodgerBlue;" href="{{route('adminUnblockStudent', $key['sid'])}}">Unblock</a><br><br>
      						        
                                    
                                        <a style="background-color: AliceBlue;color: DodgerBlue;font-weight: bold;padding: 2px 3px;text-align: center;text-decoration: none;display: inline-block;border: 1px solid DodgerBlue;" href="{{route('adminDeleteStudent', $key['student_id'])}}">Delete</a> 
                                    </td>
      						    </tr>
    					    @endforeach
                          </tbody>
                      </div>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <footer class="main-footer d-flex p-2 px-3 bg-white border-top">
            
          </footer>
        </main>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script src="https://unpkg.com/shards-ui@latest/dist/js/shards.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sharrre/2.0.1/jquery.sharrre.min.js"></script>
    <script src="/scripts/extras.1.1.0.min.js"></script>
    <script src="/scripts/shards-dashboards.1.1.0.min.js"></script>
  </body>
</html>