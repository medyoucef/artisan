Cloner le projet
bash
git clone https://github.com//khdamlii.git
cd khdamlii
2️⃣ Installer les dépendances PHP
bash
composer install
3️⃣ Installer les dépendances front 
bash
npm install
npm run dev
4️⃣ Créer le fichier .env
bash
cp .env.example .env
Puis configure :

Code
DB_DATABASE=khdamlii
DB_USERNAME=root
DB_PASSWORD=
5️⃣ Générer la clé de l’application
bash
php artisan key:generate
6️⃣ Créer la base de données
Dans phpMyAdmin ou MySQL :

sql
CREATE DATABASE khdamlii;
7️⃣ Lancer les migrations
bash
php artisan migrate
Si tu veux aussi les données de test :

bash
php artisan migrate --seed
8️⃣ Créer le lien storage
bash
php artisan storage:link
9️⃣ Lancer le serveur
bash
php artisan serve
Le site sera disponible sur :

Code
http://localhost:8000
🎉 Le projet est maintenant opérationnel