<!doctype html>
<html lang="fr"> 
 <head> 
  <meta charset="UTF-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <title>Dashboard Avocat</title> 
  <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }
        
        body {
            background-color: #f0f2f5;
            color: #333;
            line-height: 1.6;
            padding-bottom: 20px;
        }
        
        header {
            background: #4b0082;
            color: white;
            padding: 15px 20px;
            text-align: center;
        }
        
        .bouton_de_deco {
            background: #e74c3c;
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;
        }
        
        .containeur {
            max-width: 1000px;
            margin: 20px auto;
            padding: 0 15px;
        }
        
        .partie_titre {
            color: #4b0082;
            margin: 20px 0 15px;
            padding-bottom: 8px;
            border-bottom: 2px solid #4b0082;
        }
        
        .info-avocat {
            background: white;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            border-left: 4px solid #6a0dad;
        }
        
        .form-de-publication-annoce {
            background: white;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 30px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        
        .group {
            margin-bottom: 15px;
        }
        
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #4b0082;
        }
        
        input, textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }
        
        textarea {
            min-height: 100px;
            resize: vertical;
        }
        
        .boutonnnnn {
            background: #4b0082;
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            display: block;
            width: 100%;
            margin-top: 10px;
        }
        
        .containeur_annonces {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }
        
        .d{
            background: white;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            border-left: 4px solid #6a0dad;
        }
        
        .titre_d-annonces {
            font-size: 1.2rem;
            margin-bottom: 10px;
            color: #4b0082;
        }
        
        .annonce-specialite {
            background: #6a0dad;
            color: white;
            padding: 4px 10px;
            border-radius: 4px;
            display: inline-block;
            margin-bottom: 15px;
            font-size: 0.9rem;
        }
        
        .annonce-description {
            margin-bottom: 15px;
            line-height: 1.5;
        }
        
        .annonce-contact {
            background: #f0f2f5;
            padding: 15px;
            border-radius: 6px;
        }
        
        .contact {
            margin-bottom: 8px;
        }
        
        .message {
            padding: 12px;
            margin-bottom: 15px;
            border-radius: 4px;
        }
        
        .success {
            background: #e6f7ee;
            color: #0d6832;
            border-left: 4px solid #28a745;
        }
        
        .erreuruee {
            background: #fce8e6;
            color: #c33;
            border-left: 4px solid #dc3545;
        }
        
        .empty-state {
            text-align: center;
            padding: 40px 20px;
            background: white;
            border-radius: 8px;
            margin: 20px 0;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        }
        
        @media (max-width: 768px) {
            .mes-annonces-container {
                grid-template-columns: 1fr;
            }
        }
    </style> 
 </head> 
 <body> 
  <header> 
   <h1>Tableau de bord Avocat</h1> <button class="btn-deconnexion">Déconnexion</button> 
  </header> 
  <div class="container"> 
   <div class="info-avocat"> 
    <h2>Maître Jean Dupont</h2> 
    <p><strong>Email:</strong> jean.kabeya@cabinet-legal.cd</p> 
    <p><strong>Téléphone:</strong> +243 824657489</p> 
    <p><strong>Spécialité:</strong> Droit des affaires</p> 
   </div> 
   <form class="form-publier-annonce"> 
    <h2 class="section-title">Publier une annonce</h2> 
    <div class="message success">
      Annonce publiée avec succès ! 
    </div> 
    <div class="input-group"> <label for="titre">Titre de l'annonce</label> 
     <input type="text" id="titre" placeholder="Ex: Consultation juridique spécialisée"> 
    </div> 
    <div class="input-group"> <label for="specialite">Spécialité</label> 
     <input type="text" id="specialite" value="Droit des affaires"> 
    </div> 
    <div class="input-group"> <label for="description">Description</label> <textarea id="description" placeholder="Décrivez vos services, votre expérience..."></textarea> 
    </div> 
    <div class="input-group"> <label for="email">Email de contact</label> 
     <input type="email" id="email" value="jean.kabeya@cabinet-legal.cd"> 
    </div> 
    <div class="input-group"> <label for="telephone">Téléphone de contact</label> 
     <input type="tel" id="telephone" value="+243 824657489"> 
    </div> 
    <div class="input-group"> <label for="adresse_cabinet">Adresse du cabinet</label> <textarea id="adresse_cabinet">123 Avenue colonel-lukusa, 75008 kinshasa</textarea> 
    </div> 
    <div class="input-group"> <label for="disponibilites">Disponibilités</label> <textarea id="disponibilites" placeholder="Ex: Lundi au vendredi, 9h-17h"></textarea> 
    </div> <button type="submit" class="btn">Publier l'annonce</button> 
   </form> 
   <h2 class="section-title">Mes annonces publiées</h2> 
   <div class="mes-annonces-container"> 
    <div class="annonce-card"> 
     <h3 class="annonce-title">Consultation en droit des affaires</h3> <span class="annonce-specialite">Droit des affaires</span> 
     <p class="annonce-description">Offre de consultation pour entreprises et entrepreneurs. Expertise en contrats commerciaux, droit des sociétés et propriété intellectuelle. Plus de 10 ans d'expérience.</p> 
     <div class="annonce-contact"> 
      <div class="contact-item"> <strong>Email:</strong> jean.kabeya@cabinet-legal.cd 
      </div> 
      <div class="contact-item"> <strong>Téléphone:</strong> +243 824657489 
      </div> 
      <div class="contact-item"> <strong>Adresse:</strong> 123 Avenue colonel-lukusa, 75008 kinshasa 
      </div> 
      <div class="contact-item"> <strong>Disponibilités:</strong> Lun-Ven: 9h-18h, sur rendez-vous 
      </div> 
     </div> 
    </div> 
    <div class="annonce-card"> 
     <h3 class="annonce-title">Conseil en création d'entreprise</h3> <span class="annonce-specialite">Droit des sociétés</span> 
     <p class="annonce-description">Accompagnement juridique complet pour la création de votre entreprise. Choix de la structure juridique, rédaction des statuts, formalités d'immatriculation.</p> 
     <div class="annonce-contact"> 
      <div class="contact-item"> <strong>Email:</strong> jean.kabeya@cabinet-legal.cd 
      </div> 
      <div class="contact-item"> <strong>Téléphone:</strong> +243 824657489
      </div> 
      <div class="contact-item"> <strong>Disponibilités:</strong> Sur rendez-vous uniquement 
      </div> 
     </div> 
    </div> 
   </div> 
  </div> 
 </body>
</html>
