<?php

?>

<div class="container">
<div class="row">
<div ng-controller="SliderControl">
  <div>
    <carousel interval="myInterval">
      <slide ng-repeat="slide in slides" active="slide.active">
        <img style="width: 100%;" ng-src="{{slide.image}}" style="margin:auto;">
<!--        <div class="carousel-caption">
          <h4>{{slide.text}}</h4>
          <p>{{slide.text}}</p>
        </div>-->
      </slide>
    </carousel>
  </div>
</div>
</div>
</div>
    <div class="container">
        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header text-primary">
                    SET India Foundation
                </h3>
            </div>
            <div class="col-md-12">
            <div class="info-primary">
                <h4 class="text-center">
                    <em>"A few heart-whole, sincere, and energetic men and women can do more in a year than a mob in a century"</em>
                </h4>
                <p class="text-right text-primary text-capitalize">- Swamy Vivekananda</p>
                <h4 class="text-primary ml20"><u>Mission:</u></h4>
                <p class="text-left ml20 mr20">
                    <span class="text-primary">SET India Foundation</span> is a non profit and a non-governmental organization, active in the upliftment of the poor rural people in education and health, with active youth participation, savouring the flavour of service to mankind.  
                </p>
            </div>
            </div>
            <div class="col-md-4 text-center mt20">
                <i class="fa fa-university icon major brown-background"></i>
                <h4 class="text-primary"><u>Mighty India</u></h4>
                <p>Under this plan we have conducted programs to educate rural children, those who are deprived of their right to education. We work to provide them free and quality education and also encourage them in arts. Teaching them Yoga is also part of this program.</p>
            </div>
            <div class="col-md-4 text-center mt20">
                <i class="fa fa-leaf icon major green-background"></i>
                <h4 class="text-primary"><u>Green India</u></h4>
                <p>Under this plan, our prime motto is to create a green environment, for which we have conducted program on tree sampling plantation. Further plans are to conduct awareness camps to avoid use of plastics, conservation of water and importance of pollution free environment.</p>
            </div>
            <div class="col-md-4 text-center mt20">
                <i class="fa fa-stethoscope icon major blue-background"></i>
                <h4 class="text-primary"><u>Healthy India</u></h4>
                <p>We work to create awareness among people on ill effects of smoking and its consequences. We have conducted Anti-tobacco programs, Free medical camps in rural areas to emphasis on sanitation practices. </p>
            </div>
        </div>
    </div>
       	