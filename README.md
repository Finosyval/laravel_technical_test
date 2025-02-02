# Application Laravel - TechnicalTest

## Description

Cette application Laravel permet aux utilisateurs de créer et gérer des boutiques en ligne sur des sous-domaines personnalisés. Les utilisateurs peuvent s'inscrire, se connecter, créer des magasins et gérer leurs sous-domaines. Le design du site n'étant pas la priorité, l'accent est mis sur la fonctionnalité plutôt que sur l'esthétique.

> **TL;DR** : Si tu veux tester sans lire tout ça, va directement sur [https://technicaltest.me](https://technicaltest.me).  
> Pour les curieux, continue à lire !

### Fonctionnalités principales :
- **Authentification** : Inscription et connexion simples.
- **Gestion de boutiques** : Créer des sous-domaines en choisissant le nom pour la boutique.
- **Liste des sous-domaines** : Chaque utilisateur peut consulter la liste de tous les sous-domaines associés à son compte. Chaque sous-domaine affiche les informations de l'utilisateur.
- **Fonctionnalités supplémentaires** : Modification du profil et déconnexion.

## Prérequis

- **PHP** >= 8.1
- **Composer**

## Installation

1. **Cloner le repository** :
    ```bash
    git clone https://github.com/Finosyval/laravel_technical_test.git
    cd 'chemin/vers/dossier/clonage'
    ```

2. **Installer les dépendances PHP** :
    ```bash
    composer install
    ```

3. **Configurer l'environnement** :
    Copie le fichier `.env.example` en `.env` et configure les variables suivantes :

    - Pour une base de données SQLite (en développement) :
    ```env
    DB_CONNECTION=sqlite
    DB_DATABASE=database/database.sqlite
    ```

    - Pour une base de données MySQL/PostgreSQL (en production) :
    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=nom_de_la_base
    DB_USERNAME=nom_utilisateur
    DB_PASSWORD=mot_de_passe
    ```

4. **Générer la clé d'application** :
    ```bash
    php artisan key:generate
    ```

5. **Exécuter les migrations** :
    ```bash
    php artisan migrate
    ```

6. **Lancer le serveur local** :
    ```bash
    php artisan serve
    ```

    L'application sera disponible sur [http://localhost:8000](http://localhost:8000).

## Tests Locaux

### DNS Local

Pour simuler des sous-domaines localement, configure un DNS local sur ta machine :

1. Ouvre le fichier `hosts` sous **Windows** : `C:/Windows/System32/drivers/etc/hosts`  
   Ajoute les lignes suivantes :

    ```bash
    127.0.0.1 app.local
    127.0.0.1 shop1.app.local
    127.0.0.1 shop2.app.local
    127.0.0.1 shop3.app.local
    ```

2. Configure les **Virtual Hosts** d'Apache (pour les utilisateurs de XAMPP) dans `C:/xampp/apache/conf/extra/httpd-vhosts.conf` :
    ```bash
    <VirtualHost *:8081>
        ServerName app.local
        ServerAlias *.app.local
        DocumentRoot "chemin/vers/dossier/clonage/public"
        <Directory "chemin/vers/dossier/clonage/public">
            AllowOverride All
            Require all granted
        </Directory>
    </VirtualHost>
    ```

3. Modifie les contrôleurs et routes pour remplacer `.technicaltest.me` par `.app.local` :
   - **ShopController** et **routes/web.php**.

C'est un peu un parcours du combattant, mais ça fait le job !

