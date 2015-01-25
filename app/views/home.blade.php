@extends('layouts.master')

@section('content')

<!-- HOME START -->
<section id="home">
  <div class="demo-container">
    <div id="placeholder" class="demo-placeholder"></div>
  </div>
  <div class="container">
  <div class="col-xs-12">
      <h1 class="expandOpen headline_home"><strong>Know how engaged your buyers and sales team are across your entire deal pipeline.</strong></h1>
  </div>
  <div class="col-xs-12" id="home_content">
      <p class="main_section_par">Sameplace puts a real-time deal-engagement dashboard in the palm of your hand.</p>
  </div> 
  <div class="col-xs-12">
    <div class="aaa">
      <div class="expandOpen svm">SIMPLE <span class="header_dot">&middot;</span> <span class="grayc">VISUAL</span> <span class="header_dot">&middot;</span> MOBILE</div>
    </div>
  </div>
</section>

<section id="section" class="real_time_deal">
  <div class="container">
  <div id="real_time1">
    <div class="col-xs-12 col-sm-8">
        <h1 class="headline_home main_headline" id="headline_home"><strong>A real-time deal-engagement dashboard in the palm of your hand</strong></h1>
        <p id="main_paragraph">Sameplace uses the email exchanges you and your sales team are already having with pipeline opportunities to extract and inform you of key deal engagement metrics you want to know.</p>
    </div>
  </div>
  <div id="real_time2" class="clearfix">
    <div class="col-xs-12 col-sm-8" id="home_content">
      <h1 id="headline_home"><strong>Examples</strong></h1>
      <ul>
        <li>How responsive are buyers to my sales team’s emails? </li>
        <li>Are buyers becoming more or less engaged? </li>
        <li>What sales content have we shared with an opportunity? </li>
        <li>How long is it taking my team to respond to buyer questions?</li>
      </ul>
    </div> 
  </div>
</section>

<!-- Profile Page START -->
<section id="section1">
  <div class="container">
    <div id="section1_p">
      <div class="col-xs-12 col-sm-8" id="headline_home">
       <h1 id="big_h_elem"><strong>ALL GAIN WITH NO PAIN</strong></h1>
       <h2><strong>No data entry required. No IT setup. No Kidding.</strong></h2>
       <p id="main_paragraph">Sameplace is a mobile app and service that you can be 
       beneﬁting from in less than 5 minutes. </p> 
       </div>
    </div>      
  </div>
</section>

<!-- SECTION 2 START -->
<section id="section2">
  <div class="container">
    <div id="section2_p">
      <div class="col-xs-12 col-sm-8" id="headline_home">
       <h4>STAY UP TO DATE WITH PRODUCT ANNOUNCEMENTS</h4>
       <div id="main_paragraph">
        <form class="form-inline" role="form" ng-submit="processSubmit()">
          <input type="email" class="form-control" placeholder="Email" id="email_input" ng-model="email_subscribe">
          <button type="submit" class="btn btn-success">Subscribe</button>
        </form>
        <button class="btn btn-lg btn-facebook" id="social_button"><i class="fa fa-facebook"></i></button>
        <button class="btn btn-lg btn-twitter" id="social_button"><i class="fa fa-twitter"></i></button>
        <button class="btn btn-lg btn-linkedin" id="social_button"><i class="fa fa-linkedin"></i></button>
        {{subscribe_message}}
       </div>
     </div>
    </div>
  </div>
</section>
<script>
  homePage = true;
</script>
	
@stop