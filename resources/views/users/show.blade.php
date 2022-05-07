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
                            <h2 class="title">User Profile</h2>
                            <p class="sub-title">This is user Profile info!</p>
                        </div>
                    </div>
                    
                </div>
                <!-- /.container-fluid -->

                <section class="section">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-10">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            
                                        </div>
                                    </div>
                                    <div class="panel-body">                                                                              

                                            <div class="form-group">
                                                <label for="name">Full Name :</label> {{ $users->name }}
                                            </div>
                                            <div class="form-group">                                              
                                                <label for="exampleInputEmail1">Email :</label>{{ $users->email }}                                              
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="name">Mobile :</label>{{ $users->mobile }}                                             
                                            </div>
                                            <div class="form-group">
                                                <label for="name">Ratting :</label>{{ $users->ratings }}                                     
                                            </div>
                                                                                                                                                       
                                            <div class="form-group">
                                                <label for="description">About Me :</label>
                                            <br>
                                                {{ $users->about_me }}
                                                
                                            </div>                                                                                                                                                                                                                                                                           
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