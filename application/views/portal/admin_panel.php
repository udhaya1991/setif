<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<div class="container mt10">
    <div class="msg-header">
        <div class="text-right">
            <a href="<?php echo site_url();?>index.php/admin/logout">
                <button class="btn btn-white" title="Logout">
                <i class="fa fa-sign-out"></i>
                </button>
            </a>
        </div><!-- pull-right -->
    </div>
    <div class="row m20">
        <div class="col-md-6 text-center">
            <a class="btn btn-lg btn-success" href="<?php echo site_url();?>index.php/admin/userMgmt">
                <i class="fa fa-user fa-5x pull-left"></i>User Management
            </a>
        </div>
        <div class="col-md-6 text-center">
            <a class="btn btn-lg btn-danger" href="<?php echo site_url();?>index.php/admin/activityMgmt">
                <i class="fa fa-history fa-5x pull-left"></i>Activity Management
            </a>
        </div>
        
    </div>
    <div class="row m20">
        <div class="col-md-6 text-center">
            <a class="btn btn-lg btn-info" href="#">
                <i class="fa fa-file-image-o fa-5x pull-left"></i>Gallery Management
            </a>
        </div>
        <div class="col-md-6 text-center">
            <a class="btn btn-lg btn-primary" href="#">
                <i class="fa fa-rupee fa-5x pull-left"></i>Fund Management
            </a>
        </div>
    </div>
    <div class="row m20">
        <div class="col-md-6 text-center">
            <a class="btn btn-lg btn-warning" href="#">
                <i class="fa fa-history fa-5x pull-left"></i>Cost Management
            </a>
        </div>
    </div>
    <br/>
    <br/>
    <br/>
</div>