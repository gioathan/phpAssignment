<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" context="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Assignment</title>
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <meta name="description" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">    
    <script type="text/javascript">
        var config = {
            base_url: "<?php echo base_url(); ?>"
        };
    </script>

</head>

<body>
    <header class="bg-light">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="<?php echo base_url();?>">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="candidatesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Candidates
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="candidatesDropdown">
                                    <li><a class="dropdown-item" href="<?php echo base_url('candidates');?>">List</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="/candidates/add">Add candidate</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        <div>
    </header>

    <div class="container">
        <?= $this->renderSection('content'); ?>
    </div>
    <!-- Page content -->
        
    <footer class="bg-primary py-3 text-white">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    PHP Assignment
                </div>
            <div>
        <div>
    </footer>

    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>

</body>

</html>
