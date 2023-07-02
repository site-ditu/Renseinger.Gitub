

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AEEMN</title>
    <link rel="stylesheet" href="pagevene.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="pagecom.html">Déconnecté</a></li>
                <li><a href="Acueil.html">Accueil</a></li>
                <li><a href="pagereuni.html">Réunions</a></li>
            </ul>
        </nav>
    </header>
  
    <div class="container">
        <h1>Réunions</h1>
        
        <div class="meeting-details">
            <h2>Détails de la réunion</h2>
            <p>Date: 2 juillet 2023</p>
            <p>Heure: 14h00 - 16h00</p>
            <p>Lieu: Ecole courantique</p>
        </div>
        
        <div class="attendees-list">
            <h2>Liste des participants</h2>
            <table>
              <thead>
                  <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Téléphone</th>
                    <th>Email</th>
                    <th>mot de passe</th>
                  </tr>
            
              </thead>
              <tbody>
                  <?php foreach ($eleves as $eleve): ?>
                    <tr>
                      <td><?php echo $eleve['nomEleve']; ?></td>
                      <td><?php echo $eleve['PrenomEleve']; ?></td>
                      <td><?php echo $eleve['numeroEleve']; ?></td>
                      <td><?php echo $eleve['emailEleve']; ?></td>
                      <td><?php echo $eleve['motdepassEleve']; ?></td>
                    
                    </tr>
               
                  <?php endforeach; ?>
              </tbody>
            </table>
        </div>
        
        <div class="upcoming-events">
            <h2>Événements à venir</h2>
              <div class="event">
                <h3>Événement 1</h3>
                <p>Date: 10 juillet 2023</p>
                <p>Heure: 18h00 - 20h00</p>
                <p>Lieu: Salle de conférence B</p>
                <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum finibus tortor a est varius, eu aliquet elit pellentesque. Donec interdum rhoncus quam, auctor finibus erat ultricies id.</p>
              </div>
              <div class="event">
                <h3>Événement 2</h3>
                <p>Date: 15 juillet 2023</p>
                <p>Heure: 14h00 - 16h00</p>
                <p>Lieu: Salle de réunion C</p>
                <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum finibus tortor a est varius, eu aliquet elit pellentesque. Donec interdum rhoncus quam, auctor finibus erat ultricies id.</p>
              </div>
        </div>
    </div>
    
    <footer>
        <p>&copy; 2023 Association des anciens élèves. Tous droits réservés.</p>
    </footer>
</body>
</html>

            
            
      
        
