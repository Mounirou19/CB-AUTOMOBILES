# 🚗 CB AUTOMOBILES - Site Web Volkswagen

Un site web moderne pour concessionnaire Volkswagen développé avec Symfony 6.4, Bootstrap 5.3 et Docker.

![Volkswagen](https://img.shields.io/badge/Volkswagen-Concessionnaire-blue)
![Symfony](https://img.shields.io/badge/Symfony-6.4-green)
![Bootstrap](https://img.shields.io/badge/Bootstrap-5.3-purple)
![Docker](https://img.shields.io/badge/Docker-Containerized-blue)

## 🌟 Fonctionnalités

- **🏠 Page d'accueil** avec présentation des véhicules
- **🚙 Page occasions** avec filtres et recherche
- **📰 Articles** sur les innovations Volkswagen
- **👥 Qui sommes-nous** avec présentation de l'équipe
- **🔍 Détails produits** pour chaque véhicule
- **📱 Design responsive** avec Bootstrap 5.3
- **🎨 Styles personnalisés** aux couleurs Volkswagen

## 🛠️ Technologies utilisées

- **Backend** : Symfony 6.4 (PHP 8.3)
- **Frontend** : Bootstrap 5.3 + SCSS personnalisé
- **Base de données** : MySQL 8
- **Conteneurisation** : Docker & Docker Compose
- **Assets** : Symfony AssetMapper
- **Styles** : Sass/SCSS compilé

## 🚀 Installation et lancement

### Prérequis
- Docker et Docker Compose
- Git

### Étapes d'installation

1. **Cloner le projet**
```bash
git clone https://github.com/Mounirou19/CB-AUTOMOBILES.git
cd CB-AUTOMOBILES
```

2. **Démarrer les conteneurs Docker**
```bash
docker-compose up -d
```

3. **Installer les dépendances PHP**
```bash
docker-compose exec webserver composer install
```

4. **Installer les dépendances Node.js**
```bash
cd www
npm install
```

5. **Compiler les styles SCSS**
```bash
npm run build
```

6. **Créer la base de données**
```bash
docker-compose exec webserver php bin/console doctrine:database:create --if-not-exists
```

## 🌐 Accès aux services

Une fois les conteneurs démarrés :

- **Site web** : http://localhost
- **PHPMyAdmin** : http://localhost:8080
- **MailHog** (test emails) : http://localhost:8025

### Identifiants base de données
- **Utilisateur** : docker
- **Mot de passe** : docker
- **Base** : docker

## 📁 Structure du projet

```
├── docker-compose.yml          # Configuration Docker
├── bin/                        # Images Docker (PHP, MySQL)
├── config/                     # Configuration Apache, PHP, vhosts
├── www/                        # Application Symfony
│   ├── src/Controller/         # Contrôleurs Symfony
│   ├── templates/              # Templates Twig
│   ├── assets/                 # Assets (JS, SCSS)
│   ├── public/                 # Fichiers publics
│   └── ...
└── README.md
```

## 🎨 Développement frontend

### Compiler les styles en mode watch
```bash
cd www
npm run dev
```

### Build pour production
```bash
npm run build
```

## 🐳 Commandes Docker utiles

```bash
# Démarrer les services
docker-compose up -d

# Arrêter les services
docker-compose down

# Voir les logs
docker-compose logs

# Accéder au conteneur PHP
docker-compose exec webserver bash

# Commandes Symfony
docker-compose exec webserver php bin/console cache:clear
docker-compose exec webserver php bin/console debug:router
```

## 📱 Pages disponibles

- `/` - Page d'accueil
- `/occasion` - Véhicules d'occasion
- `/article/{id}` - Articles (1 ou 2)
- `/produit/{id}` - Détails produit
- `/qui-sommes-nous` - À propos

## 🤝 Contribution

Les contributions sont les bienvenues ! N'hésitez pas à :

1. Fork le projet
2. Créer une branche (`git checkout -b feature/AmazingFeature`)
3. Commit vos changements (`git commit -m 'Add AmazingFeature'`)
4. Push vers la branche (`git push origin feature/AmazingFeature`)
5. Ouvrir une Pull Request

## 📄 Licence

Ce projet est sous licence MIT. Voir le fichier `LICENSE` pour plus de détails.

## 👨‍💻 Auteur

**Mounirou** - [Mounirou19](https://github.com/Mounirou19)

---

⭐ N'hésitez pas à mettre une étoile si ce projet vous plaît !