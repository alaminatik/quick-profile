
@include('common.header')

<div class="main-wrapper">

    <!-- ========== WRAPPER CONTENT ========== -->

    <div class="content-wrapper">
        <div class="content-container">
            <!-- /.main-page -->
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
                                                        {{ 'Your password must be more than or equal 6 characters long, should contain at-least 1 Uppercase, 1 Lowercase, 1 Numeric and 1 special character.' }}
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

        </div>
        <!-- /.content-container -->
    </div>
    <!-- /.content-wrapper -->

</div>
<!-- /.main-wrapper -->

@include('common.footer')