<main>
    <div class="concept">
        <h2>LE CONCEPT</h2>
        <div class="marquee-container">
            <div class="marquee marquee-visible">
                <p style="font-size: 36px; font-weight: bold; display: inline;">TU&nbsp;&nbsp;REMPLIS&nbsp;&nbsp;!&nbsp;&nbsp;TU&nbsp;&nbsp;BOIS&nbsp;&nbsp;!&nbsp;&nbsp;TU&nbsp;&nbsp;CROQUES&nbsp;&nbsp;!&nbsp;&nbsp;</p>
            </div>
            <div class="marquee marquee-visible">
                <p style="font-size: 36px; font-weight: bold; display: inline;">TU&nbsp;&nbsp;REMPLIS&nbsp;&nbsp;!&nbsp;&nbsp;TU&nbsp;&nbsp;BOIS&nbsp;&nbsp;!&nbsp;&nbsp;TU&nbsp;&nbsp;CROQUES&nbsp;&nbsp;!&nbsp;&nbsp;</p>
            </div>
        </div>
        <img src="image/leconcept.png" alt="Concept image" class="img-fluid lazy" data-src="image/leconcept.png" style="width: 80%; margin:0%;">
    </div>
    <style>
    .marquee-container {
            overflow: hidden;
            white-space: nowrap;
            position: relative;
            width: 100%;
        }

       .marquee {
            display: inline-block;
            animation: marquee 20s linear infinite;
            font-family:Verdana, cursive, sans-serif;
            color : #725236;
        }

       .marquee-visible {
            opacity: 1;
        }

       .marquee p {
            display: inline;
        }

        @keyframes marquee {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-100%);
            }
        }

      .lazy {
            opacity: 0;
        }

      .lazy.loaded {
            opacity: 1;
            transition: opacity 0.5s;
        }

      .concept {
            margin-bottom: 0; /* ou une valeur très faible, par exemple 5px */
            padding: 0; /* pour réduire la marge en dessous et au-dessus de l'image */
            margin-top: 5%;
}
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let lazyImages = document.querySelectorAll('.lazy');

            lazyImages.forEach(function(image) {
                image.addEventListener('load', function() {
                    image.classList.add('loaded');
                });

                image.src = image.dataset.src;
            });
        });
    </script>
</main>