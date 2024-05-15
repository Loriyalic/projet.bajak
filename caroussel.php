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
            overflow-x: auto; /* Activer le défilement horizontal */
            position: relative;
            display: flex;
            flex-wrap: nowrap;
            padding: 0;
            margin: 0;
            white-space: nowrap; /* Empêcher le retour à la ligne des éléments */
            transition: scrollLeft 0.5s; /* Rendre le défilement plus fluide */
            margin-top: 0;
            margin-bottom: 5%;
        }

        .slide {
            width: 250px;
            height: 100%;
            margin: 0 10px; /* Marge entre les diapositives */
            display: inline-flex; /* Afficher les diapositives horizontalement */
            flex-shrink: 0; /* Empêcher le rétrécissement */
        }

        .slide img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Adapter les images au conteneur */
        }

        /* Supprimer les barres de défilement */
        .carousel::-webkit-scrollbar {
            display: none; /* Chrome/Safari */
        }

        .carousel {
            scrollbar-width: none; /* Firefox */
        }
    </style>
</head>
<body>
    <div class="carousel">
        <!-- Générer dynamiquement les diapositives en JavaScript -->
        <div class="slides"></div>
    </div>

    <script>
        // Tableau des images
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

        // Dupliquer la première et la dernière image
        const firstImage = images[0];
        images.unshift(images[images.length - 1]);
        images.push(firstImage);

        // Créer les diapositives
        images.forEach((image) => {
            const slide = document.createElement('div');
            slide.className = 'slide'; 
            const img = document.createElement('img');
            img.src = image.src;
            img.alt = image.alt;
            slide.appendChild(img);
            slidesContainer.appendChild(slide);
        });

        let currentIndex = 1; // Commencer à la deuxième diapositive (index 1)

        // Ajouter un écouteur d'événements pour le défilement avec la souris
        document.querySelector('.carousel').addEventListener('wheel', function(event) {
            event.preventDefault();
            const direction = Math.sign(event.deltaY);
            scrollCarousel(direction);
        });

        // Fonction pour faire défiler le carrousel
        function scrollCarousel(direction) {
            const carousel = document.querySelector('.carousel');
            const scrollStep = 100 * direction; // Vitesse de défilement réduite
            carousel.scrollTo(carousel.scrollLeft + scrollStep, 0);

            // Vérifier si nous avons atteint le début ou la fin du carrousel
            if (carousel.scrollLeft <= 0) {
                // Si nous avons atteint le début, sauter à l'avant-dernière diapositive
                carousel.scrollTo(carousel.scrollWidth - 250, 0);
                currentIndex = images.length - 2;
            } else if (carousel.scrollLeft + carousel.offsetWidth >= carousel.scrollWidth) {
                // Si nous avons atteint la fin, sauter à la deuxième diapositive
                carousel.scrollTo(250, 0);
                currentIndex = 1;
            } else {
                // Sinon, mettre à jour l'index actuel
                currentIndex += direction;
            }
        }

        // Ajouter des écouteurs d'événements pour les touches fléchées du clavier
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
