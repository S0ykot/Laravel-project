@extends('student/upload/index')

@section('content')
<!-- <% if(success !=''){%> -->
            <div class="alert alert-success" style="width: 100%">
               <!-- <%= success %> -->
            </div>
            <!-- <% }%> -->
          <div id="uploadfile" style="margin-top:150px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
              <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="panel-title">Upload Your File</div>
                </div>  
                <div class="panel-body" >
                    <form action="/studentUpload" id="EmployeeForm" class="form-horizontal" method="post"  role="form" enctype="multipart/form-data">   
                        <div class="form-group">
                            <label for="file" class="col-md-3 control-label">Upload File</label>
                            <div class="col-md-9">
                                <input type="file" class="form-control" name="file" required="">
                            </div>
                        </div>                        
                        <div class="form-group">
                            <!-- Button -->                                        
                            <div class="col-md-offset-3 col-md-9">
                            <input type="submit" name="submit" value="Upload" class="btn btn-accent btn-sm">  
                            <button style="background-color: red; border-color: red" class="goHome btn btn-sm btn-accent">Go Home</button>
                            </div>
                        </div>
                    </form>
              </div>
          </div>
@endsection