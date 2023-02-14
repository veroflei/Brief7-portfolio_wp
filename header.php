<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    
</head>

<body>
<?php wp_head() ?>
<header class="container pt-3 mt-5 bcg_header rounded">
    

    <div class="container">
        <div class="row mx-0 w-100">
            <!-- identité -->
            <div class="col-12 col-md-6 mb-3 mt-4">

                <div class="text-center text-white mt-3">
                    <h1> <span class="text-uppercase">Fleig </span>Véronique</h1>
                    <h2>Développeuse Web Junior</h2>
                </div>
            </div>
            <!-- photo -->
            <div class="col-12 col-md-6 mb-4">
                <div class="text-center mt-2 pb-2">
                    <img src="<?= get_template_directory_uri(); ?> /images/photomoi.jpg" class="img-fluid rounded photo-sized" alt="profil">
                </div>
            </div>
        </div>
    </header>


