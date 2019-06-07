<?php include 'gradient.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Grady</title>
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/minty/bootstrap.min.css" rel="stylesheet" integrity="sha384-9NlqO4dP5KfioUGS568UFwM3lbWf3Uj3Qb7FBHuIuhLoDp3ZgAqPE1/MYLEBPZYM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://codeseven.github.io/toastr/build/toastr.min.css"/>
    <style>
        .card:hover {
            box-shadow: 0 0 114px 0 rgba(0, 0, 0, 0.08), 0 30px 25px 0 rgba(0, 0, 0, 0.05);
            transition: transform 0.35s cubic-bezier(0.4, 0, 0.2, 1), box-shadow 0.35s cubic-bezier(0.4, 0, 0.2, 1);
            transform: translateY(-5px);
        }
        .navbar {
            background: linear-gradient(90deg, rgba(33, 206, 148, 1) 0%, rgba(83, 103, 255, 1) 100%);;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg d-flex">
        <div class="p-2">
            <a class="navbar-brand" href="/">
                <h3 class="text-bold text-white mb-0">Grady</h3>
            </a>
        </div>
        <div class="ml-auto p-2">
            <a href="https://github.com/androidneha/grady" target="_blank"><i class="fab fa-github text-white fa-2x"></i></a>
        </div>
    </nav>
    <div class="container mt-4 p-0">
        <h3 class="text-center my-5">Get coolest handpicked gradient colors collection palette for your next project, alternatively copy css.</h3>
        <div class="row">
            <?php
            foreach ($colors as $color) {
                ?>
                    <div class="col-md-2">
                        <div class="card mb-3 border-0" style="box-shadow: 0 0 51px 0 rgba(0, 0, 0, 0.08), 0 6px 18px 0 rgba(0, 0, 0, 0.05);">
                            <div class="card-body" style="
                                background-image: linear-gradient(135deg, <?php echo $color[0] ?> 10%, <?php echo $color[1] ?>);
                                height: 170px;
                                transition: transform 0.35s cubic-bezier(0.4, 0, 0.2, 1), box-shadow 0.35s cubic-bezier(0.4, 0, 0.2, 1);
                                transform: translateY(0px);
                                border: none;
                                border-radius: 0;
                                ">
                            </div>
                            <div class="card-footer bg-white mb-0">
                                <div class="d-flex">
                                    <div class="mr-auto">
                                        <span class="mb-0" style="color: <?php echo $color[0]; ?>; font-weight: 700; font-size: 14px;">
                                            <?php echo $color[0] ?>
                                        </span>
                                    </div>
                                    <div style="cursor: pointer"
                                        onclick="copyToClipboard('background-image: linear-gradient(135deg, <?php echo $color[0] ?> 10%, <?php echo $color[1] ?>);')">
                                        <span title="Click to copy CSS">
                                        <i class="fas fa-copy"></i>
                                        </span>
                                    </div>
                                </div>
                                <p class="mb-0" style="color: <?php echo $color[1]; ?>; font-weight: 700; font-size: 14px;"><?php echo $color[1] ?></p>
                            </div>
                        </div>
                    </div>
                <?php
            }
            ?>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://codeseven.github.io/toastr/build/toastr.min.js"></script>
    <script>
        function copyToClipboard(css) {
            let $temp = $("<input>");
            $("body").append($temp);
            $temp.val(css).select();
            document.execCommand("copy");
            $temp.remove();
            toastr.info('CSS code successfully copied! 😊', 'Yo', {positionClass: 'toast-bottom-right'})
        }
    </script>
</body>
</html>
