<?php

?>
<div class="container">
<div class="row">
    <div class="col-md-6" ng-controller="NewMemberControl" ng-init="member.schemes = 'Premium';member.sex='Male';">
    <h3><i class=" fa fa-users"></i>&nbsp;New Member Form</h3>
    <hr class="colorgraph">
		<form name="signupForm" ng-submit="submitSignupForm()" novalidate>
		<label>First Name:</label>
		<div class="input-group">
			<span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
			<input class="form-control" type="text" id="fname" ng-model="member.fname" name="fname" placeholder="First Name" ng-maxlength="20" ng-minlength=3 required>
		</div><br>
                <div class="error-container">
                            <div class="error" ng-show="signupForm.fname.$dirty && signupForm.fname.$invalid">
                            <small class="error" ng-show="signupForm.fname.$error.required">
                                Your first name is required.
                            </small>
                            <small class="error" ng-show="signupForm.fname.$error.minlength">
                                    Your first name is required to be at least 3 characters
                            </small>
                            <small class="error" ng-show="signupForm.fname.$error.maxlength">
                                    Your first name cannot be longer than 20 characters
                            </small>
                            </div>
                </div>
		<label>Last Name:</label>
		<div class="input-group">
			<span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
			<input class="form-control" type="text" id="lname" name="lname" placeholder="Last Name" ng-model="member.lname" ng-minlength="1" maxlength="20" required>
		</div><br>
                <div class="error-container">
                            <div class="error" ng-show="signupForm.lname.$dirty && signupForm.lname.$invalid">
                            <small class="error" ng-show="signupForm.lname.$error.required">
                                Your last name is required.
                            </small>
                            <small class="error" ng-show="signupForm.lname.$error.minlength">
                                    Your last name is required to be at least 1 characters. Atleast Give your Initial.
                            </small>
                            <small class="error" ng-show="signupForm.lname.$error.maxlength">
                                    Your last name cannot be longer than 20 characters.
                            </small>
                            </div>
                </div>
                <label>Sex:</label>
		<div class="input-group">
			<span class="input-group-addon"><i class="fa fa-question fa-fw"></i></span>
			<select class="form-control" id="sex" name="sex" ng-model="member.sex">
			<option value="Male" selected>Male</option>
			<option value="Female">Female</option>
                        <option value="">None</option>
			</select>
		</div><br>
		<label>Date of Birth:( EX: 29/05/1991)</label>
                <!--<div class="input-group">
			<span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
			<input class="form-control" name="dob" id="dob" type="text" placeholder="dd/mm/yyyy" required="">
		</div><br>-->
                <div class="input-group" ng-controller="CalendarControl">
                    <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                    <input type="text" class="form-control" name="dob" ng-click="open($event)" id="dob" placeholder="Date Of Birth" datepicker-popup="yyyy-MM-dd" ng-model="member.dob" 
                           is-open="opened" max-date="'2015-06-22'" datepicker-options="dateOptions" date-disabled="disabled(date, mode)" ng-required="true" close-text="Close" />
                </div><br/>
		<label>Occupation:</label>
		<div class="input-group">
			<span class="input-group-addon"><i class="fa fa-suitcase fa-fw"></i></span>
			<input class="form-control" name="occupation" id="occupation" type="text" placeholder="" ng-model="member.occupation" ng-minlength="3" maxlength="20" required>
		</div><br>
                <div class="error-container">
                            <div class="error" ng-show="signupForm.occupation.$dirty && signupForm.occupation.$invalid">
                            <small class="error" ng-show="signupForm.occupation.$error.required">
                                Your Occupation is required.
                            </small>
                            <small class="error" ng-show="signupForm.occupation.$error.minlength">
                                    Your Occupation is required to be at least 3 characters.
                            </small>
                            <small class="error" ng-show="signupForm.occupation.$error.maxlength">
                                    Your Occupation cannot be longer than 20 characters.
                            </small>
                            </div>
                </div>
		<label>Blood Group:</label>
		<div class="input-group">
			<span class="input-group-addon"><i class="fa fa-eyedropper fa-fw"></i></span>
                        <select class="form-control" id="bloodgroup" name="bloodgroup" ng-model="member.bloodgroup">
			<option value="A1 -ve">A1 Negative (A1 -ve)</option>
			<option value="A1 +ve">A1 Positive (A1 +ve)</option>
			<option value="A1B -ve">A1B Negative (A1B -ve)</option>
			<option value="A1B +ve">A1B Positive (A1B +ve)</option>
			<option value="A2 -ve">A2 Negative (A2 -ve)</option>
			<option value="A2 +ve">A2 Positive (A2 +ve)</option>
			<option value="A2B -ve">A2B Negative (A2B -ve)</option>
			<option value="A2B +ve">A2B Positive (A2B +ve)</option>
			<option value="B -ve">B Negative (B -ve)</option>
			<option value="B +ve">B Positive (B +ve)</option>
			<option value="B1 +ve">B1 Positive (B1 +ve)</option>
			<option value="O -ve">O Negative (O -ve)</option>
			<option value="O +ve">O Positive (O +ve)</option>
			<option value="">none</option>
			</select>
		</div><br>
		<label>Schemes:</label>
		<div class="input-group">
                <label class="radio-inline">
                    <input type="radio" name="schemes" id="basic-radio" value="Basic" ng-model="member.schemes"> Basic
		</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<label class="radio-inline">
		<input type="radio" name="schemes" id="premium-radio" value="Premium" checked="true" ng-model="member.schemes"> Premium
		</label>
		</div>
		<label>Mail Id:</label>
		<div class="input-group">
			<span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
			<input class="form-control" name="email" id="email" type="text" placeholder="example@domain.com" ng-model="member.email" ng-minlength=3 ng-maxlength=30 required="">
		</div><br>
                <div class="error-container" ng-show="signupForm.email.$dirty && signupForm.email.$invalid">
                         <small class="error" ng-show="signupForm.email.$error.required">Your email is required.</small>
                         <small class="error" ng-show="signupForm.email.$error.minlength">Your email is required to be at least 3 characters</small>
                         <small class="error" ng-show="signupForm.email.$error.email">That is not a valid email. Please input a valid email.</small>
                         <small class="error" ng-show="signupForm.email.$error.maxlength">Your email cannot be longer than 30 characters</small>
                </div>
		<label>Contact No:</label>
		<div class="input-group">
			<span class="input-group-addon"><i class="fa fa-mobile fa-fw"></i></span>
			<input class="form-control" name="phone" id="phone" type="text" placeholder="XXXXXXXXXX" ng-model="member.phone" ng-minlength=10 ng-maxlength=10 required="">
		</div><br>
                <div class="error-container" ng-show="signupForm.phone.$dirty && signupForm.phone.$invalid">
                         <small class="error" ng-show="signupForm.phone.$error.required">Your Number is required.</small>
                         <small class="error" ng-show="signupForm.phone.$error.minlength">Your Number is required to be at least 10 Numbers</small>
                         <small class="error" ng-show="signupForm.phone.$error.maxlength">Your Number cannot be longer than 10 Number</small>
                       </div>
		<label>Address:</label>
		<div class="input-group">
			<span class="input-group-addon"><i class="fa fa-home fa-fw"></i></span>
			<textarea class="form-control" name="address" id="address" rows="3" ng-model="member.address" ng-minlength=10></textarea>
		</div><br>
                <div class="error-container" ng-show="signupForm.address.$dirty && signupForm.address.$invalid">
                    <small class="error" ng-show="signupForm.address.$error.required">Your Address is required.</small>
                    <small class="error" ng-show="signupForm.address.$error.minlength">Your Address is required to be at least 10 Numbers</small>
                </div>
                <div class="input-group">
                Before clicking <strong class="label label-primary">Register</strong>, you agree to the <a href="#" data-toggle="modal" data-target="#t_and_c_m">Terms and Conditions</a>.
                </div>
		<br>
                <button type="submit" class="btn btn-primary" ng-disabled="signupForm.$invalid">Register</button>
		<button type="reset" class="btn btn-cancel">Cancel</button>
		</form>
    
        <script type="text/ng-template" id="sigupModel.html">
        <div class="modal-header">
            <h3 class="modal-title" ng-show="{{success}}">Welcome SETIF Family..</h3>
            <h3 class="modal-title" ng-hide="{{success}}">Error..</h3>
        </div>
        <div class="modal-body">
            <div ng-show="{{success}}">
            Congrats! You have joined SETIF family...
            </h4>
            <br/>
            <h4>Your membership id is: <b>{{ id }}</b>
            </h4>
            <br/>
            Further information Check your registered mail id.
            </div>
            <div ng-hide="{{success}}">
            Sorry! You already joined SETIF family...
            </h4>
            <br/>
            <h4>Your membership id is: <b>{{ id }}</b>
            </h4>
            <br/>
            Mobile number is unique.If you want to create account use different mobile number.
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn btn-primary" ng-click="ok()">Enjoy</button>
         </div>
        </script>
        
	</div>
<div class="col-md-6">
    <h3><i class=" fa fa-sign-in"></i>&nbsp;Sign in Form</h3>
    <hr class="colorgraph">
    <h3 class=" breadcrumb">Recent Members</h3>
    <?php
    /*check if there are rows returned*/
    if(isset($members))
    {
      foreach($members as $row):
      echo "<blockquote>";
      echo "<p class='text-capitalize'>".$row['fname']." ".$row['lname']."</p>";
      echo "<footer>".$row['occupation']."</footer>";
      echo "</blockquote>";
      echo "<hr>";
      endforeach;
    }
    ?>
</div>    
</div>
</div>
<!-- Modal -->
<div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
				<h4 class="modal-title" id="myModalLabel"><i class=" fa fa-cogs"></i>&nbsp;Terms & Conditions</h4>
			</div>
                        <hr class="colorgraph">
			<div class="modal-body">
                            <ul class="list-group">
                                <li class="list-group-item text-left">
                                 1. Anyone above the age of 18 can join our foundation.
                                </li>
                                <li class="list-group-item text-left">
                                 2. A member can join in either Premium (or) Basic Schemes.
                                </li>
                                <li class="list-group-item text-left">
                                  &nbsp;&nbsp;&nbsp;&nbsp;2.1. Basic: Rs. 50 per month
                                </li>
                                <li class="list-group-item text-left">
                                &nbsp;&nbsp;&nbsp;&nbsp;2.2. Premium: Rs. 150 per month.
                                </li>
                                  <li class="list-group-item text-left">
                                3. The member should pay their annual subscription in 3 terms (i.e., once in 4
                                months).
                                </li>
                                  <li class="list-group-item text-left">
                                4. Apart from funding, the member can serve by participating in camps and
                                meetings.
                                </li>
                                <li class="list-group-item text-left">
                                5. The Board of Trustees has sole rights to cancel the membership in case of
                                misbehavior or if he/she fails to pay the subscription for 2 continuous terms.
                                </li>
                                <li class="list-group-item text-left">
                                6. Even non members can send donation to our foundation.
                                </li>
                            </ul>
                </div>
		<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal">I Agree</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div>
