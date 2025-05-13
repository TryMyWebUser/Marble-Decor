<!DOCTYPE html>
<html lang="zxx">
    <!--<< Header Area >>-->
    <head>
        <!-- ========== Meta Tags ========== -->
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <?php include "temp/head.php" ?>

    </head>

    <body>
        <?php include "temp/header.php" ?>

        <!-- Breadcumb Section  S T A R T -->
        <div class="breadcumb-section">
            <div class="breadcumb-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcumb-content">
                                <h1 class="breadcumb-title"><?= $_GET['data'] ?></h1>
                                <ul class="breadcumb-menu">
                                    <li><a href="index.php">Home</a></li>
                                    <li class="text-white"><i class="fa-solid fa-chevrons-right"></i></li>
                                    <li class="active">Products</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Gallery Section    S T A R T -->
        <div class="gallery-section section-padding fix">
            <div class="container">
                <div class="row gy-5">

                    <?php
                        switch ($_GET['data'])
                        {
                            case 'tiles':
                                include "temp/tiles.php";
                                break;
                            case 'italian marble':
                                include "temp/italian.php";
                                break;
                            default:
                                echo "Product Not Found";
                        }
                    ?>

                </div>
            </div>
        </div>

        <?php include "temp/footer.php" ?>

    </body>
</html>