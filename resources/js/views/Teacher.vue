<template>
  <div class="container">
    <form>
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
      <div class="form-row">
        <div class="col-md-6 mb-3">
          <label for="validationServer03">Permerant Addresss</label>
          <textarea
            type="text"
            class="form-control"
            id="validationServer03"
            placeholder=""
            required
          />
        </div>
        <div class="col-md-6 mb-3">
          <label for="validationServer04">Present Address</label>
          <textarea
            type="text"
            class="form-control"
            id="validationServer04"
            placeholder=""
            required
          />
        </div>
      </div>
<div class="form-row">
    <div class="col-md-4 mb-2 col-lg-5">
      <label for="validationTooltip01">National Id Card</label>
      <input type="text" class="form-control" id="validationTooltip01" placeholder="If Available" >
    </div>
    <div class="col-md-4 mb-2 col-lg-5">
      <label for="validationTooltip02">Passport Id</label>
      <input type="text" class="form-control" id="validationTooltip02" placeholder="If Available">
      
    </div>
</div>
<div class="form-group">
    <label for="exampleInputFile">Photo Upload</label>
    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
    <small id="fileHelp" class="form-text text-muted">Photo size 00 kb.Photo height 00 pixels and width 00 pixels.</small>
  </div>
  <div class="form-inline">
          <label class="col-4 mb-4">Previous Tution Experience</label>
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
      
      <button class="btn btn-primary" type="submit">Submit form</button>
    </form>
  </div>
</template>


<script>
export default {
  name: 'Teacher',
  data() {
    return {};
  }
};
</script>
<style>
<<<<<<< HEAD
</style>
=======
</style>








>>>>>>> 544040bdf6fb0406f3f1f1cf67c63b63b9953929
