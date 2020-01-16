<template>
  <footer>
    <div class="footer" id="footer">
      <div class="foot foot-dark bg-dark fixed-bottom">
        <div class="row">
          <!-- <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
            <h3>Specials</h3>

            <ul>
              <li>
                <a href="#">Product 1</a>
              </li>

              <li>
                <a href="#">Product 1</a>
              </li>

              <li>
                <a href="#">Product 3</a>
              </li>

              <li>
                <a href="#">Product 4</a>
              </li>

              <li>
                <a href="#">Product 5</a>
              </li>
            </ul>
          </div>-->

          <!-- <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
            <ul>
              <li>
                <a href="#">Blog</a>
              </li>

              <li>
                <a href="#">About Us</a>
              </li>

              <li>
                <a href="#">Contact Us</a>
              </li>
            </ul>
          </div>-->
          <div class="container d-flex">
            <div class="col-lg-3 col-md-2 col-sm-4 col-xs-6">
              <h3>About</h3>

              <ul>
                <li>
                  <a href="#">Blog</a>
                </li>

                <li>
                  <a href="#">About Us</a>
                </li>

                <li>
                  <a href="#">Terms of Services</a>
                </li>

                <li>
                  <a href="#">Our Team</a>
                </li>
              </ul>
            </div>

            <div class="col-lg-3 col-md-2 col-sm-4 col-xs-6">
              <h3>Social Media Links</h3>

              <ul>
                <li>
                  <a href="#">Contact Marketing</a>
                </li>

                <li>
                  <a href="#">Contact Sales</a>
                </li>

                <li>
                  <a href="#">Contact HR</a>
                </li>

                <li>
                  <a href="#">Contact Admin</a>
                </li>
              </ul>
            </div>
          </div>
          <!-- <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <h3>Subscribe Us</h3>

            <ul>
              <li>
                <div class="input-append subscribe-btn text-center">
                  <input type="text" class="full text-center" placeholder="Email " />

                  <button class="btn btn-success" type="button">
                    Subscribe
                    <i class="fa fa-save"></i>
                  </button>
                </div>
              </li>
            </ul>

            <ul class="social">
              <li>
                <a href="#">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>

              <li>
                <a href="#">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>

              <li>
                <a href="#">
                  <i class="fa fa-google-plus"></i>
                </a>
              </li>

              <li>
                <a href="#">
                  <i class="fa fa-pinterest"></i>
                </a>
              </li>

              <li>
                <a href="#">
                  <i class="fa fa-youtube"></i>
                </a>
              </li>
            </ul>
          </div>-->
        </div>

        <!--/.row-->

        <!--/.footer-->

        <div class="footer-bottom">
          <div class="container col-4">
            <p class="text-centre">Copyright © 2019. All rights reserved.</p>

            <!-- <div class="pull-right">
          <ul class="nav nav-pills payments">
            <li>We Accept:</li>

            <li>
              <i class="fa fa-cc-paypal"></i>
            </li>

            <li>
              <i class="fa fa-cc-mastercard"></i>
            </li>

            <li>
              <i class="fa fa-cc-amex"></i>
            </li>

            <li>
              <i class="fa fa-cc-visa"></i>
            </li>
          </ul>
            </div>-->
          </div>
        </div>
      </div>
    </div>
    <!--/.footer-bottom-->
  </footer>
</template>

<script>
export default {
  data() {
    return{};
  }
};
</script>
<style>
.full {
  width: 100%;
}

.footer {
  height: auto;
  padding-bottom: 30px;
  position: relative;
  width: 100%;
  color: #fff;
  border-bottom: 1px solid #cccccc;
  border-top: 1px solid #dddddd;
  background: #00003e;
  background: -webkit-linear-gradient(to right, #31bde6, #00003e);
  background: linear-gradient(to right, #31bde6, #00003e);
}

.footer h3 {
  border-bottom: 1px solid #bac1c8;
  color: #fff;
  font-size: 18px;
  font-weight: 600;
  line-height: 27px;
  padding: 40px 0 10px;
  text-transform: uppercase;
}

.footer ul {
  font-size: 13px;
  list-style-type: none;
  margin-left: 0;
  padding-left: 0;
  margin-top: 15px;
  color: #7f8c8d;
}

.footer ul li a {
  padding: 0 0 5px 0;
  display: block;
}

.footer a {
  color: #78828d;
  color: #fff;
}

.supportLi h4 {
  font-size: 20px;
  font-weight: lighter;
  line-height: normal;
  margin-bottom: 0 !important;
  padding-bottom: 0;
}

.subscribe-btn .btn {
  border: medium none;
  border-radius: 4px;
  display: inline-block;
  height: 40px;
  padding: 0;
  width: 100%;
  color: #fff;
  margin-top: 10px;
}

.subscribe-btn {
  overflow: hidden;
}

.social li {
  border: 2px solid #b5b5b5;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  -o-border-radius: 50%;
  -ms-border-radius: 50%;
  border-radius: 50%;
  float: left;
  height: 36px;
  line-height: 36px;
  margin: 0 8px 0 0;
  padding: 0;
  text-align: center;
  width: 36px;
  transition: all 0.5s ease 0s;
  -moz-transition: all 0.5s ease 0s;
  -webkit-transition: all 0.5s ease 0s;
  -ms-transition: all 0.5s ease 0s;
  -o-transition: all 0.5s ease 0s;
}

.social li a {
  color: #edeff1;
}

.social li:hover {
  border: 2px solid #2c3e50;
  background: #2c3e50;
}

.social li a i {
  font-size: 16px;
  margin: 0 0 0 5px;
  color: #edeff1 !important;
}

.footer-bottom {
  background: rgb(17, 17, 17);
  border-top: 1px solid #dddddd;
  padding-top: 20px;
  padding-bottom: 40px;
  color: #fff;
}

/* .footer-bottom p.pull-left {
  padding-top: 6px;
}

.payments {
  font-size: 1.5em;
} */
</style>