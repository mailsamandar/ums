<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/465dc63746.js"></script>

    <title>Create course</title>
</head>
<body>
<div class="container mt-5" id="book">
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
        
                <!-- Modal Header -->
                <div class="modal-header">
                <h4 class="modal-title">Add New Course</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="container">
                        <form action="/courses" method="post">
                          @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" class="form-control" name="title" id="exampleInputEmail1" placeholder="Title">
                        </div>
                    </div>
                </div>
                
                <!-- Modal footer -->
                <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            
            </div>
        </div>
    </div>
    <h1 class="lead display-4">All Courses</h1>
    <table class="table table-dark">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        <tr class="bg-warning">
            <th>...</th>
            <th class="lead" style="font-size:25px">Add New</th>
            <th>
               <a data-toggle="modal" data-target="#myModal" class="d-block pt-1" href="/courses/create"><i style="font-size:32px" class="fas fa-plus-circle text-dark"></i></a>
            </th>
        </tr>
            @foreach($courses as $course)
                <tr>
                    <th class="align-middle lead" scope="row">{{ $loop->iteration }}</th>
                    <td class="align-middle"><i>{{ $course->title }}</i></td>
                    <td><a class="px-2" href="{{ route('courses.show', [$course]) }}"><i class="fas fa-eye text-light"></i></a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>