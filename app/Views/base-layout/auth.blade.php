<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../../../src/style.css">
    <script src="../../../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <title><?= $title_page ?></title>
</head>

<body class="position-relative">
    <header>
        <div class="container-xlg pt-3 bg-info mt-3 mb-5 d-flex justify-content-center ">
            <h4>Library Management System</h4>
        </div>
    </header>

    <main class="login-content">
        <?= $this->renderSection('content') ?>
    </main>

    <footer class="d-flex justify-content-center">
        &copy; 2025 --xDev All rights reserved.
    </footer>
</body>

</html>