<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .carousel-container {
            position: relative;
            width: 50rem;
            height: 200px;
            overflow: hidden;
        }

        .carousel {
            display: flex;
            width: 300%;
            animation: rotateCarousel 10s linear infinite;
            transition: transform 0.5s ease;
        }

        .carousel-item {
            flex: 1;
            min-width: 100%;
            box-sizing: border-box;
            cursor: pointer;
        }

        @keyframes rotateCarousel {
            0% {
                transform: translateX(0%);
            }

            100% {
                transform: translateX(-200%);
            }
        }

        .rotate {
            animation-play-state: paused;
        }
    </style>
</head>

<body>

    <div class="carousel-container">
        <div class="carousel" id="carousel">
            <div class="carousel-item" style="background-color: #ff9999;" onclick="toggleRotate(this)">hey</div>
            <div class="carousel-item" style="background-color: #99ff99;" onclick="toggleRotate(this)">hey2</div>
            <div class="carousel-item" style="background-color: #9999ff;" onclick="toggleRotate(this)">hey3</div>
        </div>
    </div>

    <script>
        function toggleRotate(element) {
            const carousel = document.getElementById('carousel');
            carousel.classList.toggle('rotate');
        }
    </script>

</body>

</html>
