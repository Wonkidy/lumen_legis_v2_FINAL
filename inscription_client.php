<?php
session_start();
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "site_avocat";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Traitement du formulaire
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $email = htmlspecialchars($_POST['email']);
        $telephone = htmlspecialchars($_POST['telephone']);
        $mot_de_passe = password_hash($_POST['mot_de_passe'], PASSWORD_DEFAULT);
        
        // Insertion en base
        $sql = "INSERT INTO clients (nom, prenom, email, telephone, mot_de_passe) 
                VALUES (:nom, :prenom, :email, :telephone, :mot_de_passe)";
        
        $stmt = $conn->prepare($sql);
        $stmt->execute([
            ':nom' => $nom,
            ':prenom' => $prenom,
            ':email' => $email,
            ':telephone' => $telephone,
            ':mot_de_passe' => $mot_de_passe
        ]);
        
        // Récupération de l'ID client
        $client_id = $conn->lastInsertId();
        
        // Création de session
        $_SESSION['client_id'] = $client_id;
        $_SESSION['user_type'] = 'client';
        
        // Redirection vers dashboard
        header("Location: dashboard_client.php");
        exit();
    }
} catch(PDOException $e) {
    echo "Erreur: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription Client</title>
    <style>
        :root {
            --violet-principal: #6a0dad;
            --violet-clair: #9b59b6;
            --blanc: #ffffff;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f9f9f9;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        
        .form-container {
            background-color: var(--blanc);
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            padding: 30px;
            width: 350px;
            border-top: 5px solid var(--violet-principal);
        }
        
        h2 {
            color: var(--violet-principal);
            text-align: center;
            margin-bottom: 25px;
        }
        
        .input-group {
            margin-bottom: 20px;
        }
        
        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-weight: 500;
        }
        
        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            transition: border 0.3s;
        }
        
        input:focus {
            border-color: var(--violet-clair);
            outline: none;
            box-shadow: 0 0 5px rgba(155, 89, 182, 0.3);
        }
        
        .btn {
            background-color: var(--violet-principal);
            color: white;
            border: none;
            padding: 12px 20px;
            width: 100%;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 600;
            transition: background 0.3s;
        }
        
        .btn:hover {
            background-color: var(--violet-clair);
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Inscription Client</h2>
        <form method="POST" action="">
            <div class="input-group">
                <label for="nom">Nom</label>
                <input type="text" id="nom" name="nom" required>
            </div>
            
            <div class="input-group">
                <label for="prenom">Prénom</label>
                <input type="text" id="prenom" name="prenom" required>
            </div>
            
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            
            <div class="input-group">
                <label for="telephone">Téléphone</label>
                <input type="tel" id="telephone" name="telephone">
            </div>
            
            <div class="input-group">
                <label for="mot_de_passe">Mot de passe</label>
                <input type="password" id="mot_de_passe" name="mot_de_passe" required>
            </div>
            
            <button type="submit" class="btn">S'inscrire</button>
        </form>
    </div>
</body>
</html>
