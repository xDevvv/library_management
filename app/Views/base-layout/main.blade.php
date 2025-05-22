<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?= base_url('src/style.css') ?>">
    <script src="<?= base_url('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('js/sample.js') ?>" defer></script>
    <title><?= $title_page ?></title>
</head>

<body>
    <header>
        <div class="container-xlg pt-3 mx-4">
            <nav class="navbar navbar-expand-lg bg-info rounded-3">
                <div class="container-fluid">
                    <i class="fa-solid fa-book d-block d-lg-none"></i>
                    <a class="navbar-brand d-block d-lg-none">Library Management System</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <div class="nav-bar-hover px-2 my-2">
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="/home">Home</a>
                                </li>
                            </div>
                            <div class="nav-bar-hover px-2 my-2">
                                <li class="nav-item">
                                    <a class="nav-link" href="about">About</a>
                                </li>
                            </div>
                            <div class="nav-bar-hover px-2 my-2">
                                <li class="nav-item">
                                    <a class="nav-link" href="members">Member</a>
                                </li>
                            </div>
                            <div class="nav-bar-hover px-2 my-2">
                                <li class="nav-item">
                                    <a class="nav-link" href="books">Books</a>
                                </li>
                            </div>
                            <div class="nav-bar-hover px-2 my-2">
                                <li class="nav-item">
                                    <a class="nav-link" href="borrowed">Book Logs</a>
                                </li>
                            </div>
                            <div class="nav-bar-hover px-2 my-2">
                                <li class="nav-item">
                                    <a class="nav-link" href="overdue">Overdue Books</a>
                                </li>
                            </div>
                        </ul>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2 search-input" type="search" placeholder="Search" aria-label="Search" id="search">
                        </form>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <main>
        <?= $this->renderSection('content') ?>
    </main>

</body>

</html>