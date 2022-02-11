<!DOCTYPE html>
<html>

<head>
    <title>Show Details</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha256-aAr2Zpq8MZ+YA/D6JtRD3xtrwpEz2IqOS+pWD/7XKIw=" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha256-OFRAJNoaD8L3Br5lglV7VyLRf0itmoBzWUoM+Sji4/8=" crossorigin="anonymous"></script>

    <style>
        .image-size tbody tr td img {
            width: 150px !important;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="showimages"></div>
            </div>
            <div class="col-md-6 offset-3 mt-5">
                <div class="card">
                    <div class="card-header bg-info">
                        <h6 class="text-white">show Details</h6>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered image-size">
                            <tr>
                                <th>No.</th>
                                <th>Name</th>
                                <th>Author Name</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>

                            <tr>

                                <td>{{$editor->id }}</td>
                                <td>{{$editor->name }}</td>
                                <td>{{$editor->auther_name }}</td>
                                <td>{!! $editor->description !!}</td>
                                <td>
                                    <a href="{{ route('books.edit', $editor->id) }}" class="btn btn-secondary">View</a>
                                </td>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>