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
        <title>Project</title>
    </head>
    <body>
        <div class="container">
            <h1>Create Employee</h1>
            <form action="{{ url('store') }}" method="post">
                {{ csrf_field() }}
    <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" name="name">
    </div>
    <div class="form-group">
        <label>Skills</label><br>
    <div class="form-check-inline">
    <label class="form-check-label">
        <input type="checkbox" class="form-check-input" name='skills[]' value="php">PHP
    </label>
    </div>
    <div class="form-check-inline">
    <label class="form-check-label">
        <input type="checkbox" class="form-check-input" name='skills[]' value="mysqli">MYSQLY
    </label>
    </div>
    <div class="form-check-inline">
    <label class="form-check-label">
        <input type="checkbox" class="form-check-input" name='skills[]' value="laravel">LARAVel
    </label>
    </div>
    </div>
            <div class="form-group">
                <label>Select Gender</label><br>
                <div class="form-check">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="gender" value="Male">Male
  </label><br>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="gender" value="Female">Female
  </label><br>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="gender" value="Other">Other
  </label><br>
</div>

    </div>
    <button type="submit" class="btn btn-primary">Save</button>
    </form>
        </div>

    </body>
    </html>