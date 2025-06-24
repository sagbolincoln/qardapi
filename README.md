# 🚀 Qard Intégration

Bienvenue dans Qard, une application web basée sur Symfony qui intègre et affiche les données d'entreprises et de clients en utilisant l’API QardAPI.

Ce projet est un exemple d’intégration complète : 
    -backend Symfony
    -frontend Bootstrap
    -routes dynamiques et 
    -bonnes pratiques de code.


## 📌 Fonctionnalités

✅ Page d’accueil claire et minimaliste  
✅ Menu de navigation responsive (Bootstrap)  
✅ Liste des clients  
✅ Liste des entreprises avec liens vers les détails  
✅ Fiche détaillée pour chaque entreprise  
✅ Dashboard pour visualiser les données  
✅ Appel de l’API QardAPI via un service Symfony (`qardApiService`)


## 🗂️ Arborescence du projet

qard/
 ├── config/
 ├── public/
 ├── src/
 │   ├── Controller/
 │   ├── Service/
 │   │   └── QardApiService.php
 ├── templates/
 │   ├── base.html.twig
 │   ├── qard/
 ├── .env
 ├── composer.json
 ├── README.md

⚙️ Prérequis
PHP >= 8.1

Composer

Symfony CLI (optionnel mais recommandé)

Accès à l’API QardAPI (clé API)

🚀 Installation
1️⃣ Cloner le projet
bash
Copier
Modifier
git clone https://github.com/TON_UTILISATEUR/qard.git
cd qard
2️⃣ Installer les dépendances PHP
bash
Copier
Modifier
composer install
3️⃣ Copier et configurer l’environnement
bash
Copier
Modifier
cp .env .env.local
Dans .env.local, configure ta clé API Qard :

env
Copier
Modifier
QARD_API_KEY=ta_cle_api_ici
4️⃣ Lancer le serveur Symfony
bash
Copier
Modifier
symfony server:start
ou avec PHP natif :

bash
Copier
Modifier
php -S localhost:8080 -t public
✅ Comment utiliser l'application
Accède à http://localhost:8000 ou http://localhost:8080

Clique sur les boutons du menu pour naviguer :

🏠 Accueil

👥 Clients

🏢 Entreprises

🔍 Détail d’une entreprise

📊 Dashboard

🧩 Commandes utiles
Commande	Description
composer install	Installer les dépendances
symfony server:start	Lancer le serveur
php -S localhost:8080 -t public	Serveur PHP natif
composer update	Mettre à jour les dépendances
composer dump-autoload	Régénérer l’autoload

🤝 Contribution
✅ Fork le repo
✅ Crée une branche : git checkout -b feature/ma-feature
✅ Commit : git commit -m "Ajout de ma feature"
✅ Push : git push origin feature/ma-feature
✅ Crée une Pull Request

📧 Contact
👤 Auteur : Lincoln SAGBO

📫 Email : ton-email@exemple.com

🌍 LinkedIn : ton-profil

📜 Licence
Ce projet est distribué sous la licence MIT.
Tu peux l’utiliser librement pour apprendre, tester ou comme base pour un projet réel.