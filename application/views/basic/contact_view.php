<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="container">
        <!-- Content Row -->
        <div class="row">
            <div class="mt20">
            <!-- Map Column -->
            <div class="col-md-8">
                <!-- Embedded Google Map -->
                <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed&amp;mrt=all"></iframe>
            </div>
            <!-- Contact Details Column -->
            <div class="col-md-4">
                <h3>Contact Details</h3>
                <h4>SET India Foundation</h4>
                <p>
                    NO. 5/9, KASTHURI STREET KESAVA NAGAR,<br>VANDAVASI - 604408<br>THIRUVANNAMALAI<br>TAMIL NADU, INDIA<br>
                </p>
                <p><i class="fa fa-phone"></i> 
                    <abbr title="Phone">P</abbr>: 9994783677</p>
                <p><i class="fa fa-envelope-o"></i> 
                    <abbr title="Email">E</abbr>: <a href="mailto:setif209@gmail.com">setif209@gmail.com</a>
                </p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li>
                        <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="col-md-8" ng-controller="ContactControl">
                <h3>Send us a Message</h3>
                <form name="contactForm" id="contactForm" ng-submit="submitContactForm()" novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Full Name:</label>
                            <input type="text" class="form-control" name="name" id="name" ng-model="name" ng-minlength=3 required>
                            <div class="error-container">
                            <div class="error" 
                                ng-show="contactForm.name.$dirty && contactForm.name.$invalid">
                            <small class="error" 
                                ng-show="contactForm.name.$error.required">
                                Your name is required.
                            </small>
                            <small class="error" 
                                    ng-show="contactForm.name.$error.minlength">
                                    Your name is required to be at least 3 characters
                            </small>
                            <small class="error" 
                                    ng-show="contactForm.name.$error.maxlength">
                                    Your name cannot be longer than 20 characters
                            </small>
                            </div>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Phone Number:</label>
                            <input type="text" name="phone" ng-model="phone" ng-minlength=10 ng-maxlength=10 class="form-control" id="phone" required>
                        </div>
                        <div class="error-container" ng-show="contactForm.phone.$dirty && contactForm.phone.$invalid">
                         <small class="error" ng-show="contactForm.phone.$error.required">Your Number is required.</small>
                         <small class="error" ng-show="contactForm.phone.$error.minlength">Your Number is required to be at least 10 Numbers</small>
                         <small class="error" ng-show="contactForm.phone.$error.maxlength">Your Number cannot be longer than 10 Number</small>
                       </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email Address:</label>
                            <input type="email" name="email" class="form-control" ng-model="email" ng-minlength=3 ng-maxlength=20 id="email" required>
                        </div>
                        <div class="error-container" ng-show="contactForm.email.$dirty && contactForm.email.$invalid">
                         <small class="error" ng-show="contactForm.email.$error.required">Your email is required.</small>
                         <small class="error" ng-show="contactForm.email.$error.minlength">Your email is required to be at least 3 characters</small>
                         <small class="error" ng-show="contactForm.email.$error.email">That is not a valid email. Please input a valid email.</small>
                         <small class="error" ng-show="contactForm.email.$error.maxlength">Your email cannot be longer than 20 characters</small>
                       </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea rows="10" cols="100" class="form-control" name="message" ng-minlength=10 ng-model="message" id="message" required maxlength="999" style="resize:none"></textarea>
                        </div>
                        <div class="error-container" ng-show="contactForm.message.$dirty && contactForm.message.$invalid">
                         <small class="error" ng-show="contactForm.message.$error.required">Your message is required.</small>
                         <small class="error" ng-show="contactForm.message.$error.minlength">Your message is required to be at least 3 characters</small>
                        </div>
                    </div>
                    <div ng-show="contactForm.contacinfo" class="form-success text-success">Your message is successfully send..</div>
                    <button type="submit" ng-disabled="contactForm.$invalid" class="btn btn-primary">Send Message</button>
                </form>
            </div>
        </div>
            <div class="col-md-4" class="mt20">
                <h3 class="mt20">Bank Account Details</h3>
                <br/>
                <p class="mt20">
                    SHRIKANTH P,<br>STATE BANK OF INDIA<br>NELSON MANICKAM ROAD BRANCH<br>CHENNAI<br>
                </p>
                <p>CODE NO: 11606</p>
                <p>ACC NO: 32690617870</p>
            </div>
        
        </div>
    </div>
    <!-- /.container -->

