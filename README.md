# Application Laravel - TechnicalTest

## Description

Cette application Laravel permet aux utilisateurs de créer et gérer des boutiques en ligne sur des sous-domaines personnalisés. Les utilisateurs peuvent s'inscrire, se connecter, créer des magasins, et gérer leurs sous-domaines. Le site n'est pas censé s'attarder sur le css alors il est un peu bâclé.

  ```bash
Si tu as la flemme de lire tout ça, zappe tout ça et viens directement tester ici : https://technicaltest.me.
Pour les autres, let's go.
    ```

### Fonctionnalités principales :
- **Authentification** : Inscription, connexion simples.
- **Gestion de boutiques** : Créer  des sous domaines en entrant le nom voulu pour la boutique.
- **Liste des sous domaines** : Chaque utilisateur peut la liste de tous les sous domaines en son nom. Chaque site affiche les informations concernant cet utilisateur 
- **Extra** : Modification du profil, déconnexion.

## Prérequis

- **PHP** >= 8.1
- **Composer**


## Installation

1. **Cloner le repos** :
    ```bash
    git clone https://github.com/Finosyval/laravel_technical_test.git
    cd 'chemin/vers/dossier/clonage'
    ```

2. **Installer les dépendances PHP** :
    ```bash
    composer install
    ```
    seule necessité

3. **Configurer l'environnement** :
    Copie le fichier `.env.example` en `.env` et configure les variables suivantes :

    - Pour une base de données SQLite (pour développement) :
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

5. **Exécuter les migrations**  :
    ```bash
    php artisan migrate 

    ```

6. **Lancer le serveur local** :
    ```bash
    php artisan serve
    ```




## Extra

Pour les tests locaux, il serait plus prudent de configurer un dns local. Dans windows, aller dans C/windows/system32/drivers/etc/hosts et ajouter 

  ```bash
    127.0.0.1 app.local
    127.0.0.1 shop1.app.local
    127.0.0.1 shop2.app.local
    127.0.0.1 shop3.app.local
    ```

Puis dans les configurations apache, par exemple C:/xampp/apache/conf/extra/httpd-vhosts.conf pour les utilisateurs de xampp, rajouter un virtual host, avec les config suivantes :

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

    Ce qui implique simplement un changement dans le controlleur shopController et dans routes/web.php où les occurences à .technicaltest.me doivent être remplacées par .app.local. Parcours du combattant, mais bon.

