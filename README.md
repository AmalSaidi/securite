# Projet Sécurité des systèmes d'informations

Ce projet est lié à la sécurité des systèmes d'informations, il représente un formulaire de login sécurité ainsi que la possiblité de créer un nouveau utilisateur grâce à un autre formulaire d'inscription.
Il s'agit d'un formulaire d'inscription et de connexion sécurisé en PHP avec des mots de passe hachés . Il comprend les fonctionnalités suivantes :

- Inscription d'utilisateur avec la validation des champs d'entrée et vérification si le nom d'utilisateur existe déjà
- Connexion avec des mots de passe hachés.
- Gestion de session pour restreindre l'accès aux pages pour les utilisateurs non connectés

# Pré-réquis
- Version de PHP 5.6 ou supérieure
- MySQL

# Utilsation
1. Clonez le projet ou téléchargez le fichier zip sur votre serveur local.
2. Créez une nouvelle base de données MySQL et importez le fichier securiteprojet.sql pour créer la table nécessaires.
3. Modifiez les fichiers loginScript.php et registerScript.php pour inclure vos informations de connexion à la base de données MySQL.
4. Testez le formulaire en visitant register.php pour enregistrer un nouvel utilisateur et puis login.php pour vous connecter avec le compte nouvellement créé.
