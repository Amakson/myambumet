@extends('layouts.app')
@section('content')
	
	
    {!! $calendar->calendar() !!}
    {!! $calendar->script() !!}
  	

<section>

	<div class="container-fluid" style="margin-top: -19px;">
		<div class="profile-head">
			<div class="col-md- col-sm-4 col-xs-12">
				<img src="http://www.newlifefamilychiropractic.net/wp-content/uploads/2014/07/300x300.gif" class="img-responsive" />
				<h6>Sola Adele</h6>
			</div><!--col-md-4 col-sm-4 col-xs-12 close-->


			<div class="col-md-5 col-sm-5 col-xs-12">
				<h5>Pasholly</h5>
				{{-- <p>Web Designer / Develpor </p> --}}
				<ul>
					{{-- <li><span class="glyphicon glyphicon-briefcase"></span> 5 years</li> --}}
					<li><span class="glyphicon glyphicon-map-marker"></span> Katy TX</li>
					<li><span class="glyphicon glyphicon-envelope"></span><a href="#" title="mail">solaadele@gmail.com</a></li>
					<li><span class="glyphicon glyphicon-phone"></span> <a href="#" title="call">(281) 956 78923</a></li>
					<li><span class="glyphicon glyphicon-list"></span> <a href="#" title="call">EMT - I</a></li>
					<li><span class="glyphicon glyphicon-tags"></span> <a href="#" title="call">LI123456</a></li>
					<li><span class="glyphicon glyphicon-time"></span> <a href="#" title="call">Since 2012</a></li>
				</ul>


			</div><!--col-md-8 col-sm-8 col-xs-12 close-->

		</div><!--profile-head close-->
	</div><!--container close-->


	<div id="sticky" class="container-fluid">

		<!-- Nav tabs -->
		<ul class="nav nav-tabs nav-menu" role="tablist">
			<li class="active">
				<a href="#profile" role="tab" data-toggle="tab">
					<i class="fa fa-male"></i> Profile
				</a>
			</li>
			<li><a href="#change" role="tab" data-toggle="tab">
				<i class="fa fa-key"></i> Edit Profile
				</a>
		</li>
	</ul><!--nav-tabs close-->

	<!-- Tab panes -->
	<div class="tab-content">
		<div class="tab-pane fade active in" id="profile">
			<div class="container-fluid">
				<div class="col-sm-11" style="float:left;">
					{{-- <div class="hve-pro">
						</div> --}}<!--hve-pro close-->
					</div><!--col-sm-12 close-->
					<br clear="all" />
					<div class="row">
						<div class="col-md-12">
							<h4 class="pro-title">Bio Graph</h4>
						</div><!--col-md-12 close-->


						<div class="col-md-6">

							<div class="table-responsive responsiv-table">
								<table class="table bio-table">
									<tbody>
										<tr>  
											<td>Username</td>
											<td>: Pasholly</td> 
										</tr>
										<tr>  
											<td>Location</td>
											<td>: Katy, TX</td> 
										</tr>
										<tr>  
											<td>Emai Id</td>
											<td>: solaadele@gmail.com</td> 
										</tr>
										<tr>    
											<td>Mobile</td>
											<td>: (281) 456 789</td>       
										</tr>
										<tr>    
											<td>Level</td>
											<td>: EMT -I</td>       
										</tr>
										<tr>
											<td>Licence #</td>
											<td>: LI123456</td> 
										</tr>
										<tr>    
											<td>Experience</td>
											<td>: Since 2012</td>       
										</tr>

									</tbody>
								</table>
							</div><!--table-responsive close-->
						</div><!--col-md-6 close-->



						<div class="col-md-6">

							<div class="table-responsive responsiv-table">
								<table class="table bio-table">
									<tbody>
										<tr>  
											<td>Emai Id</td>
											<td>: solaadele@gmail.com</td> 
										</tr>
										<tr>    
											<td>Mobile</td>
											<td>: (281) 456 789</td>       
										</tr>
										<tr>    
											<td>Phone</td>
											<td>: (281) 956 789123</td>       
										</tr>
										<tr>    
											<td>Experience</td>
											<td>: 5 years</td>       
										</tr>
										<tr>
											<td>Licence #</td>
											<td>LI123456</td> 
										</tr>

									</tbody>
								</table>
							</div><!--table-responsive close-->
						</div><!--col-md-6 close-->

					</div><!--row close-->




				</div><!--container close-->
			</div><!--tab-pane close-->


			<div class="tab-pane fade" id="change">
				<div class="container-fluid fom-main">
					<div class="row">
						<div class="col-sm-12">
							<h2 class="register">Edit Your Profile</h2>
						</div><!--col-sm-12 close-->

					</div><!--row close-->
					<br />
					<div class="row">

						<form class="form-horizontal main_form text-left" action=" " method="post"  id="contact_form">
							<fieldset>


							{{-- 	<div class="form-group col-md-12">
									<label class="col-md-10 control-label">First Name</label>  
									<div class="col-md-12 inputGroupContainer">
										<div class="input-group">
											<input  name="first_name" placeholder="First Name" class="form-control"  type="text">
										</div>
									</div>
								</div> --}}

								<!-- Text input-->

								{{-- <div class="form-group col-md-12">
									<label class="col-md-10 control-label" >Last Name</label> 
									<div class="col-md-12 inputGroupContainer">
										<div class="input-group">
											<input name="last_name" placeholder="Last Name" class="form-control"  type="text">
										</div>
									</div>
								</div> --}}

								<!-- Text input-->
								<div class="form-group col-md-12">
									<label class="col-md-10 control-label">E-Mail</label>  
									<div class="col-md-12 inputGroupContainer">
										<div class="input-group">
											<input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
										</div>
									</div>
								</div>


								<!-- Text input-->

								<div class="form-group col-md-12">
									<label class="col-md-10 control-label">Phone #</label>  
									<div class="col-md-12 inputGroupContainer">
										<div class="input-group">
											<input name="phone" placeholder="(845)555-1212" class="form-control" type="text">
										</div>
									</div>
								</div>

								<!-- Text input-->

								<div class="form-group col-md-12">
									<label class="col-md-10 control-label">Address</label>
									<div class="col-md-12 inputGroupContainer">
										<div class="input-group">
											<textarea class="form-control" name="comment" placeholder="Project Description"></textarea>
										</div>
									</div>
								</div>

								{{-- <div class="form-group col-md-12">
									<label class="col-md-10 control-label">Project Description</label>
									<div class="col-md-12 inputGroupContainer">
										<div class="input-group">
											<textarea class="form-control" name="comment" placeholder="Project Description"></textarea>
										</div>
									</div> --}}
								</div>


{{-- 
								<div class="form-group col-md-12"> 
									<label class="col-md-10 control-label">Industry</label>
									<div class="col-md-12 selectContainer">
										<div class="input-group">
											<select name="state" class="form-control selectpicker" >
												<option value=" " >Industry</option>
												<option>Industry</option>
												<option>Industry</option>
												<option>Industry</option>
											</select>
										</div>
									</div>
								</div>

 --}}
								<!-- Select Basic -->

								{{-- <div class="form-group col-md-12"> 
									<label class="col-md-10 control-label">Qualification</label>
									<div class="col-md-12 selectContainer">
										<div class="input-group">
											<select name="state" class="form-control selectpicker" >
												<option value=" " >your Qualification</option>
												<option>M.A.</option>
												<option>B.A.</option>
												<option >B.Ed</option>
											</select>
										</div>
									</div>
								</div> --}}



								<div class="form-group col-md-12"> 
									<label class="col-md-10 control-label">Level</label>
									<div class="col-md-12 selectContainer">
										<div class="input-group">
											<select name="state" class="form-control selectpicker" >
												<option value=" " >Level</option>
												<option>Emt - Basic</option>
												<option>Emt - Intermediate</option>
												<option>Emt - Paramedic</option>
											</select>
										</div>
									</div>
								</div>

								<div class="form-group col-md-12"> 
									<label class="col-md-10 control-label">Experience</label>
									<div class="col-md-12 selectContainer">
										<div class="input-group">
											<select name="state" class="form-control selectpicker" >
												<option value=" " >your Experience</option>
												<option>1 year</option>
												<option>2 years</option>
												<option>3 years</option>
												<option>4year</option>
												<option>5 years</option>
												<option>6 years</option>
											</select>
										</div>
									</div>
								</div>

								{{-- <div class="form-group col-md-12"> 
									<label class="col-md-10 control-label">Salary expected</label>
									<div class="col-md-12 selectContainer">
										<div class="input-group">
											<select name="state" class="form-control selectpicker" >
												<option value=" " >your Salary expectation</option>
												<option>50 thousand</option>
												<option>30thousand</option>
											</select>
										</div>
									</div>
								</div> --}}

								<div class="form-group col-md-12"> 
									<label class="col-md-10 control-label">Preferred Location</label>
									<div class="col-md-12 selectContainer">
										<div class="input-group">
											<select name="state" class="form-control selectpicker" >
												<option value=" " >your Preferred Location</option>
												<option>Chandigarh</option>
												<option>Chandigarh</option>
											</select>
										</div>
									</div>
								</div>

<div class="form-group col-md-12">
	<label class="col-md-10 control-label">Choose Password</label>  
	<div class="col-md-12 inputGroupContainer">
		<div class="input-group">
			<input  name="first_name" placeholder="Choose Password" class="form-control"  type="password">
		</div>
	</div>
</div>



<div class="form-group col-md-12">
	<label class="col-md-10 control-label">Confirm Password</label>  
	<div class="col-md-12 inputGroupContainer">
		<div class="input-group">
			<input  name="first_name" placeholder="Confirm Password" class="form-control"  type="password">
		</div>
	</div>
</div>


<!-- radio checks -->
{{-- <div class="form-group col-md-12">
	<label class="col-md-10 control-label">Gender</label>
	<div class="col-md-6">
		<div class="radio col-md-2">
			<label>
				<input type="radio" name="hosting" value="yes" /> Male
			</label>
		</div>
		<div class="radio col-md-2">
			<label>
				<input type="radio" name="hosting" value="no" /> Female
			</label>
		</div>
	</div>
</div> --}}

<!-- upload profile picture -->
<div class="col-md-12 text-left">
	<div class="uplod-picture">
		<span class="btn btn-default uplod-file">
			Upload Photo <input type="file" />
		</span>
		<span class="btn btn-default uplod-file">
			Upload Licence <input type="file" />
		</span>
{{-- 		<span class="btn btn-default uplod-file">
			Upload Video <input type="file" />
		</span> --}}
	</div><!--uplod-picture close-->
</div><!--col-md-12 close-->
<!-- Button -->
<div class="form-group col-md-10">
	<div class="col-md-6">
		<button type="submit" class="btn btn-warning submit-button" >Save</button>
		<button type="submit" class="btn btn-warning submit-button" >Cancel</button>

	</div>
</div>
</fieldset>
</form>
</div><!--row close-->
</div><!--container close -->          
</div><!--tab-pane close-->
</div><!--tab-content close-->
</div><!--container close-->

</section><!--section close-->

@endsection