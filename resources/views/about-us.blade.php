<style>
    .about p {
        margin-bottom: 0;
    }

    /* container */

    .video-player {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        /* margin: 1em auto; */
        aspect-ratio: 16/9;
        background-size: cover;
        background-repeat: no-repeat;
        ;
        background-position: center center;
        cursor: pointer;
    }

    /* play button */

    .video-player>a {
        transition: 0.25s ease-in-out;
        width: 64px;
        height: 48px;
        background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAAAwCAYAAAChS3wfAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyVpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDYuMC1jMDAyIDc5LjE2NDM2MCwgMjAyMC8wMi8xMy0wMTowNzoyMiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIDIxLjEgKE1hY2ludG9zaCkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NzdCMjkyRjk3NTNEMTFFREJCMUFCMzU5MUYyMjgxQzIiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NzdCMjkyRkE3NTNEMTFFREJCMUFCMzU5MUYyMjgxQzIiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo3N0IyOTJGNzc1M0QxMUVEQkIxQUIzNTkxRjIyODFDMiIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo3N0IyOTJGODc1M0QxMUVEQkIxQUIzNTkxRjIyODFDMiIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PnhRufQAAAWtSURBVHja5FtNiBRHFH71urp7ZvbPrMu6/iSuCEYD6iF4iZCgx5wkCAGDOZoQDwnEmzkk4lkThAghR4mHgDEeBQkYD4knBTEYjcEf3FXjrvs/3V0/+aqmR9ddlRy2dzo7Ba+ru6a3qt573/up6lpxa/NmahYjJQVJQh1RRHVmMpOTJKVckVarAybLlgshegTRMkvUkd9XtbUdTFQjIWJrbRXdxGRtLKwNLbN7roEqvp0ozEnmxM2hQRqkckpBSU4zoGlQ5p6tEHXWegZjp1rKaVZqCuPVbRiOW2Mm8M44Mz/mLBtB+wMVRXcCrQnPZGs10qj7u7qoWsGU0C5pTnEzAlOvgplPdKXyrhZiIykVgWH/u83fw+9+1qLZZu3TTvAumH+2bYGKcOMGQeMeDNj83jHzZI7GkG60G2HM35jFL4b5e8zodzG3v9kIcJ2xMR+Dsa8h6dh16BgV9P8vThUB8zda688GurupUgU4lQK/kJzBjZMauP1CMx/3zOdaXQrMU45UMP8p0P2zRyZ4JvAs7m/f7uGqZ2Z2JklyjplpKRfbcEJfQclfgkjc3rbN2ywkchNIWEdC0FIvztsGadonlHrE0LzT/nbdJsx7Rw8+JfNHAaIeC3cJgg9EmzDv/QFsP6tU3jc9PeQtHp5+J7VRcX5AZNkWJDMrXBRYiefX20kAHu1Q/djU1FuM2L+pOFFbH2pKiQKXBYbhJg7TdKUtIvQ5KYchqXv3SA0Nwe0GVCYn65M+pVYyUsQVooCU1SK6cBxT/9GjVEWukVy6RGZ8nJzTLYsZIOz3sw7DvkIEAIjpkRHq2ruXVp06RX2HDpGt1ym5cqVhFi1OuNjNLwyXM1vba4sRsa/S69d93XvwIK05d466du+mDG3qzp2WmoXPAq3tZDC/rIhVW1MIsyEfbdxIAydO0MDJkxStX99ys4AAqgwodD9ZUi5S6dy1i9ZcuNByswAKKg4BrxSGgJdJH1pvtVkIL4AgWC5aIIAymAUy4Ihx7S5DWGqRWUjXe7U0Kerim0XgBFC6HZBFNAvB9HSfs3RlnllcvdowiQVEQ+n3v5pm8drFi9R74IBHAmVZ+wjgibdavZqiDRuQWqZ+p7qtBDB99izd3bGDhvftI+7pIRHHCydYovLufKvbt+nR4cM0AWfoTME5x4XeY5BldYKjWEY/PnaM1N27FAL6XutaL3gu5EwgKSPcH8LhOU3HW7Y0wt/CM++KcQhwHxT7ygb3eOtWD3frvuAUOKwTwAhoXRvA/XnL4YzhAR+1CdznOwCiusRlvE3g/pwkgL0AxorMh+0cbbYK7i9YD88w1lkjtpjOvUajwcFSwH2e/TeUPi2tEP8UsiOEBUvQ20vJ5cs0eeYMjR450lq4z7d/J4QRZwIPCzGvamObYWjPHlLDwyTXrm0t3J+jIGHMfSmEGLZFIADLVjs15QcK1+VRtizMuwwI84q1vi8DIf5UBfkAt5MjFnnH+T8DwB2w6uy8wUqpv/B8j9qs+E9jExO/MTf22863E/PuO4hQ6lY0OnqDE9iqYv7RlnldXEBuIuP4NK1aRbI/SRwCTo8zT6ZEnUE7wN8dthTiuI0iYhmGJKPISObPydr2sH8gHr7vWoYoxdzZSVyrUW9Hx3cR809mCQshP9J7UyXJh7peJw30cwUIqAAKEWrkA+/hpW+XlC9wW+iOoNhAyl8Rlt80WVY3aUqoif3+GsgdlXXaD4JgP4fhO7j/AX/24Jm4nqPDvmywVmh1btvsebi0m+gSG7O/xvw2GHzsQiDMwJN8wSLhvCP39RSCeAPIGIRgBv3OkTF9aK+hrTuvG0fgUcO5uLVF8yh8QE+PxAc58ay6Sc0D52ZW3Tw+byBUhb7dc/MofYZnhXb3cSBlIVLMoY77MWocqx8NtJ4wzA8xl6F4evpaJuUf7l8B3PnAuQL7V4ABAE5N/i+TMKf/AAAAAElFTkSuQmCC);
        background-repeat: no-repeat;
    }

    .video-player:hover>a,
    .video-player>a:focus {
        transform: scale(1.1);
    }

    /* video player iframe */

    .video-player>iframe {
        display: none;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
</style>
<section id="about" class="about">
    <div class="container" data-aos="fade-up">

        <div class="row no-gutters">
            <div class="col-lg-6 align-self-center">


                {{-- <img src="{{ asset('about.png') }}" class="img-fluid" alt=""> --}}
                <div class="video-player" data-videoid="r2240prN-AY"></div>
                {{-- <a data-lity href="https://youtu.be/r2240prN-AY" class="venobox play-btn mb-4"
                    data-vbtype="video" data-autoplay="true"></a> --}}
                {{-- <iframe width="560" height="315" src="https://www.youtube.com/embed/r2240prN-AY?si=ZKV3w1YSuTyuQU2Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> --}}
            </div>

            <div class="col-lg-6 d-flex flex-column justify-content-center about-content">

                <div class="section-title">
                    <h2>About Us</h2>
                    <p>The 1-2-3 coordination system from Oas36ty streamlines office organization while
                        enhancing efficiency, accountability, and overall performance.</p>
                </div>

                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon">

                        {{-- <i class="bx bx-fingerprint"></i> --}}
                        <i class="bi bi-people-fill"></i>
                        {{-- <img src="{{asset('34681351.jpg')}}" width="70%" /> --}}

                    </div>
                    <h4 class="title">Understand your requirements</h4>
                    <p class="description">Lead to lead task management, employee productivity scale, invoice
                        generation, payment processing, etc.</p>
                </div>

                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon"><i class="bi bi-lightbulb"></i></div>
                    <h4 class="title">Best solution provided</h4>
                    <p class="description">A smart way to analyze the growth of your workforce. Track all your
                        tasks and business leads in one single platform.</p>
                </div>

                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon"><i class="bi bi-list-stars"></i></div>
                    <h4 class="title">Explore value added features</h4>
                    <p class="description">Smart and easy interface, complete web management, employee
                        management, domain-based emails, gmail, etc.</p>
                </div>
            </div>
        </div>

    </div>
</section>
{{-- for youtube video --}}
{{-- <script>

    window.addEventListener("DOMContentLoaded", function(e) {

      // Original JavaScript code by Chirp Internet: www.chirpinternet.eu
      // Please acknowledge use of this code by including this header.

      document.querySelectorAll(".video-player").forEach(function(current) {

        let videoid = current.dataset.videoid;

        /* load youtube thumbnail as background image */

        // current.style.backgroundImage = "url(https://i3.ytimg.com/vi/" + videoid + "/hqdefault.jpg)"
        current.style.backgroundImage = "url('about.png')"

        /* create iframe to hold video player */

        let playerFrame = document.createElement("IFRAME");
        playerFrame.setAttribute("webkitAllowFullScreen", "");
        playerFrame.setAttribute("mozAllowFullScreen", "");
        playerFrame.setAttribute("allowFullScreen", "");
        playerFrame.setAttribute("frameborder", 0);
        playerFrame.setAttribute("allow", "autoplay");

        /* create play button */

        let playButton = document.createElement("A");
        playButton.href = "#";
        playButton.title = "click to play video";

        /* insert into container */

        current.replaceChildren(playerFrame, playButton);

        /* initialise click event to load video into iframe */

        current.addEventListener("click", function(e) {
          playerFrame.style.display = "block";
          playerFrame.src = "https://www.youtube.com/embed/" + videoid + "?autoplay=1";
          playButton.style.display = "none";
          e.preventDefault();
        });

      });

    }, false);

  </script> --}}
<script>
    window.addEventListener("DOMContentLoaded", function(e) {

        document.querySelectorAll(".video-player").forEach(function(current) {

            let videoid = current.dataset.videoid;
            current.style.backgroundImage = "url('about.png')"
            // current.style.border = "2px solid #999"

            let playerFrame = document.createElement("IFRAME");
            playerFrame.setAttribute("webkitAllowFullScreen", "");
            playerFrame.setAttribute("mozAllowFullScreen", "");
            playerFrame.setAttribute("allowFullScreen", "");
            playerFrame.setAttribute("frameborder", 0);
            playerFrame.setAttribute("allow", "autoplay");

            let playButton = document.createElement("A");
            playButton.href = "#";
            playButton.title = "Oas36ty";

            current.replaceChildren(playerFrame, playButton);

            current.addEventListener("click", function(e) {
                playerFrame.style.display = "block";
                playerFrame.src =
                    "https://oas36ty-production.sgp1.digitaloceanspaces.com/LandingPageFiles/SaaS%20based%20Solution%20for%20Complete%20Office%20Automation.mp4";
                playButton.style.display = "none";
                current.style.backgroundImage = "none";
                current.style.border = "0px";
                e.preventDefault();
            });

        });

    }, false);
</script>
