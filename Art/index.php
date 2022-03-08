<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Tom's Portfolio</title>

    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="/Assets/favicon.ico" />

    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

    <!--CSS-->
    <link href="/CSS/mainStyle.css" rel="stylesheet" />
    <link href="/CSS/slideshowStyle.css" rel="stylesheet" />

    <!--JQuery import-->
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

</head>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <!-- Navigation-->
        <div id="navContainer">

        </div>

        <script>
            $(function () {
                $("#navContainer").load("/HTMLComponents/navBar.html");
            });
        </script>

        <div class="card">
            <h1 class="card-header">Photography and Drawings</h1>
            <h3 class="card-subtitle">Assorted Gallery</h3>
            <div class="card-body">
                <div id="gallery">
                    <?php
                        $images = glob("../Assets/Photography/*");
                        for ($i=0; $i<count($images); $i++)
                        {
                            $image = $images[$i];
                            $supported_file = array(
                                    'gif',
                                    'jpg',
                                    'jpeg',
                                    'png'
                            );

                            $ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
                            if (in_array($ext, $supported_file)) {
                                echo '<img src="'.$image .'" class="card-img"/>';
                            } else {
                                continue;
                            }
                        }
          
                    ?>
                </div>
                
                


            </div>
        </div>

        </main>
        <!-- Footer-->
        <footer class="bg-dark py-4 mt-auto">
        </footer>
    
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    
    </body>
    
    </html>