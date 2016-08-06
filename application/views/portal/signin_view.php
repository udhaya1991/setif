<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="container">
<div class="row">
    <div class="col-md-4 col-lg-offset-4 clearfix mb20 mt20">
        <form role="form" method="post" accept-charset="utf-8" action="<?php echo site_url();?>index.php/admin/login">
                <div class="mt20 mb20 text-center">
                <h1 class="section-heading"><i class="fa fa-user-secret fa-5x"></i></h1>
                </div>
                <h2>Admin Login</h2>
                <div class="text-danger">
                    <?php 
                    if(isset($error)) {
                        echo $error;
                    }
                    ?>
                </div>
                <hr class="colorgraph">
                <div class="form-group">
                    <label for="membershipid">Membership id</label>
                    <input type="text" name="membershipid" id="membershipid" class="form-control" placeholder="membershipid" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                </div>
                <hr class="colorgraph">
                <input type="submit" class="btn btn-success btn-block btn-sm" value="Sign in">
        </form>
        
    </div>
    
<!--    <div class="col-md-6 col-sm-6">
        <form role="form">
                <h2>Membership Amount Checking<small></small></h2>
                <hr class="colorgraph">
                <div class="form-group">
                    <label for="membershipid">Membership id</label>
                    <input type="text" name="membershipid" id="membershipid" class="form-control" placeholder="membershipid" tabindex="1">
                </div>
                <div class="form-group">
                    <label for="password">Year</label>
                    <select class="form-control">
                        <option value="2009">2009</option>
                        <option value="2010">2010</option>
                        <option value="2011">2011</option>
                        <option value="2012">2012</option>
                        <option value="2013">2013</option>
                        <option value="2014">2013</option>
                    </select>
                </div>
                <hr class="colorgraph">
                <a href="#" class="btn btn-success btn-block btn-sm">Sign In</a>
        </form>
    </div>-->
</div>
</div>

