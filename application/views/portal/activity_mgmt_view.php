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
            <a href="<?php echo site_url();?>index.php/admin/logout">
                <button class="btn btn-white" title="Logout">
                <i class="fa fa-sign-out"></i>
                </button>
            </a>
        </div><!-- pull-right -->
    </div>
    <div class="col-md-8 col-md-offset-2" ng-controller="NewActivityControl" ng-init="activity.activity_type = 'mighty'">
    <h3><i class=" fa fa-history"></i>&nbsp;Activity Management</h3>
    <hr class="colorgraph">
    <div class="text-primary section-subheading">{{message}}</div>
        <form name="activityForm" ng-submit="submitActivityForm()" novalidate>
        <label>Heading:</label>
        <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-th-list fa-fw"></i></span>
                <input class="form-control" type="text" id="activity_heading" name="activity_heading" placeholder="Heading" ng-model="activity.activity_heading" required>
        </div><br>
        <label>Activity Type:</label>
        <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-bars fa-fw"></i></span>
                <select class="form-control" id="activity_type" name="activity_type" ng-model="activity.activity_type">
                    <option value="mighty">Mighty Activity</option>
                    <option value="greeny">Greeny Activity</option>
                    <option value="healthy">Healthy Activity</option>
                    <option value="meeting">Meeting</option>
                </select>
        </div><br>
        <label>Activity Date:</label>
        <div class="input-group" ng-controller="CalendarControl">
                <span class="input-group-addon" ><i class="fa fa-calendar fa-fw"></i></span>
                <input type="text" class="form-control" ng-click="open($event)" name="activity_date" id="activity_date" placeholder="Activity Date" datepicker-popup="yyyy-MM-dd" ng-model="activity.activity_date"
                       is-open="opened" max-date="'2015-06-22'" datepicker-options="dateOptions" date-disabled="disabled(date, mode)" ng-required="true" close-text="Close" />
        </div><br/>
        <label>Activity Place:</label>
        <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-map-marker fa-fw"></i></span>
                <input class="form-control" type="text" id="activity_place" name="activity_place" placeholder="Activity Place" ng-model="activity.activity_place" required>
        </div><br>
        <label>Activity Desc:</label>
        <div class="input-group">
			<span class="input-group-addon"><i class="fa fa-newspaper-o fa-fw"></i></span>
			<textarea class="form-control" name="activity_desc" id="activity_desc" rows="5" ng-model="activity.activity_desc"></textarea>
	</div><br>
        <button type="submit" class="btn btn-primary">Submit</button>
	<button type="reset" class="btn btn-cancel">Cancel</button>
        </form>
                    
</div>
</div>

