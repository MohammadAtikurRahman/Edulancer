<template>
  <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top"> 
      <router-link class="navbar-brand" to="/home">
      <img
        src="//logo.clearbit.com/spotify.com"
        width="50"
        height="50"
        class="d-inline-block align-top"
        alt
      />
      Edulancer
     </router-link>
    <button
      class="navbar-toggler"
      type="button"
      data-toggle="collapse"
      data-target="#navbarSupportedContent"
    >
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-lg-auto">
        <li class="nav-item">
          <router-link class="nav-link" to="/findjob">
            Find Job
            <span class="sr-only">(current)</span>
          </router-link>
        </li>
        <li class="nav-item">
          <router-link class="nav-link" to="/hiretutor">Hire Tutor</router-link>
        </li>
        <li class="nav-item">
          <router-link class="nav-link" to="/signin">Signin</router-link>
        </li>
        <li class="nav-item">
          <router-link class="nav-link" to="login">Login</router-link>
        </li>
        <li class="nav-item">
          <router-link class="nav-link" to="faq">FAQ</router-link>
        </li>
        <li class="nav-item">
          <router-link class="nav-link" to="profile">Profile</router-link>
        </li>
      </ul>
    </div>
  </nav>
</template>

<script>
export default {
  name:'Navbar',
  data() {
    return {};
  }
};
</script>

<style>
.navbar {
  padding: 20px 0px;
}
.navbar-brand {
  font-weight: 700;
  font-family: "Pacifico", cursive;
  align-self: auto;
  letter-spacing: 5px;
  font-size: 2em;
  justify-content: space-around;
  font-weight: bold;
  float: left;
  margin-left: 0%;
}
.nav-item {
  font-weight: 800;
}
.navbar {
  display: flex;
  justify-content: space-around;
  align-items: center;
  min-height: 10vh;
}
.navbar-nav {
  width: 95%;
  overflow: auto;
  display: flex;
  justify-content: space-around;
}
.nav-link:hover {
  font-weight: bold;
  font-display: block;
  font-family: "Open Sans", sans-serif;
  padding: 0%;
  overflow: auto;
}
</style>