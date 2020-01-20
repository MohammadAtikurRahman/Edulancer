<template>
<<<<<<< HEAD

  <nav  class="navbar navbar-expand-md navbar-light bg-danger fixed-top" style="background-color: ##1E90FF;" > 
=======
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top"> 
>>>>>>> 544040bdf6fb0406f3f1f1cf67c63b63b9953929
      <router-link class="navbar-brand" to="/home">
      <img
        src="images/logoedu.png"
        style="margin-left:80px"
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
          <router-link class="text-white" to="/findjob">
            Find Job
          </router-link>
        </li>
        <li class="nav-item">
<<<<<<< HEAD
          <router-link class="text-white" to="/hiretutor">Hire Tutor</router-link>
        </li>
=======
          <router-link class="nav-link" to="/hiretutor">Hire Tutor</router-link>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle"  href="#" id="navbarDropdown"
         data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Registration
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item"  href="teacher" >For Teacher</a>
          <a class="dropdown-item"  href="student" >For Student</a>
        </div>
>>>>>>> 544040bdf6fb0406f3f1f1cf67c63b63b9953929
        <li class="nav-item">
          <router-link class="text-white" to="/signin">Signin</router-link>
        </li>
        <li class="nav-item">
          <router-link class="text-white" to="login">Login</router-link>
        </li>
<<<<<<< HEAD
        <li class="nav-item">
          <router-link class="text-white" to="faq">FAQ</router-link>
        </li>
        
=======
>>>>>>> 544040bdf6fb0406f3f1f1cf67c63b63b9953929
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
  background-color: antiquewhite;
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
  align-items: center;
  min-height: 10vh;
}
.navbar-nav {
  width: 95%;
  display: flex;
  justify-content: space-around;
}
.nav-link {
  font-weight: bold;
  font-display: block;
  font-family: "Open Sans", sans-serif;
  padding: 0%;
  overflow: auto;
}
.dropdown-menu:hover{
background-color: rgb(246, 252, 253);
}
</style>