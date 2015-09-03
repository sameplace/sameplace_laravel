<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
  <meta charset="utf-8">
  <title>Sameplace</title>
  <meta name="viewport" content="width=device-width; initial-scale=1.0;">

    <% HTML::style('css/animation.css'); %>
    <% HTML::style('css/bootstrap.min.css'); %>
    <% HTML::style('css/social_buttons.css'); %>
    <% HTML::style('css/charts.css'); %>
    <% HTML::style('//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css'); %>
    <% HTML::style('//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css'); %>
    <% HTML::style('http://fonts.googleapis.com/css?family=Dosis'); %>
    <% HTML::style('css/styles.css'); %>
    
    <% HTML::script('js/jquery.min.js'); %>
    <% HTML::script('//code.jquery.com/ui/1.11.2/jquery-ui.js'); %>
    <% HTML::script('js/bootstrap.min.js'); %>
    <% HTML::script('js/responsive-nav.js'); %>
    <% HTML::script('js/jquery.flot.min.js'); %>
    <% HTML::script('js/angular/angular.min.js'); %>
    <% HTML::script('js/angular/angular-ui-bootstrap.js'); %>
    <% HTML::script('//code.angularjs.org/1.2.16/angular-cookies.min.js'); %>
    <% HTML::script('js/model/mainApp.js'); %>
    <% HTML::script('js/controller/tabsController.js'); %>
    <% HTML::script('js/controller/adminController.js'); %>
    <% HTML::script('js/homepage.js'); %>
    <% HTML::script('http://angular-ui.github.io/bootstrap/ui-bootstrap-tpls-0.11.0.js'); %>

    <link href='http://fonts.googleapis.com/css?family=Arimo' rel='stylesheet' type='text/css'>
  
  </head>

<!-- applied module and controller -->
  <body ng-app="mainApp" ng-controller="mainController" @if($buyer_page) class="bg_gray" @endif >
  
  <nav class="navbar navbar-default" role="navigation" id="header" @if(isset($home_page) && $home_page==true) style="background-color:#1C1C1C;" @endif >
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
     <div class="navbar-header">
            @if($buyer_page==false) 
             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
             </button>
            @endif
           <a class="navbar-brand" href="/">Sameplace</a>
         </div>
         <div class="navbar-collapse collapse">

           <div class="navbar-form navbar-right">

              <ul class="list-inline">
                @if($buyer_page==false) 
                  @if($logged)
                    <li><a href="/logout">Log out</a></li>
                    <li><a href="dealspaces">Dealspaces</a></li>
                    <li><a href="profile">Profile</a></li>
                  </ul>
                  @else
                    <li><a id="toggler" onclick="showme('widget', this.id);" href="#">Log in</a></li>
                  </ul>
                    <form id="widget" ng-submit="processLogin()">
                      <div class="form-group">
                        <input type="text" placeholder="Email" class="form-control" id="email" name="email" ng-model="email" onblur="if (this.placeholder=='') this.placeholder='Email';" onfocus="if (this.placeholder=='Email') this.placeholder='';">
                      </div>
                        <div class="form-group">
                        <input type="password" placeholder="Password" class="form-control" id="password" name="password" ng-model="password" onblur="if (this.placeholder=='') this.placeholder='Password';" onfocus="if (this.placeholder=='Password') this.placeholder='';">
                      </div>
                        <button type="submit" data-toggle="modal" data-target="#myModal" class="btn btn-success transition">Go</button>
                    </form>
                  @endif
                @endif


           </div>
         </div><!--/.navbar-collapse -->
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                </div>
                <div class="modal-body {{message_class}}">
                  {{login_message}}
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
       </div>
    </div><!-- /.container-fluid -->
  </nav>
  @if(isset($home_page) && $home_page==true)
    <div class="nav-collapse">
        <ul>
            <li class="active"><a href='#home' data-scroll></a></li>
            <li><a href='#section' data-scroll></a></li>
            <li><a href='#section1' data-scroll></a></li>
            <li><a href='#section2' data-scroll></a></li>
        </ul>    
    </div>
  @endif