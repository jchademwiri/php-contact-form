<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Contact Form</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5">
                    <div class="card-tittle">
                        <h2 class="text-center py-2">Contact Us</h2>
                        <hr>
                        <?php
$msg = '';
if (isset($_GET['error'])) {
    $msg = 'Please fill in the blanks';
    echo '<div class="alert alert-danger">' . $msg . '</div>';
}

if (isset($_GET['success'])) {
    $msg = 'Your messege has been sent';
    echo '<div class="alert alert-success">' . $msg . '</div>';
}?>
                    </div>
                    <div class="card-body">
                        <form action="process.php" method="post">
                            <input type="text" name="username" placeholder="username" class="form-control mb-2">
                            <input type="email" name="email" placeholder="email" class="form-control mb-2">
                            <input type="text" name="subject" placeholder="subject" class="form-control mb-2">
                            <textarea name="msg" class="form-control mb-2" ></textarea>
                            <button name= "btn-send" class="btn btn-success">Send</button>
                        </form>
                    </div>
                </div>


            </div>
        </div>
    </div>
</body>
</html>