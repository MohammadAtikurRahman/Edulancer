<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/salt/jquery/pages/samples/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Dec 2017 12:33:56 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Edulancer</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../node_modules/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="../../node_modules/font-awesome/css/font-awesome.min.css" />
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.html" />


  
</head>
@yield('boots')
<body class="sidebar-dark">
  <div class="container-scroller">



    <div class="container-fluid page-body-wrapper">
      <div class="row">


       
        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth-pages">
      

        
          <div class="card col-lg-10 mx-auto">

            <div class="card-body px-5 py-5">


              <h3 class="card-title text-left mb-3">Register As a Student</h3>
              <form method="post" action ="{{ url('/student_reg') }}">

                {{csrf_field()}}
               
                            <div class="form-row">
                              <div class="form-group col-md-4">
                                <label for="inputName4">Name</label>
                                <input type="text" class="form-control" name="s_name" placeholder="Enter Your Name" required>
                              </div>
                              <div class="form-group col-md-4">
                                <label for="inputEmail4">Email</label>
                                <input type="email" class="form-control" name="s_email"  placeholder="Enter Your Email">
                              </div>
                              <div class="form-group col-md-4">
                                <label for="inputEmail4">Password</label>
                                <input type="password" class="form-control" name="s_password"  placeholder="Enter Your Email">
                              </div>

                                <div class="form-group col-md-6">
                                 <label for="inputName4">School </label>
                                 <input type="text" class="form-control" name="s_school" placeholder="Enter Your School Name">
                                </div>
                                <div class="form-group col-md-6">
                                 <label for="inputEmail4">College</label>
                                 <input type="text" class="form-control" name="s_college" placeholder="Enter Your College Name">
                                </div>
                                <div class="form-group col-md-6">
                                 <label for="inputEmail4">University</label>
                                 <input type="text" class="form-control" name="s_university" placeholder="Enter Your University Name">
                                </div>
                                <div class="form-group col-md-6">
                                          <label for="inputGender4">Gender</label>
                                                <select class="form-control form-control-lg" name="s_gender" >
                                                <option selected>Choose...</option>
                                                <option value="female">Female</option>
                                                <option value="male">Male</option>

                                              </select>
                               </div>
                                                              



                            </div>






                            <div class="form-group">
                              <label for="inputAddress">Address</label>
                              <input type="text" class="form-control" name="s_address" placeholder="Enter Your Address">
                            </div>
                            <!-- <div class="form-group">
                              <label for="inputAddress2">Address 2</label>
                              <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                            </div> -->
                            <div class="form-row">
                              <div class="form-group col-md-4">
                                <label for="inputCity">City</label>
                                <input type="text" class="form-control" id="inputCity" name="s_city"   placeholder="Enter Your City"  >
                              </div>
                              <div class="form-group col-md-4">
                                <label for="inputCity">Thana</label>
                                <input type="text" class="form-control" id="inputCity"      name="s_thana"   placeholder="Enter Your Thana"                >
                              </div>
                              
                              <div class="form-group col-md-4">
                                <label for="inputZip">Zip</label>
                                <input type="text" class="form-control" id="inputZip"  name="s_zip"   placeholder="Enter Your ZIP"        >
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="form-check">
                               
                              </div>
                            </div>
                            <button type="submit" class="btn btn-success" style="background-color:#7d00e4;color:white;border-color:#7d00e4">Register</button>


                
              </form>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- row ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../node_modules/jquery/dist/jquery.min.js"></script>
  <script src="../../node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="../../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="../../node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/misc.js"></script>
  <script src="../../js/settings.js"></script>
  <!-- endinject -->
</body>


<!-- Mirrored from www.urbanui.com/salt/jquery/pages/samples/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Dec 2017 12:33:56 GMT -->
</html>
