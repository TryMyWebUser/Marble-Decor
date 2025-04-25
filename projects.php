<!DOCTYPE html>
<html lang="zxx">
    <head>
        <!-- ========== Meta Tags ========== -->
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <?php include "temp/head.php" ?>

        <link rel="stylesheet" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/124874/twentytwenty.css">
        <style>
            .before-after-container {
                width: 100%;
                max-width: 370px;
                margin: 0 auto;
            }
            .twentytwenty-wrapper {
                width: 100% !important;
            }
            .twentytwenty-before, 
            .twentytwenty-after {
                background-size: cover !important;
            }
        </style>
    </head>

    <body>
        <?php include "temp/header.php" ?>

        <!-- Breadcumb Section -->
        <div class="breadcumb-section">
            <div class="breadcumb-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcumb-content">
                                <h1 class="breadcumb-title">Completed Projects</h1>
                                <ul class="breadcumb-menu">
                                    <li><a href="index.php">Home</a></li>
                                    <li class="text-white"><i class="fa-solid fa-chevrons-right"></i></li>
                                    <li class="active">Completed Projects</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Gallery Section -->
        <div class="gallery-section section-padding fix">
            <div class="container">
                <div class="row gy-5">
                    <!-- Item 1 -->
                    <div class="col-xl-4 col-md-6 content">
                        <div class="gallery-card style3">
                            <div class="gallery-thumb before_after">
                                <div class="before-after-container">
                                    <div class="before-after-item">
                                        <img src="assets/img/ba/before1.png" alt="Before renovation" />
                                        <img src="assets/img/ba/after1.png" alt="After renovation" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="col-xl-4 col-md-6 content">
                        <div class="gallery-card style3">
                            <div class="gallery-thumb before_after">
                                <div class="before-after-container">
                                    <div class="before-after-item">
                                        <img src="assets/img/ba/before2.png" alt="Before renovation" />
                                        <img src="assets/img/ba/after2.png" alt="After renovation" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="col-xl-4 col-md-6 content">
                        <div class="gallery-card style3">
                            <div class="gallery-thumb before_after">
                                <div class="before-after-container">
                                    <div class="before-after-item">
                                        <img src="assets/img/ba/before3.png" alt="Before renovation" />
                                        <img src="assets/img/ba/after3.png" alt="After renovation" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include "temp/footer.php" ?>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/124874/jquery.event.move.js"></script>
        <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/124874/jquery.twentytwenty.js"></script>
        <script>
            $(document).ready(function() {
                // Initialize each before/after item
                $(".before-after-item").each(function() {
                    $(this).twentytwenty({
                        default_offset_pct: 0.5, // Start with slider in the middle
                        before_label: 'Before',
                        after_label: 'After',
                        orientation: 'horizontal',
                        no_overlay: false,
                        move_slider_on_hover: false,
                        move_with_handle_only: true
                    });
                });
            });
        </script>
    </body>
</html>