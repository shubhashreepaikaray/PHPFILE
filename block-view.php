<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row  justify-content-center">
                <div class="col-md-6 grid-margin">

                    <table class="table table-md table-bordered table-hover table-dark align-middle text-center mt-3">
                        <tr class="table-primary">
                            <th>District Name</th>
                            <th>Block Name</th>
                        </tr>

                        <?php
                        include("connect.php");
                        $sql = "SELECT `id`,`district`,`block_name` FROM blocks ";

                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_num_rows($result);

                        if ($row > 0) {
                            while ($data = mysqli_fetch_assoc($result)) {
                                $id = $data['id'];
                                $district = $data['district'];
                                $block = $data['block_name'];
                                echo "<tr>
                                                 <td>" . $district . "</td>
                                                 <td>" .  $block . "</td>
                                             </tr>";
                            }
                        } else {
                            echo "<tr><td colspan='7' class='text-center'>No district found.</td></tr>";
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>

    </div>
    </div>

</body>

</html>