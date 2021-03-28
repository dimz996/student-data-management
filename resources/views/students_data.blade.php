<html>
 <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Student Data</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 </head>
 <body>
  <div class="container">    
    
   <div class="table-responsive">
    <table class="table table-bordered table-striped">
           <thead>
            <tr>
                <th>Student</th>
                <th>ID</th>        
            </tr>
           </thead>
           <tbody>
           @foreach($data as $row)
            <tr>
             <td>{{ $row-> students.name }}</td>
             <td>{{ $row->s_id}}</td>                
           
            </tr>
           @endforeach
           </tbody>
       </table>
   </div>
  </div>
 </body>
</html>
