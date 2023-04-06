0.  Créer les routes

1. Créer un processus d'enregistrement
 - Création de compte

- Un formulaire d'enregistrement
    - Entregistrer soit un client, soit un producteur
    - Valider les données
    - Hacher le mot de passe (Hash)
    - Enregistrer le nouveau profil
    - Connecter le nouvel utilisateur (Auth)
    - Rediriger l'utilisateur vers une page donnée
- Contrôleur pour  l'enregistrement

2. Login

- Créer un layout
    - avec un header -> Afficher le nom de la personne connectée et /ou un lien pour la deconnexion
- Formulaire de connexion
- Contrôleur pour exécuter la connexion (Auth)
- Redirection vers un page quelconque

3. Logout

- Créer un lien (dans le header du layout) pour la déconnexion
    - qui renvoie vers une route de déconnexion
- Déconnecter l'utilisateur
-- Renvoyer l'utilisayteur vers la page d'accueil
