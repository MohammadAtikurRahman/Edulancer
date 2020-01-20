

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


              <h3 class="card-title text-left mb-3">Register As a Teacher</h3>
              <form method="post" action ="{{ url('/reg_login') }}">
              <div class="container">
     <form>
     {{csrf_field()}}
                        <div class="form-row">
                          <div class="col-md-4 mb-3">
                            <label for="validationServer01">Name</label>
                            <input
                              type="text"
                              class="form-control"
                              id="validationServer01"
                              placeholder="User name"
                              required
                            />
                          </div>
                          <div class="col-md-4 mb-3">
                            <label for="validationServer02">Email</label>
                            <input
                              type="text"
                              class="form-control"
                              id="validationServer02"
                              placeholder="Example@demo.com"
                              required
                            />
                          </div>
                          <div class="col-md-4 mb-3">
                            <label for="validationServerPhone">Password</label>
                            <div class="input-group">
                              <input
                                type="password"
                                class="form-control"
                                id="validationServerUsername"
                                placeholder="Enter Password"
                                aria-describedby="inputGroupPrepend3"
                                required
                              />
                            </div>
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="col-md-6 mb-2 col-lg-4">
                        <label for="example-date-input" class="col-form-label">Birth Date</label>
                          
                            <input class="form-control" type="date" value id="example-date-input" />
                          </div>
                          <div class="col-md-4 mb-3 col-lg-4">
                        <label for="validationCustom01">Phone Number</label>
                        <input type="number" class="form-control" id="validationCustom01" placeholder="01xxxxxxxxx"  required>
                      </div>
                          <div class="form-inline">
                            <label class="col-4">Gender</label>
                            <div class="form-check form-check-inline">
                              <input
                                class="form-check-input"
                                type="radio"
                                name="inlineRadioOptions"
                                id="inlineRadio1"
                                value="option1"
                              />
                              <label class="form-check-label" for="inlineRadio1">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input
                                class="form-check-input"
                                type="radio"
                                name="inlineRadioOptions"
                                id="inlineRadio2"
                                value="option2"
                              />
                              <label class="form-check-label" for="inlineRadio2">Female</label>
                          
                          </div>
                        </div>
                        </div>
                        <div class="form-group">
                          <label for="inputAddress">School</label>
                          <input type="text" class="form-control" id="inputAddress" placeholder="School name" />
                        </div>
                        <div class="form-group">
                          <label for="inputAddress2">College</label>
                          <input
                            type="text"
                            class="form-control"
                            id="inputAddress2"
                            placeholder="College name"
                          />
                        </div>
                        <div class="form-group">
                          <label for="inputAddress">University</label>
                          <input type="text" class="form-control" id="inputAddress" placeholder="University name" />
                        </div>
                        <div class="form-row">
                        <div class="col-lg-5 col-md-4 my-2">
                        <label class="mr-sm-2" for="inlineFormCustomSelect">Depertment</label>
                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                          <option selected>Choose one...</option>
                          <option value="1">Science</option>
                          <option value="2">Commerce</option>
                          <option value="3">Arts</option>
                        </select>
                      </div>
                    <div class="col-lg-7 col-md-4 my-2">
                      <label for="exampleSelect1">Select Area</label>
                      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                            <option selected>Choose one...</option>
                        <option>Boshila</option>
                        <option>Notunbazar</option>
                        <option>Old dhaka</option>
                        <option>Mohammadpur</option>
                      </select>
                    </div>
                        </div>
                        
                          <!-- <div class="col-md-6 mb-3">
                            <label for="validationServer03">Permerant Addresss</label>
                            <textarea
                              type="text"
                              class="form-control"
                              id="validationServer03"
                              placeholder=""
                              required
                            />
                          </div> -->
                          <!-- <div class="col-md-6 mb-3">
                            <label for="exampleFormControlTextarea1">Present Address</label>
                            <textarea  class="form-control" id="exampleFormControlTextarea1"
                            
                              
                             
                            rows="3"
                              required
                            />
                          </div> -->
                          
                          <div class="form-row">
                      <div class="col-md-4 mb-2 col-lg-6">
                        <label for="validationTooltip09">Present Address</label>
                        <input type="text" class="form-control" id="validationTooltip09" placeholder="Enter your present addresss" />
                      </div>
                      <div class="col-md-4 mb-2 col-lg-6">
                        <label for="validationTooltip08">Parmanent Address</label>
                        <input type="text" class="form-control" id="validationTooltip08" placeholder="Enter your present addresss">
                        
                      </div>
                  

                        </div>
                  <div class="form-row">
                      <div class="col-md-4 mb-2 col-lg-6">
                        <label for="validationTooltip01">National Id Card</label>
                        <input type="text" class="form-control" id="validationTooltip01" placeholder="If Available" >
                      </div>
                      <div class="col-md-4 mb-2 col-lg-6">
                        <label for="validationTooltip02">Passport Id</label>
                        <input type="text" class="form-control" id="validationTooltip02" placeholder="If Available">
                        
                      </div>
                  </div>
                  <div class="form-group">
                      <!-- <label for="exampleInputFile">Photo Upload</label>
                      <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                      <small id="fileHelp" class="form-text text-muted">Photo size 00 kb.Photo height 00 pixels and width 00 pixels.</small> -->
                    </div>
                    <div class="form-group">

                        <div class="form-inline">

                            <label class="col-3 mb-3">Previous Tution Experience</label>
                            <div class="form-check form-check-inline">
                              <input
                                class="form-check-input"
                                type="radio"
                                name="inlineRadioOptions"
                                id="inlineRadio1"
                                value="option1"
                              />
                              <label class="form-check-label" for="inlineRadio1">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input
                                class="form-check-input"
                                type="radio"
                                name="inlineRadioOptions"
                                id="inlineRadio2"
                                value="option2"
                              />
                              <label class="form-check-label" for="inlineRadio2">No</label>
                            </div>
                          </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Submit form</button>
                      
                      
                      
                      
      </form>
  </div>




































  
             


                
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













