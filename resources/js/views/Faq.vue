<template>
  <div class="col-md-12">
    <div>
      <navbar-view></navbar-view>
    </div>
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <div class="container py-3">
      <h2 class="text-center">Frequently Asked Questions</h2>
      <br />
      <br />
      <div class="row">
        <div class="col-12 mx-auto">
          <div class="accordion" id="faqExample">
            <div class="card">
              <div class="card-header p-2" id="headingOne">
                <h5 class="mb-0">
                  <button
                    class="btn btn-link"
                    type="button"
                    data-toggle="collapse"
                    data-target="#collapseOne"
                    aria-expanded="true"
                    aria-controls="collapseOne"
                  >Q: How does this work?</button>
                </h5>
              </div>

              <div
                id="collapseOne"
                class="collapse show"
                aria-labelledby="headingOne"
                data-parent="#faqExample"
              >
                <div class="btn card-body">
                  <b>Answer:</b> Lorem, ipsum dolor sit ameniet obcaecati officiis numquam
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header p-2" id="headingTwo">
                <h5 class="mb-0">
                  <button
                    class="btn btn-link collapsed"
                    type="button"
                    data-toggle="collapse"
                    data-target="#collapseTwo"
                    aria-expanded="false"
                    aria-controls="collapseTwo"
                  >Q: What is edulancer?</button>
                </h5>
              </div>
              <div
                id="collapseTwo"
                class="collapse"
                aria-labelledby="headingTwo"
                data-parent="#faqExample"
              >
                <div
                  class="btn card-body"
                >Lorem, ipsum dolor sit amet c minima ratione dictaciure magnam, velit atque aut.</div>
              </div>
            </div>
            <div class="card">
              <div class="card-header p-2" id="headingThree">
                <h5 class="mb-0">
                  <button
                    class="btn btn-link collapsed"
                    type="button"
                    data-toggle="collapse"
                    data-target="#collapseThree"
                    aria-expanded="false"
                    aria-controls="collapseThree"
                  >Q. What is another question?</button>
                </h5>
              </div>
              <div
                id="collapseThree"
                class="collapse"
                aria-labelledby="headingThree"
                data-parent="#faqExample"
              >
                <div class="btn card-body">The answer to the question can go here.</div>
              </div>
            </div>
            <div class="card">
              <div class="card-header p-2" id="headingFour">
                <h5 class="mb-0">
                  <button
                    class="btn btn-link collapsed"
                    type="button"
                    data-toggle="collapse"
                    data-target="#collapseFour"
                    aria-expanded="false"
                    aria-controls="collapseFour"
                  >Q. What is the next question?</button>
                </h5>
              </div>
              <div
                id="collapseFour"
                class="collapse"
                aria-labelledby="headingFour"
                data-parent="#faqExample"
              >
                <div
                  class="btn card-body"
                >The answer to this question can go here. This FAQ example can contain all the Q/A that is needed.</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/row-->
    </div>
    <!--/row-->
  </div>
  <!--container-->
</template>

<script>
import Navbar from "./Navbar.vue";

export default {
  name: "Faq",
  components: {
    "navbar-view": Navbar
  },
  data() {
    return {};
  }
};
</script>
<style>
.btn {
  font-family: "Pacifico", cursive;
}
</style>