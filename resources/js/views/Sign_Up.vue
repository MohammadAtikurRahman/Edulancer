<template>

<div class="container-scroller" style=" top: 60%; left:50%; transform: translate(-50%, -50%); position:absolute;">
    <div class="container-fluid page-body-wrapper">
      <div class="row">
        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth-pages">
          <div class="card col-lg-30 mx-auto">
            <div class="card-body px-30 py-30">
              <h3 class="card-title text-left mb-3">Register</h3>
              <form>
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" class="form-control p_input">
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" class="form-control p_input">
                </div>
                  <div class="form-group">
                  <label>Institute</label>
                  <input type="institute" class="form-control p_input">
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control p_input">
                </div>
                
                <div class="form-group d-flex align-items-center justify-content-between">
                  <div class="icheck-square">
                    <input tabindex="1" type="checkbox" id="remember">
                    <label for="remember">Remember me</label>
                  </div>
                  <a href="#" class="forgot-pass">Forgot password</a>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
                </div>
                <div class="d-flex justify-content-center mb-4">
                  <a href="#" class="facebook-login btn btn-facebook mr-2">Facebook</a>
                  <a href="#" class="google-login btn btn-google">Google+</a>
                </div>
                <small class="text-center d-block mb-3">Already have an Account?<a href="#"> Sign Up</a></small>
                <small class="text-center d-block">By creating an account you are accepting our<a href="#"> Terms & Conditions</a></small>
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




</template>


<script>
export default {
  data() {
    return{};
  }
};
</script>
<style>




</style>








