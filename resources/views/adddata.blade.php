@extends('layouts.master')

@section('content')
  <body>
    <h1 class="text-center mb-6">Just Add Another Data</h1>

    <div class="container">
        <div class='row justify-content-center'>
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <form action="/adding" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="inputname" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="inputname" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="inputface" class="form-label">Your Face</label>
                            <input type="file" name="face" class="form-control" id="inputface" aria-describedby="faceHelp">
                        </div>
                        <div class="mb-3">
                            <label for="choosegender" class="form-label">Gender</label>
                            <select class="form-select" name="gender" aria-label="Default select example">
                                <option selected>Choose</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="None">None</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="inputage class="form-label">Age</label>
                            <input type="number" name="age" class="form-control" id="inputage" aria-describedby="ageHelp">
                        </div>
                        <div class="mb-3">
                            <label for="inputaddress" class="form-label">Address</label>
                            <input type="text" name="address" class="form-control" id="inputaddress" aria-describedby="addressHelp">
                        </div>
                        <div class="mb-3">
                            <label for="inputphone" class="form-label">Phone</label>
                            <input type="number" name="phone" class="form-control" id="inputphone" aria-describedby="phoneHelp">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
@endsection
