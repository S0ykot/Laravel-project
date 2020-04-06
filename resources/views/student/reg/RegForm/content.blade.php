@extends('generalLogin/index')

@section('content')
<div class="login100-form-title" style="background-image: url(/images/unnamed.jpg);">
					<span class="login100-form-title-1">
						REGISTER
					</span>
				</div>

				<form class="login101-form validate-form" method="post" id="EmployeeForm" role="form" enctype="multipart/form-data">
					 <!-- if(......) -->
					 <div class="alert alert-warning" role="alert" style="width: 100%;padding-top:2px; padding-bottom:2px;"> 
	                    <div class="panel-body">
	                        <div class="row justify-content-sm-center justify-content-lg-center justify-content-md-center">
	                            <div class=" col-sm-auto col-lg-auto col-md-auto" style="text-align: center">
	                                <strong>Something Wrong</strong>
	                            </div>
	                        </div>
	                     </div>
	                </div>
                        
					 <!-- end -->
					 {{ csrf_field()}}
					<div class="form-group validate-input m-b-18" data-validate = "This Field is Required" style="width: 100%">
						<input class="input100 form-control" type="text" name="userid" placeholder="Academic ID" >
						<span class="focus-input100"></span>
					</div>

					<div class="form-group validate-input m-b-18" data-validate = "This Field is Required"  style="width: 100%">
						<input class="input100 form-control" type="text" name="fname" placeholder="Enter First Name">
						<span class="focus-input100"></span>
					</div>

					<div class="form-group validate-input m-b-18" data-validate="This Field is Required"  style="width: 100%">
						<input class="input100 form-control" type="text" name="lname" placeholder="Enter Last Name" >
						<span class="focus-input100"></span>
					</div>

					<div class="form-group validate-input m-b-18" data-validate = "This Field is Required"   style="width: 100%">

						<input class="input100 form-control" type="text" name="email" placeholder="Enter Valid Email">
						<span class="focus-input100"></span>
					</div>

					<div class="form-group validate-input m-b-18" data-validate = "This Field is Required"   style="width: 100%">
						<input class="input100 form-control" type="text" name="contact" placeholder="Contact Number" >
						<span class="focus-input100"></span>
					</div>

					<div class="form-group validate-input m-b-18" data-validate="This Field is Required" style="width: 100%">
						<input class="input100 form-control" type="text" name="cgpa" placeholder="Enter CGPA">
						<span class="focus-input100"></span>
					</div>

					<div class="form-group validate-input m-b-18" data-validate = "This Field is Required" style="width: 100%">
						<input class="input100 form-control" type="text" name="dept" placeholder="Enter Department">
						<span class="focus-input100"></span>
					</div>

					<div class="form-group validate-input m-b-18" data-validate="This Field is Required" style="width: 100%">
						<input class="input100 form-control" type="text" name="credit" placeholder="Credit Completed (After This Semester)">
						<span class="focus-input100"></span>
					</div>
                      <div class="panel panel-info"  style="width: 100%"> 
                           <div class="panel-body" >
                                    
                                   <div class="form-group">
                                       <label for="file" class="col-md-3 control-label">Upload Document</label>
                                       <div class="col-md-9">
                                           <input type="file" class="form-control" name="file" style="padding-bottom: 32px" required>
                                       </div>
                                   </div>
                            </div>
                       </div>
					<div class="alert  mt-5" role="alert" style="width: 100%;padding-top:2px; padding-bottom:0px;">           
                    <div class="row justify-content-sm-center justify-content-lg-center justify-content-md-center">
                        <div class=" col-sm-auto col-lg-auto col-md-auto" style="text-align: center">
                            <input type="submit" class="btn btn-primary" id="onHover" value="Sign Up" style="width: 200px;">
                        </div>
                    </div> 
                </div>

                <div class="alert" role="alert" style="width: 100%;padding-top:0px; padding-bottom:0px;">   
                    <div class="row justify-content-sm-center justify-content-lg-center justify-content-md-center">
                        <div class=" col-sm-auto col-lg-auto col-md-auto" style="text-align: center">
                            <a href="{{route('login')}}" class="txt1">Already Registered?</a>
                        </div>
                    </div>    
                </div>
				</form>
			</div>
@endsection