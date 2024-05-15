<?php include 'utilities/header.php'; ?> <!-- Inclusion de l'en-tête de la page -->

<!-- Styles CSS internes -->
<style>
   /* Section "À propos" */
   .about-section {
      display: flex;
      flex-direction: row-reverse; /* Alignement des sections vers la droite */
      padding: 20px;
      margin-bottom: 20px;
   }

   /* Sections "Histoire" et "Valeurs" */
   .history-section, .values-section {
      display: flex;
      flex-direction:row-reverse;; /* Alignement des sections vers la gauche */
      padding: 20px;
      margin-bottom: 20px;
   }

   /* Section "Valeurs" */
   .values-section {
      flex-direction: row-reverse;
   }

   /* Titre */
   .title {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 10px;
      font-family: 'Playfair Display', serif;
      color: #964B00; /* marron */
   }

   /* Description */
   .description {
      font-size: 18px;
      margin-bottom: 20px;
      font-family: 'Lato', sans-serif;
      color: #964B00; /* marron */
   }

   /* Images */
   .about-image, .about-image2, .about-image3 {
      width: 40%;
      height: auto;
      border-radius: 10px;
      margin: 20px;
   }

   /* Media query pour les appareils jusqu'à 768px de largeur */
   @media (max-width: 768px) {
      .about-section, .history-section, .values-section {
         flex-direction: column; /* Pour les appareils plus petits, passez à une disposition en colonne */
      }
   }
</style>

<main>
   <!-- Section "À propos" -->
   <section class="about-section">
      <div>
         <h1 class="title">L'histoire de Bajak</h1>
         <p class="description">Dans le charmant village d'Allauch, Lori a donné vie à Bajak, une révolution gourmande où le café se savoure dans des tasses de cookies croquantes. Inspirée par son héritage arménien et sa passion pour la pâtisserie, elle a créé une alternative écologique aux gobelets jetables. Chaque tasse, ornée de pépites de chocolat et d'un glaçage exquis, promet une expérience unique : déguster son café et croquer dans le biscuit. Bajak, qui signifie "verre" en arménien, est plus qu'un produit : c'est un geste pour la planète et un délice pour les papilles. Lori rêve grand pour Bajak, envisageant un avenir où ses coffee shops deviendront des icônes d'Allauch et au-delà.</p>
      </div>
      <img src="image/moi.JPEG" alt="moi" class="about-image">
   </section>

   <!-- Section "Histoire" -->
   <section class="history-section">
      <img src="image/jezve.JPG" alt="moi" class="about-image2">
      <div>
         <h2 class="title">Le concept</h2>
         <p class="description">Le concept de Bajak est à la fois simple et innovant : il s’agit de tasses comestibles conçues pour déguster des boissons chaudes comme le café. Ces tasses sont fabriquées à partir de cookies, offrant ainsi une alternative écologique aux gobelets jetables habituellement utilisés. Après avoir savouré la boisson, la tasse peut être consommée comme un délicieux biscuit, réduisant ainsi les déchets et ajoutant une touche de plaisir à l’expérience de boire un café. C’est une idée qui allie gourmandise et responsabilité environnementale, transformant chaque pause café en un acte plus respectueux de notre planète.</p>
      </div>
   </section>

   <!-- Section "Valeurs" -->
   <section class="values-section">
      <div>
         <h2 class="title"> Nos valeurs </h2>
         <p class="description">Les valeurs de l’entreprise Bajak sont centrées sur l’innovation, la durabilité et la responsabilité sociale. En créant des tasses comestibles en cookies, Bajak promeut une consommation plus consciente et respectueuse de l’environnement, en offrant une alternative aux gobelets jetables qui sont une source importante de déchets. L’entreprise valorise également le plaisir et la qualité, en s’assurant que chaque tasse est non seulement pratique mais aussi délicieuse, transformant ainsi l’acte de boire un café en une expérience unique et mémorable. Enfin, Bajak s’engage dans une démarche de partage culturel, en s’inspirant de l’héritage arménien de sa fondatrice pour créer un produit qui porte en lui une histoire et une signification plus profondes.</p>
      </div>
      <img src="image/grenade.JPG" alt="moi" class="about-image3">
   </section>
</main>

<?php include 'utilities/footer.php'; ?> <!-- Inclusion du pied de page -->
