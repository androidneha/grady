<?php include 'gradient.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Grady</title>
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/minty/bootstrap.min.css" rel="stylesheet" integrity="sha384-9NlqO4dP5KfioUGS568UFwM3lbWf3Uj3Qb7FBHuIuhLoDp3ZgAqPE1/MYLEBPZYM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <style>
        .card:hover {
            box-shadow: 0 0 114px 0 rgba(0, 0, 0, 0.08), 0 30px 25px 0 rgba(0, 0, 0, 0.05);
            transition: transform 0.35s cubic-bezier(0.4, 0, 0.2, 1), box-shadow 0.35s cubic-bezier(0.4, 0, 0.2, 1);
            transform: translateY(-5px);
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Grady</a>
    </nav>
    <div class="container mt-4">
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        particlesJS("particles-js", {
            "particles": {
                "number": {
                    "value": 30,
                    "density": {
                        "enable": true,
                        "value_area": 900
                    }
                },
                "color": {
                    "value": "#ffffff"
                },
                "shape": {
                    "type": "circle",
                    "stroke": {
                        "width": 0,
                        "color": "#000000"
                    },
                    "polygon": {
                        "nb_sides": 5
                    },
                },
                "opacity": {
                    "value": 0.5,
                    "random": false,
                    "anim": {
                        "enable": false,
                        "speed": 1,
                        "opacity_min": 0.1,
                        "sync": false
                    }
                },
                "size": {
                    "value": 3,
                    "random": true,
                    "anim": {
                        "enable": false,
                        "speed": 40,
                        "size_min": 0.1,
                        "sync": false
                    }
                },
                "line_linked": {
                    "enable": true,
                    "distance": 150,
                    "color": "#ffffff",
                    "opacity": 0.4,
                    "width": 1
                },
                "move": {
                    "enable": true,
                    "speed": 6,
                    "direction": "none",
                    "random": false,
                    "straight": false,
                    "out_mode": "out",
                    "bounce": false,
                    "attract": {
                        "enable": false,
                        "rotateX": 600,
                        "rotateY": 1200
                    }
                }
            },
            "interactivity": {
                "detect_on": "canvas",
                "events": {
                    "onhover": {
                        "enable": true,
                        "mode": "grab"
                    },
                    "onclick": {
                        "enable": true,
                        "mode": "push"
                    },
                    "resize": true
                },
                "modes": {
                    "grab": {
                        "distance": 140,
                        "line_linked": {
                            "opacity": 1
                        }
                    },
                    "bubble": {
                        "distance": 400,
                        "size": 40,
                        "duration": 2,
                        "opacity": 8,
                        "speed": 3
                    },
                    "repulse": {
                        "distance": 200,
                        "duration": 0.4
                    },
                    "push": {
                        "particles_nb": 4
                    },
                    "remove": {
                        "particles_nb": 2
                    }
                }
            },
            "retina_detect": true
        });
    </script>
    <script src="toast.js"></script>
    <script>
        function copyToClipboard(css) {
            let $temp = $("<input>");
            $("body").append($temp);
            $temp.val(css).select();
            document.execCommand("copy");
            $temp.remove();
            let toast = (new iqwerty).toast.Toast();
            toast.setText('CSS Code Copied!').stylize({
                background: 'pink',
                color: 'black',
                'box-shadow': '0 0 50px rgba(0, 0, 0, .7)'
            }).show();
        }
    </script>
</body>
</html>