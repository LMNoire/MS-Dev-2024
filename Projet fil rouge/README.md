# Description
Projet fil rouge à réaliser en équipe en utilisant la méthode Agile et reprenant le stack technique de la formation
# Consigne
Réaliser une application/site pour une société de nettoyage fictive "CleanThis". La première partie inclue un espace front-office avec connexion classique et via service externe (Google Auth), un back-office permettant la gestion des rôles utilisateurs, la création (CRUD) et le suivi d'opérations, la génération de rapports en pdf et leur envoi par email, l'utilisation de l'API gouv adresse, le tout sous Symfony et relié à une BDD relationnelle MySql. La seconde partie inclue un back en node.js consommé comme API afin d'insérer et récupérer les logs dans MongoDB mais également remonter des statistiques affichés via des composants Javascript React. L'utilisateur doit également pouvoir utiliser de Google Lense afin de pouvoir soumettre en photo une opération et obtenir un devis selon l'objet reconnu.
# Sprints partie I
- Sprint #1 (26 février) : Mise en place du Git, Trello et Jiro. Etablissement du MCD puis du MLD avec JMerise. Réalisation de l'UML sur draw.io et du diagramme des appels sur framindmap. Premiers tests sur Symfony afin de vérifier les entités et leurs relations décidées durant cette première phase. Réalisation du wireframe sur Figma.

- Sprint #2 (06 mars) : Livraison prévue du login (classique + Google Auth), enregistrement d'utilisateurs (+ Autocomplétion API gouv adresse) et gestion des CRUD utilisateur par l'admin. Révision des méthodes sur le MCD, MLD et UML des entités avec l'intégration de classe de service. Intégration d'easyAdmin au projet pour la gestion des dashboard selon le rôle de l'utilisateur.

- Sprint #3 (13 mars) : Livraison prévue de la création d'opérations (+ Liaison client/salarié), méthode d'envoi de mails, la fonction mot de passe oublié, l'accès aux différents dashboard selon le rôle attribué ainsi qu'une amélioration du design/personnalisation d'EasyAdmin.

- Sprint #4 (20 mars) : Finition du dashboard côté salariés (historique, profils). Travail sur les vues (index, nos prestations). Ajout de l'envoi de photo lors de la soumission d'une opération ainsi que la génération de documents en pdf et la disponiblité des factures une fois l'opération terminée. Tests de non régression pour les fonctionnalités déjà en place. Acceptation ou refus des opérations par les salariés. Création d'utilisateurs réservé à l'admin.

- Sprint #5 (29 mars) : Traduction EN/FR, design CSS des pages et formulaires, statistiques disponibles pour l'admin, limitations d'acceptations selon le rôle des employés, système de pagination et de recherche dans dashboard. Corrections relatives à la sécurité, envoi de la facture par email automatique.

- Sprint #6 (04 avril) : Suite traduction EN/FR en continu, amélioration du parcours UX pour la création d'opérations, intégration API Map pour la création d'opération, corrections suite aux tests de non-regressions, finitions du CSS
# Sprints partie II
- Sprint #7 (15 avril) : Intégration des logs dans le projet. Insertion et lecture via un point d'API en node.js vers MongoDb
