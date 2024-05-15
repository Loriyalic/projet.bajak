<main>
    <!-- Section du concept -->
    <div class="concept">
        <h2>LE CONCEPT</h2>
        <!-- Conteneur de la marquée -->
        <div class="marquee-container">
            <!-- Marquée animée -->
            <div class="marquee marquee-visible">
                <p style="font-size: 36px; font-weight: bold; display: inline;">TU&nbsp;&nbsp;REMPLIS&nbsp;&nbsp;!&nbsp;&nbsp;TU&nbsp;&nbsp;BOIS&nbsp;&nbsp;!&nbsp;&nbsp;TU&nbsp;&nbsp;CROQUES&nbsp;&nbsp;!&nbsp;&nbsp;</p>
            </div>
            <!-- Marquée animée -->
            <div class="marquee marquee-visible">
                <p style="font-size: 36px; font-weight: bold; display: inline;">TU&nbsp;&nbsp;REMPLIS&nbsp;&nbsp;!&nbsp;&nbsp;TU&nbsp;&nbsp;BOIS&nbsp;&nbsp;!&nbsp;&nbsp;TU&nbsp;&nbsp;CROQUES&nbsp;&nbsp;!&nbsp;&nbsp;</p>
            </div>
        </div>
        <!-- Image du concept -->
        <img src="image/leconcept.png" alt="Concept image" class="img-fluid lazy" data-src="image/leconcept.png" style="width: 80%; margin:0%;">
    </div>

    <style>
        /* Styles pour le conteneur de la marquée */
        .marquee-container {
            overflow: hidden; /* Masquer le débordement */
            white-space: nowrap; /* Empêcher le retour à la ligne */
            position: relative; /* Position relative pour les éléments enfants absolus */
            width: 100%; /* Largeur pleine */
        }

        /* Styles pour la marquée */
        .marquee {
            display: inline-block; /* Affichage en ligne */
            animation: marquee 20s linear infinite; /* Animation de la marquée */
            font-family: Verdana, cursive, sans-serif; /* Police de caractère */
            color: #725236; /* Couleur du texte */
        }

        /* Styles pour rendre la marquée visible */
        .marquee-visible {
            opacity: 1; /* Opacité complète */
        }

        /* Styles pour le paragraphe dans la marquée */
        .marquee p {
            display: inline; /* Affichage en ligne */
        }

        /* Animation de la marquée */
        @keyframes marquee {
            0% {
                transform: translateX(0); /* Déplacement initial */
            }
            100% {
                transform: translateX(-100%); /* Déplacement final */
            }
        }

        /* Styles pour les images chargées de manière paresseuse */
        .lazy {
            opacity: 0; /* Opacité initiale */
        }

        /* Styles pour les images chargées */
        .lazy.loaded {
            opacity: 1; /* Opacité complète */
            transition: opacity 0.5s; /* Transition d'opacité */
        }

        /* Styles pour la section concept */
        .concept {
            margin-bottom: 0; /* Margin inférieur réduit */
            padding: 0; /* Padding supprimé */
            margin-top: 5%; /* Margin supérieur */
        }
    </style>

    <script>
        // Chargement des images paresseuses lorsque le DOM est prêt
        document.addEventListener('DOMContentLoaded', function() {
            let lazyImages = document.querySelectorAll('.lazy');

            lazyImages.forEach(function(image) {
                image.addEventListener('load', function() {
                    image.classList.add('loaded'); // Ajout de la classe loaded lorsque l'image est chargée
                });

                image.src = image.dataset.src; // Attribution de la source de données pour charger l'image
            });
        });
    </script>
</main>
