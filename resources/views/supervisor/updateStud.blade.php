<x-app-layout>

</x-app-layout>

<html lang="en">
  <head>
  @include("supervisor.supervisorcss")
  <style>
body {
  background-color: Lavender;
}


div,h1 {
    color:black;
    text-align:center;
}

/* .button button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}

.button button1:hover {
  background-color: #4CAF50;
  color: white;
} */
</style>
  </head>

  <body>
    <div class="card">
    <div class="card-body">
    <h1 class="card-title">Update Student Project Details</h1>
    <form action="/edit" method="post">
    <br>
    
    @csrf

    <div class="form-group">
        <label>Project ID</label>
        <input type="readonly" name="id" value="{{$disp['id']}}">
        <br><br>
    </div>

    <div class="form-group">
        <label>Project Type</label>
        <input type="readonly" name="projecttype" value="{{$disp['projecttype']}}">
        <br><br>
    </div>

    <div class="form-group">
        <label>Project Title</label>
        <input type="readonly" name="projecttitle" value="{{$disp['projecttitle']}}">
        <br><br>
    </div>

    <div class="form-group">
        <label>Student Name</label>
        <input type="readonly" name="student" value="{{$disp['student']}}">
        <br><br>
    </div>

    <div class="form-group">
        <label>Supervisor Name</label>
        <input type="readonly" name="supervisor" value="{{$disp['supervisor']}}">
        <br><br>
    </div>

    <div class="form-group">
        <label>Examiner 1 Name</label>
        <input type="readonly" name="examiner1" value="{{$disp['examiner1']}}">        
        <br><br>
    </div>

    <div class="form-group">
        <label>Examiner 2 Name</label>
        <input type="readonly" name="examiner2" value="{{$disp['examiner2']}}">
        <br><br>
    </div>

    <div class="form-group">
        <label>Start Date</label>
        <input type="date" name="startdate" value="{{$disp['startdate']}}">
        <br><br>
    </div>

    <div class="form-group">
        <label>End Date</label>
        <input type="date" name="enddate" value="{{$disp['enddate']}}">
        <br><br>
    </div>

    <div class="form-group">
        <label>Duration (Months)</label>
        <input type="int" name="duration" value="{{$disp['duration']}}">
        <br><br>
    </div>

    <div class="form-group">
        <label>Progress</label>
        <select name="progress" value="{{$disp['progress']}}">
            <option value="">Select progress</option>            
            <option value="Milestone 1">Milestone 1</option>  
            <option value="Milestone 2">Milestone 2</option>
            <option value="Milestone 3">Milestone 3</option>
            <option value="Final Report">Final Report</option>
        </select>
        <br><br>
    </div>

    <div class="form-group">
        <label>Status</label>
        <select name="status"  value="{{$disp['status']}}">
            <option value="">Select status</option>            
            <option value="OnTrack">On Track</option>  
            <option value="Delayed">Delayed</option>
            <option value="Extended">Extended</option>
            <option value="Completed">Completed</option>
        </select>
        <br><br>
        <br>

        <input type="submit" class="btn btn-info" value="Update">
    
    </div>
    </div>

</form>  
  @include("supervisor.supervisorscript")
  </body>
</html>