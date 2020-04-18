@extends('generalLogin/index')

@section('content')
<div class="login100-form-title" style="background-image: url(/images/unnamed.jpg);">
					<span class="login100-form-title-1">
						REGISTER
					</span>
				</div>

				<form class="login101-form validate-form" method="post" enctype="multipart/form-data">
					 {{ csrf_field()}}
					<div class="form-group validate-input m-b-18" data-validate = "This Field is Required" style="width: 100%">
						<input class="input100 form-control" type="text" name="userid" placeholder="Academic ID" value="{{old('userid')}}">
						<span class="focus-input100"></span>
						@if($errors->has('userid'))
						<small id="emailHelp" class="form-text" style="color: red">** {{$errors->first('userid')}}</small>
						@endif
					</div>

					<div class="form-group validate-input m-b-18" data-validate = "This Field is Required"  style="width: 100%">
						<input class="input100 form-control" type="text" name="fname" placeholder="Enter First Name" value="{{old('fname')}}">
						<span class="focus-input100"></span>
						@if($errors->has('fname'))
						<small id="emailHelp" class="form-text" style="color: red">** {{$errors->first('fname')}}</small>
						@endif
					</div>

					<div class="form-group validate-input m-b-18" data-validate="This Field is Required"  style="width: 100%">
						<input class="input100 form-control" type="text" name="lname" placeholder="Enter Last Name" value="{{old('lname')}}">
						<span class="focus-input100"></span>
						@if($errors->has('lname'))
						<small id="emailHelp" class="form-text" style="color: red">** {{$errors->first('lname')}}</small>
						@endif
					</div>

					<div class="form-group validate-input m-b-18" data-validate = "This Field is Required"   style="width: 100%">

						<input class="input100 form-control" type="text" name="email" placeholder="Enter Valid Email" value="{{old('email')}}">
						<span class="focus-input100"></span>
						@if($errors->has('email'))
						<small id="emailHelp" class="form-text" style="color: red">** {{$errors->first('email')}}</small>
						@endif
					</div>

					<div class="form-group validate-input m-b-18" data-validate = "This Field is Required"   style="width: 100%">
						<input class="input100 form-control" type="text" name="contact" placeholder="Contact Number" value="{{old('contact')}}">
						<span class="focus-input100"></span>
						@if($errors->has('contact'))
						<small id="emailHelp" class="form-text" style="color: red">** {{$errors->first('contact')}}</small>
						@endif
					</div>

					<div class="form-group validate-input m-b-18" data-validate="This Field is Required" style="width: 100%">
						<input class="input100 form-control" type="text" name="cgpa" placeholder="Enter CGPA" value="{{old('cgpa')}}">
						<span class="focus-input100"></span>
						@if($errors->has('cgpa'))
						<small id="emailHelp" class="form-text" style="color: red">** {{$errors->first('cgpa')}}</small>
						@endif
					</div>

					<div class="form-group validate-input m-b-18" data-validate = "This Field is Required" style="width: 100%">
						<input class="input100 form-control" type="text" name="dept" placeholder="Enter Department" value="{{old('dept')}}">
						<span class="focus-input100"></span>
						@if($errors->has('dept'))
						<small id="emailHelp" class="form-text" style="color: red">** {{$errors->first('dept')}}</small>
						@endif
					</div>

					<div class="form-group validate-input m-b-18" data-validate="This Field is Required" style="width: 100%">
						<input class="input100 form-control" type="text" name="credit" placeholder="Credit Completed (After This Semester)" value="{{old('credit')}}">
						<span class="focus-input100"></span>
						@if($errors->has('credit'))
						<small id="emailHelp" class="form-text" style="color: red">** {{$errors->first('credit')}}</small>
						@endif
					</div>
                      <div class="panel panel-info"  style="width: 100%"> 
                           <div class="panel-body" >
                                    
                                   <div class="form-group">
                                       <label for="file" class="col-md-3 control-label">Upload Document</label>
                                       <div class="col-md-9">
                                           <input type="file" class="form-control" name="myFile" style="padding-bottom: 32px" required>
                                       </div>
                                   </div>
                            </div>
                       </div>
                        @if($errors->has('myFile'))
						<small id="emailHelp" class="form-text" style="color: red">** {{$errors->first('myFile')}}</small>
						@endif
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