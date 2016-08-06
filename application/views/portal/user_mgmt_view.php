<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<div class="container">
    <div class="msg-header">
        <div class="text-right">
            <a href="<?php echo site_url();?>index.php/member/exportMembers" target="_blank">
                <button class="btn btn-white" title="Export">
                <i class="fa fa-cloud-download"></i>
                </button>
            </a>
            <a href="<?php echo site_url();?>index.php/admin/logout">
                <button class="btn btn-white" title="Logout">
                <i class="fa fa-sign-out"></i>
                </button>
            </a>
        </div><!-- pull-right -->
    </div>
    <div class="text-center mb20">
            <h2 class="section-heading ">Member Management</h2>
    </div>
    <div ng-controller="MemberMgmtControl" ng-init="membermgmt.membershipid = '';membermgmt.name='';">
    <form name="activityFrontForm" ng-submit="submitMemberFilterForm()" class="form-inline">
        <div class="form-group">
          <label for="membershipid">Membership Id</label>
          <input type="text" class="form-control" id="membershipid"  name="membershipid" ng-model="membermgmt.membershipid">
        </div>
        <div class="form-group">
          <label for="name">Member Name</label>
          <input type="text" class="form-control" id="name"  name="name" ng-model="membermgmt.name">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
   <hr class="colorgraph">
   <div class="mt20 mb20">
    <table ng-show="memberlistenable" class="table table-bordered">
        <thead >
        <th class='text-center'>Membership Id</th>
        <th class='text-center'>Name</th>
        <th class='text-center'>Action</th>
        </thead>
        <tbody>
        <tr ng-repeat="memberlist1 in memberlist">
            <td class='text-center'>{{memberlist1.membershipid}}</td>
            <td class='text-center'>{{memberlist1.fname}} {{memberlist1.lname}}</td>
            <td class='text-center'>
                <button class="btn btn-info" ng-click="editMember(memberlist1.membershipid)"><i class='fa fa-pencil'></i></button>&nbsp;
                <button class="btn btn-danger" ng-click="deleteMember(memberlist1.membershipid)"><i class='fa fa-user-times'></i></button>
            </td>
        </tr>
        </tbody>
    </table>
    <div  ng-hide="memberlistenable" class="clearfix">
    <blockquote>
        <h1 class='text-capitalize'>Sorry... No Member Found...</h1>
        <footer>Change argument to view user...</footer>
    </blockquote>
    <hr>
    </div>
    <script type="text/ng-template" id="confirmModalContent.html">
        <div class="modal-header">
            <h3 class="modal-title">Confirmation..</h3>
        </div>
        <div class="modal-body">
            {{message}} <b>{{ value }}</b> ?
        </div>
        <div class="modal-footer">
            <button class="btn btn-primary" ng-click="ok()">Ok</button>
            <button class="btn btn-warning" ng-click="cancel()">cancel</button>
         </div>
    </script>
    <script type="text/ng-template" id="updateModalContent.html">
        <div class="modal-header">
            <h3 class="modal-title">Update Member..</h3>
        </div>
        <div class="modal-body">
        <form name="signupForm" ng-submit="ok()" novalidate>
		<label>First Name:</label>
		<div class="input-group">
			<span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
			<input class="form-control" type="text" id="fname" ng-model="member.fname"  ng-init="member.fname = fname" name="fname" placeholder="First Name" ng-maxlength="20" ng-minlength=3 required>
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
			<input class="form-control" type="text" id="lname" name="lname" placeholder="Last Name" ng-model="member.lname" ng-init="member.lname = lname" ng-minlength="1" maxlength="20" required>
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
			<select class="form-control" id="sex" name="sex" ng-model="member.sex" ng-init="member.sex = sex">
			<option value="Male" selected>Male</option>
			<option value="Female">Female</option>
                        <option value="">None</option>
			</select>
		</div><br>
		<label>Date of Birth:( EX: 29/05/1991)</label>
<!--		<div class="input-group">
			<span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
			<input class="form-control" name="dob" id="dob" type="text" placeholder="dd/mm/yyyy" required="">
		</div><br>-->
                <div class="input-group" ng-controller="CalendarControl">
                    <span class="input-group-addon" ng-click="open($event)"><i class="fa fa-calendar fa-fw"></i></span>
                    <input type="text" class="form-control" name="dob" id="dob" placeholder="Click Calendar icon" datepicker-popup="yyyy-MM-dd" ng-model="member.dob" ng-init="member.dob = dob"
                           is-open="opened" max-date="'2015-06-22'" datepicker-options="dateOptions" date-disabled="disabled(date, mode)" ng-required="true" close-text="Close" />
                </div><br/>
		<label>Occupation:</label>
		<div class="input-group">
			<span class="input-group-addon"><i class="fa fa-suitcase fa-fw"></i></span>
			<input class="form-control" name="occupation" id="occupation" type="text" placeholder="" ng-model="member.occupation" ng-init="member.occupation = occupation" ng-minlength="3" maxlength="20" required>
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
                        <select class="form-control" id="bloodgroup" name="bloodgroup" ng-model="member.bloodgroup" ng-init="member.bloodgroup = bloodgroup">
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
                    <input type="radio" name="schemes" id="basic-radio" value="Basic" ng-model="member.schemes" ng-init="member.schemes = schemes"> Basic
		</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<label class="radio-inline">
		<input type="radio" name="schemes" id="premium-radio" value="Premium" checked="true" ng-model="member.schemes" ng-init="member.schemes = schemes"> Premium
		</label>
		</div>
		<label>Mail Id:</label>
		<div class="input-group">
			<span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
			<input class="form-control" name="email" id="email" type="text" placeholder="example@domain.com" ng-model="member.email" ng-init="member.email = email" ng-minlength=3 ng-maxlength=30 required="">
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
			<input class="form-control" name="phone" id="phone" type="text" placeholder="XXXXXXXXXX" ng-model="member.phone" ng-init="member.phone = phone" ng-minlength=10 ng-maxlength=10 required="">
		</div><br>
                <div class="error-container" ng-show="signupForm.phone.$dirty && signupForm.phone.$invalid">
                         <small class="error" ng-show="signupForm.phone.$error.required">Your Number is required.</small>
                         <small class="error" ng-show="signupForm.phone.$error.minlength">Your Number is required to be at least 10 Numbers</small>
                         <small class="error" ng-show="signupForm.phone.$error.maxlength">Your Number cannot be longer than 10 Number</small>
                       </div>
		<label>Address:</label>
		<div class="input-group">
			<span class="input-group-addon"><i class="fa fa-home fa-fw"></i></span>
			<textarea class="form-control" name="address" id="address" rows="3" ng-model="member.address"  ng-init="member.address = address" ng-minlength=10></textarea>
		</div><br>
                <input type="hidden" name="membershipid" id="membershipid" ng-model="member.membershipid" ng-init="member.membershipid = membershipid"/>
                <div class="error-container" ng-show="signupForm.address.$dirty && signupForm.address.$invalid">
                    <small class="error" ng-show="signupForm.address.$error.required">Your Address is required.</small>
                    <small class="error" ng-show="signupForm.address.$error.minlength">Your Address is required to be at least 10 Numbers</small>
                </div>
                <br>
                <button  type="submit" class="btn btn-primary">Update</button>
                <button class="btn btn-warning" ng-click="cancel()">cancel</button>

        </form>
        </div>
        
    </script>
  </div>
   </div>
</div>