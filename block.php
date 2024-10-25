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
                        <?php
                                if (isset($_GET['msg'])) {
                                    $msg = urldecode($_GET['msg']);
                                    echo "<div class='alert alert-danger'>$msg</div>";
                                }
                                ?>
                        <h4 class="card-title">Block</h4>
                        <form class="forms-sample p-4" method="POST" action="select.php">
                            <div class="form-group row mb-3">
                                <label for="exampleInputDistrict" class="col-sm-3 col-form-label">District</label>
                                <div class="col-sm-9">
                                    <select class="form-control" id="exampleInputDistrict" name="district">
                                        <option value="" disabled selected>Select District</option>
                                        <option value="Anugul">Anugul</option>
                                        <option value="Balasore">Balasore</option>
                                        <option value="Dhenkanal">Dhenkanal</option>
                                        <option value="Khordha">Khordha</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="exampleInputBlock" class="col-sm-3 col-form-label">Block</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="exampleInputBlock" name="block"
                                        placeholder="Block">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

</html>