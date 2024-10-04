<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous" />
</head>
<style>
    table,
    th,
    td {
        border: 1px solid black;
        padding: 8px;
        text-align: center;

    }
</style>

<body>


    <div class="text-center my-4 ">

        <h2 class="text-success ">Student Details</h2>
    </div>
    <div class="container">
        <div class="table-responsive">
            <table class="table table-success">

                <thead>

                    <tr>
                        <th>Student Name</th>
                        <th>Batch Code</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Gender</th>



                    </tr>
                </thead>
                <tbody>

                    <?php
                    class student
                    {
                        public $name, $batch, $email, $address, $gender;

                        function __construct($name, $batch, $email, $address, $gender)
                        {
                            $this->name = $name;
                            $this->batch = $batch;
                            $this->email = $email;
                            $this->address = $address;
                            $this->gender = $gender;
                        }

                        function studentname()
                        {
                    ?>

                            <tr>
                                <td><?php echo $this->name ?> </td>
                                <td><?php echo  $this->batch ?> </td>
                                <td> <?php echo  $this->email ?> </td>
                                <td> <?php echo $this->address ?> </td>
                                <td> <?php echo $this->gender ?> </td>

                            </tr>

                    <?php
                        }
                    }
                    $obj = new student('Ali', '2310f', 'Ali@gmail.com', 'Lahore', 'Male');
                    $obj->studentname();

                    $obj = new student('Dua', '2310f', 'Dua@gmail.com', 'Hyderabad', 'Female');
                    $obj->studentname();
                    $obj = new student('Kinza', '2310f', 'Kinza@gmail.com', 'Hyderabad', 'Female');
                    $obj->studentname();
                    $obj = new student('Khushboo', '2310f', 'Khushboo@gmail.com', 'Islamabad', 'Female');
                    $obj->studentname();
                    $obj = new student('Sumaima', '2310f', 'Sumaima@gmail.com', 'Karachi', 'Female');
                    $obj->studentname();

                    ?>

                </tbody>
            </table>
        </div>







    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>