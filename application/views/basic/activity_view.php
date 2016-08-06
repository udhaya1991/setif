<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<div class="container">
    <div class="text-center mt20 mb20">
            <h2 class="section-heading ">Previous Activities</h2>
            <h2 class="section-subheading">Still going on its way with your support...</h2>
    </div>
    <div ng-controller="ActivityControl" ng-init="activity.activitytype = 'All';activity.activityyear='2013';">
    <form name="activityFrontForm" ng-submit="submitActivityFrontForm()" class="form-inline">
        <div class="form-group">
          <label for="activityyear">Activity Year</label>
          <select class="form-control" id="activityyear"  name="activityyear" ng-model="activity.activityyear">
              <option value="2012">2012</option>
              <option value="2013">2013</option>
              <option value="2014">2014</option>
              <option value="2015">2015</option>
          </select>
        </div>
        <div class="form-group">
          <label for="activitytype">Activity Type</label>
          <select class="form-control" id="activitytype" name="activitytype" ng-model="activity.activitytype">
              <option value="greeny">Greeny India</option>
              <option value="healthy">Healthy India</option>
              <option value="mighty">Mighty India</option>
              <option value="meeting">Meeting</option>
              <option value="All">All</option>
          </select>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
   <hr class="colorgraph">
   <div class="mt20 mb20">
    <div  ng-show={{activityenable}} class="clearfix" ng-repeat="activitylist1 in activitylist">
    <blockquote>
        <h4 class='text-capitalize'>{{activitylist1.activity_heading}} - {{activitylist1.activity_place}}</h4>
        <footer>{{activitylist1.activity_date}}</footer>
        <p class='text-capitalize'>{{activitylist1.activity_desc}}</p>
    </blockquote>
    <hr>
    </div>
    <div  ng-hide="activityenable != false" class="clearfix">
    <blockquote>
        <h1 class='text-capitalize'>Sorry... No Activity happened...</h1>
        <footer>Please change a year and activity type...</footer>
    </blockquote>
    <hr>
    </div>
    
  </div>
   </div>
</div>