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
        </div>
        <!-- /.content-container -->
    </div>
    <!-- /.content-wrapper -->

</div>
<!-- /.main-wrapper -->

@include('common.footer')