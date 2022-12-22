<x-app-layout>

</x-app-layout>
<html lang="en">
  <head>
  @include("admin.admincss")
  </head>

  <body>
  @include("admin.navbar")
  
  <div class="card">
    <div class="card-body">
    <h3 class="card-title">Assign Project Form</h3>
    <form action="/add" method="post">
    
    @csrf
    <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Project Type</label>
                            <div class="col-sm-4">
                            <div class="form-check">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="projecttype" id="development" value="Development" checked> Development </label>
                              </div>
                            </div>
                            <div class="col-sm-4">
                            <div class="form-check">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="projecttype" id="research" value="Research" checked> Research </label>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Project Title</label>
                            <div class="col-sm-9">
                            <input name="projecttitle" type="varchar" class="form-control"  placeholder="Enter Project Title" style="color:white">                            
                          </div>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Student Name</label>
                            <div class="col-sm-9">
                            <input name="student" type="text" class="form-control"  placeholder="Enter Student Name" style="color:white">                          
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Supervisor Name</label>
                            <div class="col-sm-9">
                            <input name="supervisor" type="text" class="form-control"  placeholder="Enter Supervisor Name" style="color:white">                        
                          </div>
                      </div>
                      
                      
    <div class="form-group">
        <label>Examiner 1 Name</label>
        <input name="examiner1" type="text" class="form-control"  placeholder="Enter Examiner 1 Name" style="color:white">
    </div>

    <div class="form-group">
        <label>Examiner 2 Name</label>
        <input name="examiner2" type="text" class="form-control"  placeholder="Enter Examiner 2 Name" style="color:white">
    </div>

    <div class="form-group">
        <label>Start Date</label>
        <br>
        <input name="startdate" type="date"  style="color:grey">
    </div>

    <div class="form-group">
        <label>End Date</label>
        <br>
        <input name="enddate" type="date"  style="color:grey">
    </div>

    <div class="form-group">
        <label>Duration</label>
        <input name="duration" type="int" class="form-control"  placeholder="Enter Duration (Months)" style="color:white">
    </div>

    <div class="form-group">
        <label>Progress</label>
        <br>
        <select name="progress" style="color:grey">
            <option value="">Select progress</option>            
            <option value="Milestone1">Milestone 1</option>  
            <option value="Milestone2">Milestone 2</option>
            <option value="Milestone3">Milestone 3</option>
            <option value="Final Report">Final Report</option>
        </select>
    </div>

    <div class="form-group">
        <label>Status</label>
        <br>
        <select name="status"   style="color:grey">
            <option value="">Select status</option>            
            <option value="OnTrack">On Track</option>  
            <option value="Delayed">Delayed</option>
            <option value="Extended">Extended</option>
            <option value="Completed">Completed</option>
        </select>
    </div>

    <input type="submit" class="btn btn-info" value="Assign Project">
       
</div>
</div>
    
</form>

<!-- <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Assign Project Form</h4>
                    <form class="form-sample">

      
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">First Name</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Last Name</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Gender</label>
                            <div class="col-sm-9">
                              <select class="form-control">
                                <option>Male</option>
                                <option>Female</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Date of Birth</label>
                            <div class="col-sm-9">
                              <input class="form-control" placeholder="dd/mm/yyyy" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Category</label>
                            <div class="col-sm-9">
                              <select class="form-control">
                                <option>Category1</option>
                                <option>Category2</option>
                                <option>Category3</option>
                                <option>Category4</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Membership</label>
                            <div class="col-sm-4">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="" checked> Free </label>
                              </div>
                            </div>
                            <div class="col-sm-5">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios2" value="option2"> Professional </label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <p class="card-description"> Address </p>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Address 1</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">State</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Address 2</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Postcode</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">City</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Country</label>
                            <div class="col-sm-9">
                              <select class="form-control">
                                <option>America</option>
                                <option>Italy</option>
                                <option>Russia</option>
                                <option>Britain</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div> -->

@include("admin.adminscript")
  </body>
</html>