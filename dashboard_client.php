<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Bord Client</title>
    <style>
        :root {
            --violet-principal: #6a0dad;
            --violet-clair: #9b59b6;
            --violet-fonce: #4b0082;
            --blanc: #ffffff;
            --gris-fonce: #333;
            --gris-clair: #f5f5f5;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: var(--gris-clair);
            color: var(--gris-fonce);
            line-height: 1.6;
            padding-bottom: 20px;
        }
        
        .header {
            background: linear-gradient(135deg, var(--violet-principal), var(--violet-fonce));
            color: var(--blanc);
            padding: 15px 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        
        .header h1 {
            font-size: 1.4rem;
        }
        
        .btn-deconnexion {
            background-color: #e74c3c;
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 4px;
            cursor: pointer;
            font-weight: 600;
        }
        
        .container {
            max-width: 600px;
            margin: 30px auto;
            padding: 0 15px;
        }
        
        .section-title {
            color: var(--violet-fonce);
            margin-bottom: 20px;
            padding-bottom: 8px;
            border-bottom: 2px solid var(--violet-clair);
            font-size: 1.5rem;
            text-align: center;
        }
        
        .annonce-card {
            background: var(--blanc);
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        
        .annonce-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }
        
        .annonce-header {
            background: var(--violet-clair);
            color: var(--blanc);
            padding: 20px;
            text-align: center;
        }
        
        .annonce-title {
            font-size: 1.4rem;
            margin-bottom: 10px;
        }
        
        .annonce-avocat {
            font-style: italic;
            opacity: 0.9;
        }
        
        .annonce-body {
            padding: 20px;
        }
        
        .annonce-specialite {
            display: block;
            background: var(--violet-principal);
            color: white;
            padding: 8px 15px;
            border-radius: 4px;
            text-align: center;
            margin: 0 auto 20px;
            max-width: 200px;
        }
        
        .annonce-description {
            margin-bottom: 20px;
            line-height: 1.6;
            text-align: center;
            font-size: 1.05rem;
        }
        
        .annonce-contact {
            display: flex;
            flex-direction: column;
            gap: 12px;
            background: var(--gris-clair);
            padding: 15px;
            border-radius: 8px;
            margin-top: 20px;
        }
        
        .contact-item {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
            padding: 8px;
        }
        
        .contact-label {
            font-weight: 600;
            color: var(--violet-fonce);
            min-width: 80px;
            text-align: right;
        }
        
        .contact-value {
            font-weight: 500;
        }
        
        .action-buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
            margin-top: 25px;
        }
        
        .btn {
            padding: 12px 25px;
            border-radius: 4px;
            cursor: pointer;
            font-weight: 600;
            border: none;
            transition: all 0.3s;
        }
        
        .btn-primary {
            background: var(--violet-principal);
            color: white;
        }
        
        .btn-secondary {
            background: var(--violet-clair);
            color: white;
        }
        
        .btn:hover {
            opacity: 0.9;
            transform: translateY(-2px);
        }
        
        @media (max-width: 600px) {
            .header {
                flex-direction: column;
                gap: 15px;
                text-align: center;
            }
            
            .contact-item {
                flex-direction: column;
                text-align: center;
                gap: 5px;
            }
            
            .contact-label {
                text-align: center;
            }
            
            .action-buttons {
                flex-direction: column;
                gap: 10px;
            }
        }
    </style>
</head>
<body>
    <header class="header">
        <h1>Tableau de bord - Client</h1>
        <button class="btn-deconnexion">Déconnexion</button>
    </header>
    
    <div class="container">
        <h2 class="section-title">Annonce d'avocat disponible</h2>
        
        <div class="annonce-card">
            <div class="annonce-header">
                <h3 class="annonce-title">Consultation juridique rapide</h3>
                <p class="annonce-avocat">Par Maître Sophie kadima</p>
            </div>
            
            <div class="annonce-body">
                <span class="annonce-specialite">Droit général</span>
                <p class="annonce-description">Consultation juridique sur tous les sujets. Première séance offerte pour évaluer votre situation.</p>
                
                <div class="annonce-contact">
                    <div class="contact-item">
                        <span class="contact-label">Email:</span>
                        <span class="contact-value">sophie.kadima@juris.cd</span>
                    </div>
                    <div class="contact-item">
                        <span class="contact-label">Téléphone:</span>
                        <span class="contact-value">+243 815633544</span>
                    </div>
                    <div class="contact-item">
                        <span class="contact-label">Disponibilité:</span>
                        <span class="contact-value">Lun-Ven: 9h-18h</span>
                    </div>
                </div>
                
                <div class="action-buttons">
                    <button class="btn btn-primary">Contacter</button>
                    <button class="btn btn-secondary">Prendre rendez-vous</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
