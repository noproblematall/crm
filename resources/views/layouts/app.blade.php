<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="author" content="Yuyuan">

    <title>{{ config('app.name', 'CRM') }}</title>

    <!-- vendor css -->
    <link href="{{asset('lib/_fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    {{-- <link href="{{asset('lib/rickshaw/rickshaw.min.css" rel="stylesheet">
    <link href="{{asset('lib/select2/css/select2.min.css" rel="stylesheet"> --}}

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="{{asset('css/bracket.css')}}">
    <link rel="stylesheet" href="{{asset('css/bracket.oreo.css')}}">
    <link rel="stylesheet" href="{{asset('lib/spinkit/css/spinkit.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <link href="{{ asset('lib/jquery_toast/jquery.toast.min.css') }}" rel="stylesheet">
    @yield('css')
  </head>
    @php
        $user = auth()->user();
    @endphp
  <body>
    <div id="app">

        @if(Session::has('success'))
            <input type="hidden" name="" id="success_message" value="{{ Session::get('success') }}">
        @else
            <input type="hidden" name="" id="success_message" value="">
        @endif
        @if(Session::has('error'))
            <input type="hidden" name="" id="error_message" value="{{ Session::get('error') }}">
        @else
            <input type="hidden" name="" id="error_message" value="">
        @endif


        <!-- ########## START: LEFT PANEL ########## -->
        <div class="br-logo"><a href="#"><span>[</span>ECO <i>ENERGY</i><span>]</span></a></div>
        @include('layouts.sidebar')
        
        <!-- ########## END: LEFT PANEL ########## -->

        <!-- ########## START: HEAD PANEL ########## -->
        <div class="br-header">
        <div class="br-header-left">
            <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href="index.html"><i class="icon ion-navicon-round"></i></a></div>
            <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href="index.html"><i class="icon ion-navicon-round"></i></a></div>        
        </div><!-- br-header-left -->
        <div class="br-header-right">
            <nav class="nav">
            
            
            <div class="dropdown">
                <a href="#" class="nav-link nav-link-profile" data-toggle="dropdown">
                <span class="logged-name hidden-md-down">{{ $user->username }}</span>
                <img src="{{ asset('img/img1.jpg') }}" class="wd-32 rounded-circle" alt="">
                <span class="square-10 bg-success"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-header wd-250">
                <div class="tx-center">
                    <img src="{{ asset('img/img1.jpg') }}" class="wd-80 rounded-circle" alt="">
                    <h6 class="logged-fullname">{{ $user->username }}</h6>
                    <p>{{ $user->email }}</p>
                </div>
                <hr>
                <ul class="list-unstyled user-profile-nav">
                    <li id="profile"><a href="#"><i class="icon ion-ios-person"></i> Edit Profile</a></li>
                    <li id="password_change"><a href="#"><i class="icon ion-key"></i> Change Password</a></li>
                    <li><a href="#" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"><i class="icon ion-power"></i> Sign Out</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                </ul>
                </div><!-- dropdown-menu -->
            </div><!-- dropdown -->
            </nav>        
        </div><!-- br-header-right -->
        </div><!-- br-header -->
        <!-- ########## END: HEAD PANEL ########## -->

        <!-- ########## END: RIGHT PANEL ########## --->

        <!-- ########## START: MAIN PANEL ########## -->
        <div class="br-mainpanel">
        
        @yield('content')

        <footer class="br-footer">
            <div class="footer-left">
            <div class="mg-b-2">Copyright &copy; 2020. Eco Energy CRM. All Rights Reserved.</div>
            {{-- <div>Attentively and carefully made by ThemePixels.</div> --}}
            </div>
            <div class="footer-right d-flex align-items-center">
            <span class="tx-uppercase mg-r-10">Share:</span>
            <a target="_blank" class="pd-x-5" href="#"><i class="fab fa-facebook tx-20"></i></a>
            <a target="_blank" class="pd-x-5" href="#"><i class="fab fa-twitter tx-20"></i></a>
            </div>
        </footer>
        </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
    </div>

    <!-- The Profile Modal -->
    <div class="modal fade effect-fall" id="profile_modal">
        <div class="modal-dialog" style="margin-top:100px;">
          <div class="modal-content">    
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Profile Edit</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>    
            <!-- Modal body -->
            <div class="modal-body">
              <div class="alert alert-success display_none" id="alert0" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <div class="d-flex align-items-center justify-content-start">
                    <i class="icon ion-ios-checkmark alert-icon tx-32 mg-t-5 mg-xs-t-0"></i>
                    <span><strong>Well done!</strong> Your profile was changed successfully.</span>
                  </div><!-- d-flex -->
                </div><!-- alert -->
                @csrf
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="icon ion-person tx-16 lh-0 op-6"></i></span>
                </div>
                <input type="text" id="username" class="form-control" placeholder="Username" value="{{ $user->username }}">
              </div><!-- input-group -->
              <br>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="icon ion-email tx-16 lh-0 op-6"></i></span>
                </div>
                <input type="text" id="email" class="form-control" placeholder="Email" value="{{ $user->email }}">
              </div><!-- input-group -->
            </div>
      
            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" id="profile_save">Save</button>
              <button type="button" id="profile_close" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
      
          </div>
        </div>
      </div>
      <!-- The Password Modal -->
      <div class="modal fade effect-fall" id="password_modal">
        <div class="modal-dialog" style="margin-top:100px;">
          <div class="modal-content">    
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Change Password</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>              
            </div>    
            <!-- Modal body -->
            <div class="modal-body">
              <div class="alert alert-success display_none" id="alert1" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <div class="d-flex align-items-center justify-content-start">
                  <i class="icon ion-ios-checkmark alert-icon tx-32 mg-t-5 mg-xs-t-0"></i>
                  <span><strong>Well done!</strong> The password was changed successfully.</span>
                </div><!-- d-flex -->
              </div><!-- alert -->
              <div class="alert alert-danger display_none" id="alert2" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <div class="d-flex align-items-center justify-content-start">
                  <i class="icon ion-ios-checkmark alert-icon tx-32 mg-t-5 mg-xs-t-0"></i>
                  <span><strong>Fail !</strong> The old password is incorrect.</span>
                </div><!-- d-flex -->
              </div><!-- alert -->
              <input class="form-control" id="old_password" placeholder="Old Password" type="password">
              <small class="first">Please enter old password</small>
              <br>
              <input class="form-control" id="new_password" placeholder="New Password" type="password">
              <small class="second">Please enter new password</small>
              <small class="third">Passwords must be match the confirmation.</small>
              <br>
              <input class="form-control" id="confirm_password" placeholder="Confirm Password" type="password">
            </div>
      
            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" id="password_save">Save</button>
              <button type="button" id="password_close" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
      
          </div>
        </div>
      </div>
      <div class="loader_container display_none">
        <div class="sk-three-bounce">
          <div class="sk-child sk-bounce1 bg-gray-800"></div>
          <div class="sk-child sk-bounce2 bg-gray-800"></div>
          <div class="sk-child sk-bounce3 bg-gray-800"></div>
        </div>
      </div>

    {{-- <script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('lib/jquery-ui/ui/widgets/datepicker.js')}}"></script>
    <script src="{{asset('lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('lib/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('lib/peity/jquery.peity.min.js')}}"></script>
    <script src="{{asset('lib/rickshaw/vendor/d3.min.js')}}"></script>
    <script src="{{asset('lib/rickshaw/vendor/d3.layout.min.js')}}"></script>
    <script src="{{asset('lib/rickshaw/rickshaw.min.js')}}"></script>
    <script src="{{asset('lib/jquery.flot/jquery.flot.js')}}"></script>
    <script src="{{asset('lib/jquery.flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('lib/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
    <script src="{{asset('lib/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('lib/echarts/echarts.min.js')}}"></script>
    <script src="{{asset('lib/select2/js/select2.full.min.js')}}"></script> --}}

    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('lib/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    {{-- <script src="{{asset('js/map.shiftworker.js')}}"></script>
    <script src="{{asset('js/ResizeSensor.js')}}"></script> --}}
    <script src="{{asset('js/bracket.js')}}"></script>
    {{-- <script src="{{asset('js/dashboard.js')}}"></script> --}}
    <script src="{{ asset('lib/jquery_toast/jquery.toast.min.js') }}"></script>
    <script>
        $(document).ready(function(){
          $('#password_close').click(function(){
            $('#old_password').val('');
            $('#new_password').val('');
            $('#confirm_password').val('');
            $('#alert1').addClass('display_none');
            $('#alert2').addClass('display_none');
          })
          $('#profile_close').click(function(){
            $('#username').val('');
            $('#email').val('');
            $('#alert0').addClass('display_none');
          })
          $('#profile').click(function(){
            $('#profile_modal').modal({backdrop:'static'});
          })
          $('#password_change').click(function(){
            $('#password_modal').modal({backdrop:'static'});
          })
  
          $('#profile_save').click(function(){
            $username = $('#username').val()
            $email = $('#email').val();
            if ($username == '' || $email == '') {
                alert('Please enter user name and email');
            }
            var formData = new FormData();
            formData.append('username', $username);
            formData.append('email', $email);
            formData.append('_token', $('input[name=_token]').val());
            $.ajax({
              url: 'profile',
              data: formData,
              type: 'post',
              contentType: false,
              processData: false,
              beforeSend: function () { $('.loader_container').removeClass('display_none'); },
              success: function(data){
                console.log(data);
                if(data.success != ''){
                  $('#alert0').removeClass('display_none');
                }
              }
            }).done(function () {
                $('.loader_container').addClass('display_none');
            })
  
          })
  
          $('#password_save').click(function(){
            let old_password = $('#old_password').val();
            let new_password = $('#new_password').val();
            let confirm_password = $('#confirm_password').val();
            if(old_password == ''){
              $('small.first').addClass('display_show');
              return false;
            }
            if(new_password == ''){
              $('small.first').removeClass('display_show');
              $('small.second').addClass('display_show');
              return false;
            }
            if(new_password != confirm_password){
              $('small.second').removeClass('display_show');
              $('small.third').addClass('display_show');
              return false;
            }
            $('small.first').removeClass('display_show');
            $('small.second').removeClass('display_show');
            $('small.third').removeClass('display_show');
            $.ajax({
              url: 'password',
              type: 'get',
              data: {old_password:old_password, new_password:new_password},
              beforeSend: function () { $('.loader_container').removeClass('display_none'); },
              success: function(data){
                if(data.error){
                  $('#alert1').addClass('display_none');
                  $('#alert2').removeClass('display_none');
                }else{
                  $('#alert2').addClass('display_none');
                  $('#alert1').removeClass('display_none');
                }
              }
            }).done(function () {
                $('.loader_container').addClass('display_none');
            })
          })
        })
  
        function toast_call(type, text, hideAfter = false, icon = 'success', bgColor = '#50aa5b') {
              $.toast({
                  heading: type,
                  text: text,
                  showHideTransition: 'slide',
                  icon: icon,
                  position: 'bottom-right',
                  hideAfter: 5000,
                  bgColor: bgColor,
              })
          }
      </script>
      @yield('script')
  </body>
</html>
