# Projet Sécurité des systèmes d'informations

Il s'agit d'un formulaire d'inscription et de connexion sécurisé en PHP avec des mots de passe hachés . Il comprend les fonctionnalités suivantes:

- Inscription d'utilisateur avec la validation des champs d'entrée et la vérification si le nom d'utilisateur existe déjà.
- Connexion avec des mots de passe hachés.
- Gestion de sessions pour restreindre l'accès aux pages pour les utilisateurs non connectés.

# Pré-réquis

- Version de PHP 5.6 ou supérieure
- MySQL

# Utilsation

1. Clonez le projet ou téléchargez le fichier zip sur votre serveur local.
2. Créez une nouvelle base de données MySQL et importez le fichier securiteprojet.sql pour créer la table nécessaire.
3. Modifiez les fichiers loginScript.php et registerScript.php pour inclure vos informations de connexion à la base de données MySQL.
4. Testez le formulaire en visitant register.php pour enregistrer un nouvel utilisateur et puis login.php pour vous connecter avec le compte nouvellement créé.

# Aperçu du code

- Le code utilise PHP et MySQL pour gérer l'inscription et la connexion des utilisateurs, avec des mesures de sécurité telles que les mots de passe hachés et le "salt" de mot de passe mis en œuvre pour protéger contre les attaques liées au mot de passe. <br>
- Le fichier registerScript.php gère le processus d'inscription d'utilisateur, y compris la validation des entrées et la vérification des noms d'utilisateur existants.<br>
- Le fichier loginScript.php gère le processus de connexion d'utilisateur, y compris les comparaisons de hachage pour une vérification sécurisée du mot de passe.<br>
- Le fichier home.php est la page principale qui ne peut être accessible que par les utilisateurs connectés.<br>

# Sécurité
- utilisation de "mysqli_real_escape_string" afin d'empêcher les attaques par injection SQL.<br>
- Les mots de passe sont hachés avec la fonction password_hash de PHP pour empêcher tout stockage en texte brut des mots de passe dans la base de données.<br>
- Le "salt" de mot de passe est généré de manière aléatoire à l'aide de la fonction random_bytes de PHP pour rendre chaque hachage unique.<br>
- Les entrées utilisateur sont validées avec des fonctions PHP telles que trim et htmlspecialchars pour éviter les injections SQL.<br>
- La session est gérée avec la fonction session_start de PHP pour restreindre l'accès aux pages aux utilisateurs connectés uniquement.<br>
