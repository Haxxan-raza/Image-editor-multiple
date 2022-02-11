<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script> -->
    <style>
        * {
            box-sizing: border-box;
        }

        .position {
            float: left;
            width: 42px;

        }

        /* Float four columns side by side */

        /* Remove extra left and right margins, due to padding */


        /* Clear floats after the columns */
        /* .row:after {
            content: "";
            float: center;
            display: table;
            clear: both;
        } */

        /* Responsive columns */
        @media screen and (max-width: 600px) {
            .column {
                width: 100%;
                display: block;
                margin-bottom: 20px;
            }
        }

        /* Style the counter cards */
        .card {

            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            padding: 16px;
            /* margin: 5px; */
            /* text-align: center; */
            background-color: #f1f1f1;
        }

        .img-responsive {
            width: 40px;
            height: 40px;
        }

        .size-button {
            float: right;
        }
    </style>
</head>

<body>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <div class="container-fluid">
        <h2>Responsive Column Cards</h2>
        <p>Resize the browser window to see the effect.</p>
        <button type="button" class="btn btn-primary close_btn size-button " onclick="addNewRow()">&#43;</button><br>
        <div class="row">
            <button type="submit" class="btn btn-primary " form="save">Login</button>
            <div class="col-sm-12 ">
                <div class="card">
                    <form action=" /action_page.php" class="container" id="save">
                        <label for="email"><b>Name</b></label>
                        <input readonly type="text" placeholder="Enter Name" name="name[]" required>

                        <label for="psw"><b>Image</b></label>
                        <input type="file" name="image[]" id="fileToUpload" accept=".png,.jpg,jpeg,.PNG,.JPEG" onchange="document.getElementById('profile_pic').src = window.URL.createObjectURL(this.files[0])">
                        <img class="img-responsive" src="https://i.ibb.co/yNGW4gg/avatar.png" id="profile_pic" alt="Avatar">

                    </form>
                </div>
            </div>

        </div>
        <div class="row" id="newRow">
        </div>
    </div>

</body>

</html>
<script>
    function addNewRow() {
        let divId = Math.floor(Math.random() * 11);
        console.log(divId)
        $('#newRow').append(`  <div class="col-sm-12"  id="` + divId + `">
                <div class="card">
                    <form action=" /action_page.php" class="container" id="save">
                        <label for="image"><b>Image</b></label>
                        <input type="file" id="fileToUpload" accept=".png,.jpg,jpeg,.PNG,.JPEG" name="image[]" onchange="document.getElementById('profile_pic` + divId + `').src = window.URL.createObjectURL(this.files[0])">
                        <img class="img-responsive" src="https://i.ibb.co/yNGW4gg/avatar.png" id="profile_pic` + divId + `" alt="Avatar">

                    </form>
 <button class='btn  btn-danger close_btn position' type='button' onclick='removeAdded("` + divId + ` ")'>&times;</button>
                </div>
            </div>
                                                   
`)
    }

    const removeAdded = (id) => {
        console.log(id);

        $('#' + id).hide()
    }
</script>