<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carousel</title>
    <style>
        /* Styles pour le carrousel */
        .carousel {
            width: 100%;
            height: 400px;
            overflow-x: auto; /* Change to auto to enable horizontal scrolling */
            position: relative; /* add this to create a new stacking context */
            display: flex;
            flex-wrap: nowrap;
            padding: 0; /* remove default padding */
            margin: 0; /* remove default margin */
            white-space: nowrap; /* add this to prevent slides from wrapping */
            transition: scrollLeft 0.5s; /* add this to make scrolling more fluid */
            margin-top: 0;
            margin-bottom:5%
        }

        .slide {
            width: 250px; /* set a fixed width for each slide */
            height: 100%;
            margin: 0 10px; /* add 10px gap between slides */
            display: inline-flex; /* add this to display slides horizontally */
            flex-shrink: 0; /* add this to prevent shrinking */
        }

        .slide img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* make images fit the container */
        }

        /* Ajoutez ces styles pour supprimer les curseurs de défilement */
        .carousel::-webkit-scrollbar {
            display: none; /* Supprime le curseur de défilement pour Chrome/Safari */
        }

        .carousel {
            scrollbar-width: none; /* Supprime le curseur de défilement pour Firefox */
        }
    </style>
</head>
<body>
    <div class="carousel">
        <!-- Dynamically generate slides using JavaScript -->
        <div class="slides"></div>
    </div>

    <script>
        const images = [
            { src: 'image/champagne.JPG', alt: 'Img1' },
            { src: 'image/fondu.JPG', alt: 'Img2' },
            { src: 'image/fruit.JPG', alt: 'Img3' },
            { src: 'image/grenade.JPG', alt: 'Img4' },
            { src: 'image/madeleine.JPG', alt: 'Img5' },
            { src: 'image/glace.JPG', alt: 'Img6' },
            { src: 'image/jezve.JPG', alt: 'Img7' },
            { src: 'image/petitdej.JPG', alt: 'Img8' }
        ];

        const slidesContainer = document.querySelector('.slides');

        // Duplicate the first and last slide
        const firstImage = images[0];
        images.unshift(images[images.length - 1]);
        images.push(firstImage);

        images.forEach((image) => {
            const slide = document.createElement('div');
            slide.className = 'slide'; 
            const img = document.createElement('img');
            img.src = image.src;
            img.alt = image.alt;
            slide.appendChild(img);
            slidesContainer.appendChild(slide);
        });

        let currentIndex = 1; // start at the second slide (index 1)

        // Add event listener for mousewheel scrolling
        document.querySelector('.carousel').addEventListener('wheel', function(event) {
            event.preventDefault();
            const direction = Math.sign(event.deltaY);
            scrollCarousel(direction);
        });

        function scrollCarousel(direction) {
            const carousel = document.querySelector('.carousel');
            const scrollStep = 100 * direction; // Decreased scroll speed
            carousel.scrollTo(carousel.scrollLeft + scrollStep, 0);

            // Check if we've reached the end or beginning of the carousel
            if (carousel.scrollLeft <= 0) {
                // If we've reached the beginning, jump to the second-to-last slide
                carousel.scrollTo(carousel.scrollWidth - 250, 0);
                currentIndex = images.length - 2;
            } else if (carousel.scrollLeft + carousel.offsetWidth >= carousel.scrollWidth) {
                // If we've reached the end, jump to the second slide
                carousel.scrollTo(250, 0);
                currentIndex = 1;
            } else {
                // Otherwise, update the current index
                currentIndex += direction;
            }
        }

        // Add event listeners for keyboard arrow keys
        document.addEventListener('keydown', function(event) {
            if (event.key === 'ArrowLeft') {
                scrollCarousel(-1);
            } else if (event.key === 'ArrowRight') {
                scrollCarousel(1);
            }
        });
    </script>
</body>
</html>
