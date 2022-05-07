<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            @if(!empty($title))
            {{ $title }}
            @else
            {{ 'Quick Profile' }}
            @endif
        </title>

        <!-- ========== COMMON STYLES ========== -->
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


    </head>
<body class="top-navbar-fixed">
<div class="main-wrapper">

    <!-- ========== TOP NAVBAR ========== -->

    <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
    <div class="content-wrapper">
        <div class="content-container">

            <div class="main-page">
                <div class="container-fluid">
                    
                    <div class="row page-title-div">
                        <div class="col-md-6">
                            <h2 class="title">User Registration</h2>
                            <p class="sub-title">This is user registration form!</p>
                        </div>
                    </div>
                    
                </div>
                <!-- /.container-fluid -->

                <section class="section">
                    <div class="container-fluid">
                        @if (session()->get('error'))
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert"></button>
                            <strong>{{ session()->get('error') }} </strong>
                        </div>
                        @endif
                        @if (session()->get('success'))
                            <div class="alert alert-success" style="width: 20%;">
                                <button type="button" class="close" data-dismiss="alert"></button>
                                <strong>{{ session()->get('success') }} </strong>
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-md-10">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h5>Registration Form</h5>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <form class="col-md-6 col-md-offset-1" action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                                            @csrf                                           

                                            <div class="form-group">
                                                <label for="name">Full Name :</label>
                                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter Your Full Name">
                                                @if ($errors->has('name'))
                                                    <div class="text-danger">
                                                        {{ $errors->first('name') }}
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="form-group">                                              
                                                <label for="exampleInputEmail1">Email :</label>
                                                <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Enter Your Email Id">
                                                @if ($errors->has('email'))
                                                    <div class="text-danger">
                                                        {{ $errors->first('email') }}
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="name">User Name :</label>
                                                <input type="text" class="form-control" name="username" id="username" placeholder="Enter Your User Name">
                                                @if ($errors->has('username'))
                                                    <div class="text-danger">
                                                        {{ $errors->first('username') }}
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="name">Mobile :</label>
                                                <input type="number" class="form-control" name="mobile" id="mobile" placeholder="Enter Your Mobile Number">
                                                @if ($errors->has('mobile'))
                                                    <div class="text-danger">
                                                        {{ $errors->first('mobile') }}
                                                    </div>
                                                @endif
                                            </div>
                                            
                                            
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Password :</label>
                                                <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
                                                @if ($errors->has('password'))
                                                    <div class="text-danger">
                                                        {{ $errors->first('password') }}
                                                    </div>
                                                @endif
                                            </div>                        
                                            
                                            <div class="form-group">
                                                <label for="description">About Me :</label>
                                              
                                                <textarea class="form-control" name="about_me" id="about_me" cols="10" rows="5" placeholder="About Me"></textarea>
                                                @if ($errors->has('about_me'))
                                                    <div class="text-danger">
                                                        {{ $errors->first('about_me') }}
                                                    </div>
                                                @endif
                                            </div>                                                              
                                                                                                                                   
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>                                     
                                    </div>
                                </div>
                            </div>
                            <!-- /.col-md-6 -->
                        </div>
                    </div>
                </section>
                <!-- /.section -->

            </div>
            <!-- /.main-page -->

            <!-- /.right-sidebar -->

        </div>
        <!-- /.content-container -->
    </div>
    <!-- /.content-wrapper -->

</div>
<!-- /.main-wrapper -->
<style>
    section.footer {
    /* width: calc(100% - 270px); */
    /* margin: 0 auto; */
    /* float: right;
    position: relative;
    bottom: 43px;
    right: 0; */
    background: #dad5d5;
    padding: 1px;
}
.copyright {
    text-align: center;
    padding: 0px 0;
    /* padding-top: 20px; */
}
</style>


<section class="footer">
    <div class="copyright">
        <h6 style="margin: 4px;">Copyright © 2022<a href="#" target="_blank"> Quick Profile.</a><span class="license"> All Right Reserve.</span></h6>
    </div>
</section>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->
</body>
</html>