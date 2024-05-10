<?php include 'utilities/header.php'; ?>

<main>
    <h1>Localisation des Points de Vente</h1>
    
    <!-- Div pour la carte -->
    <div id="map"></div>

    <style>
        /* Style pour la carte */
        #map {
            height: 400px;
            width: 100%;
            margin-top: 20px;
        }
    </style>

    <script>
        // Fonction d'initialisation de la carte
        function initMap() {
            // Coordonnées du centre de la carte
            var center = {lat: 48.8566, lng: 2.3522}; // Exemple: Paris

            // Création de la carte
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 12, // Niveau de zoom
                center: center // Centre de la carte
            });

            // Exemple de points de vente avec coordonnées et informations
            var pointsDeVente = [
                {
                    nom: 'Point de Vente 1',
                    position: {lat: 48.8584, lng: 2.2945}, // Exemple: Tour Eiffel
                    photo: 'lien_vers_photo1.jpg'
                },
                {
                    nom: 'Point de Vente 2',
                    position: {lat: 48.8530, lng: 2.3499}, // Exemple: Louvre
                    photo: 'lien_vers_photo2.jpg'
                },
                // Ajoutez autant de points de vente que nécessaire
            ];

            // Boucle pour placer les marqueurs sur la carte
            pointsDeVente.forEach(function(point) {
                var marker = new google.maps.Marker({
                    position: point.position,
                    map: map,
                    title: point.nom
                });

                // Info-bulle avec le nom du point de vente
                var infowindow = new google.maps.InfoWindow({
                    content: '<h3>' + point.nom + '</h3>' +
                             '<img src="' + point.photo + '" alt="' + point.nom + '">'
                });

                // Afficher l'info-bulle lors du clic sur le marqueur
                marker.addListener('click', function() {
                    infowindow.open(map, marker);
                });
            });
        }
    </script>
</main>

<?php include 'utilities/footer.php'; ?>
