<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Update Student Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Update Data</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link text-primary" href="../PHP/index.php">Insert</a>
                    <a class="nav-link text-warning" href="../PHP/view.php">View</a>
                </div>
            </div>
        </div>
    </nav>
    <?php
    include_once('../PHP/back/iterate.php');
    $obj = json_decode($json);
    ?>
    <form action="../PHP/back/update.php" method="post" class="col g-3 needs-validation" novalidate>
        <div class="col mb-3 ms-4 me-3 mt-4 has-validation">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo $name; ?>" required>
            <div class="invalid-feedback">
                Please insert name.
            </div>
        </div>
        <div class="col mb-3 ms-4 me-3 mt-4">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address" value="<?php echo $address; ?>" required>
            <div class="invalid-feedback">
                Please insert address.
            </div>
        </div>
        <div class="col mb-3 ms-4 me-3 mt-4">
            <label for="major" class="form-label">Student Major</label>
            <input type="text" class="form-control" id="major" name="major" value="<?php echo $major; ?>" required>
            <div class="invalid-feedback">
                Please insert major.
            </div>
        </div>
        <div class="col ms-4 me-3 mt-4">
            <input type="hidden" class="form-control" id="email" name="email" value="<?php echo $email; ?>">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
    <!-- <script src="../JS/validateInput.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>