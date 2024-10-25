<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
    <style>
    body {
        background-color: rgb(80, 106, 139);
    }
    </style>
</head>

<body>
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row justify-content-center py-2">
                <div class="col-md-6 grid-margin stretch-card  py-2">
                    <div class="card shadow">
                        <div class="card">
                            <div class="card-body">
                                <?php
                                if (isset($_GET['msg'])) {
                                    $msg = urldecode($_GET['msg']);
                                    echo "<div class='alert alert-danger'>$msg</div>";
                                }
                                ?>
                                <!-- <h4 class="card-title text-center bg-danger">Contact Form</h4> -->
                                <h4 class="text-center">Contact Form</h4>

                                <form class="forms-sample p-4" method="POST" action="submit.php">
                                    <div class="form-group row  mb-3">
                                        <label for="exampleInputUsername" class="col-sm-3 col-form-label">Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="exampleInputUsername"
                                                name="name" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="form-group row  mb-3">
                                        <label for="exampleInputEmail" class="col-sm-3 col-form-label">Email</label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control" id="exampleInputEmail" name="mail"
                                                placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-group row  mb-3">
                                        <label for="exampleInputPhone" class="col-sm-3 col-form-label">Phone</label>
                                        <div class="col-sm-9">
                                            <input type="tel" class="form-control" id="exampleInputPhone" name="phone"
                                                placeholder="Phone">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="exampleInputAddress" class="col-sm-3 col-form-label">Address</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" rows="5" id="comment" name="address"
                                                placeholder="Address"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="exampleInputDistrict"
                                            class="col-sm-3 col-form-label">District</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" id="exampleInputDistrict" name="district">
                                                <option value="" disabled selected>Select District</option>
                                                <option value="1">District 1</option>
                                                <option value="2">District 2</option>
                                                <option value="3">District 3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="exampleInputBlock" class="col-sm-3 col-form-label">Block</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" id="exampleInputBlock" name="block">
                                                <option value="" disabled selected>Select Block</option>
                                                <option value="1">Block 1</option>
                                                <option value="2">Block 2</option>
                                                <option value="3">Block 3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <div class="col-sm-9 d-flex align-items-center">
                                            <label class="me-2" for="genderMale">Gender:</label>
                                            <div class="form-check me-3 ">
                                                <input type="radio" class="form-check-input" name="gender"
                                                    id="genderMale" value="male">
                                                <label class="form-check-label btn-outline-success"
                                                    for="genderMale">Male</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" class="form-check-input" name="gender"
                                                    id="genderFemale" value="female">
                                                <label class="form-check-label" for="genderFemale">Female</label>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>