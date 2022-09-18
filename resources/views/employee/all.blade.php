    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <title>All</title>
    </head>
    <body>
        <div class="container">
            <h1>All Employee</h1>
           <table class="table table-bordered">
    <thead>
      <tr>
        <th>Name</th>
        <th>Skill</th>
        <th>Gender</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
     @foreach($employees as $e)
    <tr>
      <td>{{ $e->name }}</td>
      <td>
        @php
        $data=json_decode($e->skills);
        @endphp 
        @foreach($data as $d)
        <span class="badge badge-secondary">{{ $d }}</span>
        @endforeach
        
      </td>
      <td>{{ $e->gender }}</td>
      <td>
        <button type="button" class="btn btn-success">Edit</button>
        <button type="button" class="btn btn-danger">Delete</button>
      </td>
    </tr>
     @endforeach
    </tbody>
    
  </table>

    </body>
    </html>