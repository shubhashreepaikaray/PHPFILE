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
                <div class="col-md-10 grid-margin">
                    <table class="table table-md table-bordered table-hover table-dark align-middle text-center mt-3">
                        <tr class="table-primary">
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone No.</th>
                            <th>Address</th>
                            <th>District</th>
                            <th>Block</th>
                            <th>Gender</th>
                        </tr>

                        <?php
                        include("connect.php");
                        $sql = "SELECT `id`,`name`, `mail`,`phone`, `address`,`district`,`block`,`gender` FROM person ";

                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_num_rows($result);

                        if ($row > 0) {
                            while ($data = mysqli_fetch_assoc($result)) {
                                $id = $data['id'];
                                $name = $data['name'];
                                $mail = $data['mail'];
                                $phoneNumber = $data['phone'];
                                $address = $data['address'];
                                $district = $data['district'];
                                $block = $data['block'];
                                $gender = $data['gender'];
                                echo "<tr>
                                     <td>" . $name . "</td>
                                     <td>" . $mail . "</td>
                                     <td>" . $phoneNumber . "</td>
                                     <td>" .  $address . "</td>
                                     <td>" . $district . "</td>
                                     <td>" .  $block . "</td>
                                     <td>" . $gender . "</td>
                                   </tr>";
                            }
                        } else {
                            echo "<tr><td colspan='7' class='text-center'>Details not found.</td></tr>";
                        }
                        ?>
                    </table>

                </div>
            </div>

        </div>
    </div>

</body>

</html>