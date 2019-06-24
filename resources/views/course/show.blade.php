<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/465dc63746.js"></script>


    <title>Show group</title>
</head>
<body>
<div class="container mt-5">
<table class="table table-striped">
  <thead>
    <tr class="bg-secondary text-light">
      <th scope="col">#</th>
      <th style="font-size:120%;" scope="col"><a class="lead"> Course: </a><i>{{ $course->title }}</i></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <tr class="bg-warning">
    <th>...</th>
      <th class="lead" style="font-size:100%px">Add Student</th>
      <th style="padding:5px">
      <a href="/students/add/{{$course->id}}" class="d-block py-2"><i style="font-size:32px" class="fas fa-plus-circle text-light"></i></a>
    </th>
  </tr>
    @foreach($course->students as $student)
    <tr>
      <th class="lead" scope="row">{{$loop->iteration}}</th>
      <td><i>{{ $student->name }}</i></td>
      <td></td>
    </tr>
    @endforeach
  </tbody>
</table>
    <a class="btn btn-danger my-4" href="/courses">Back</a>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>