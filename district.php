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
                                <h4 class="card-title">District Name</h4>
                                <form class="forms-sample p-4" method="POST" action="sub.php">
                                    <div class="form-group row mb-3">
                                        <label for="exampleInputDistrict"
                                            class="col-sm-3 col-form-label">District</label>

                                        <input type="text" class="form-control" id="exampleInputDistrict"
                                            name="district" placeholder="District">
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