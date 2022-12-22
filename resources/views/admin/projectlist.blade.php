<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
  @include("admin.admincss")
  </head>

  <body>
  @include("admin.navbar")

<div class="card">
  <div class="card-body">
  <h4 class="card-title" style="color:white">Project List</h4>
  <div class="table-responsive">
          <table class="table" style="color:white">
          <thead>
              <tr>
                <th> ID </th>
                <th> Project Type </th>
                <th> Project Title </th>
                <th> Student Name </th>
                <th> Supervisor Name</th>
                <th> Examiner 1 Name</th>
                <th> Examiner 2 Name</th>
                <th> Start Date </th>
                <th> End Date </th>
                <th> Duration </th>
                <th> Progress </th>
                <th> Status </th>  
               </tr>                         
            </thead>

        @foreach($list as $x)
            <tr>
                <td>{{$x['id']}}</td>
                <td>{{$x['projecttype']}}</td>
                <td>{{$x['projecttitle']}}</td>
                <td>{{$x['student']}}</td>
                <td>{{$x['supervisor']}}</td>
                <td>{{$x['examiner1']}}</td>
                <td>{{$x['examiner2']}}</td>
                <td>{{$x['startdate']}}</td>
                <td>{{$x['enddate']}}</td>
                <td>{{$x['duration']}}</td>
                <td>{{$x['progress']}}</td>
                <td>{{$x['status']}}</td>

                <td><a href={{"del/".$x['id']}}>Delete</a></href>
                
            </tr>
        @endforeach     
                </table>           
</div>
</div>
</div>
@include("admin.adminscript")
  </body>
</html>
