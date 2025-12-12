# Adiden Finances - Site Web

Site web moderne pour Adiden Finances, courtier en assurance et crédit, développé avec Laravel, Vue.js et Inertia.js.

## 🎨 Design

Le site utilise une identité visuelle professionnelle avec :
- **Couleur principale** : Bleu foncé (#1e3a8a)
- **Couleur secondaire** : Blanc (#ffffff)
- **Couleur d'accentuation** : Bleu clair (#3b82f6)
- **Fond alternatif** : Gris clair (#f8fafc)

## 📋 Structure du Site

### 1. Header / Navigation
- Logo "Adiden Finances"
- Menu de navigation (Accueil, Services, Assurances, Crédits, À Propos, Contact)
- Bouton CTA "Obtenir un Devis"
- Menu hamburger responsive pour mobile
- Header fixe avec effet de transparence au scroll

### 2. Sections

#### Hero Section
- Titre principal : "Adiden Finances - Votre Courtier Toujours à Vos Côtés"
- Sous-titre avec valeurs : Simple, Rapide, Digital
- Deux CTA : "Comparer mes Assurances" et "Simuler mon Crédit"
- Illustration moderne

#### Nos 3 Promesses
Trois cartes présentant :
1. **Simple** - Plateforme intuitive
2. **Rapide** - Devis en moins de 3 minutes
3. **À Vos Côtés** - Conseillers experts disponibles

#### Nos Services d'Assurance
Grille de 6 services :
- Assurance Auto
- Assurance Habitation
- Assurance Moto
- Assurance Vie
- Assurance Hospitalisation
- Assurance Familiale

#### Crédit Hypothécaire
Section split avec :
- Description et avantages (gauche)
- Illustration et badges (droite)
- Liste des bénéfices
- CTA "Simuler Mon Crédit"

#### Pourquoi Adiden Finances
- 4 statistiques clés (30+ partenaires, 5000+ clients, 96% satisfaction, 2h délai)
- Description du courtier indépendant

#### Comment Ça Marche
Timeline en 3 étapes :
1. **Comparez** - Devis personnalisés
2. **Choisissez** - Accompagnement conseil
3. **Signez** - Souscription digitale

#### Témoignages
3 témoignages clients avec :
- Note 5 étoiles
- Citation
- Nom et date

#### CTA Final
- Titre accrocheur
- Sous-titre
- Bouton "Commencer Maintenant"
- Mention : "Sans engagement • Gratuit • 100% Digital"

#### Footer
4 colonnes :
1. À Propos + Réseaux sociaux
2. Liens Assurances
3. Liens Crédits
4. Informations de Contact

## 🚀 Fonctionnalités Techniques

### Interactivité
- Menu hamburger pour mobile
- Smooth scroll vers les sections
- Animations au scroll (fade-in, slide-up) avec Intersection Observer
- Hover effects sur les cartes et boutons
- Modal de formulaire de devis

### Modal de Devis
Formulaire avec :
- Prénom et Nom
- Email
- Téléphone
- Type de demande (dropdown)
- Message (optionnel)

### Responsive Design
- **Desktop** : Layout complet avec toutes les fonctionnalités
- **Tablet** : Adaptation des grilles en 2 colonnes
- **Mobile** : Layout en colonne unique, menu hamburger

## 🛠️ Installation & Développement

### Prérequis
- PHP 8.1+
- Composer
- Node.js & npm
- MySQL ou autre base de données

### Installation
```bash
# Installer les dépendances PHP
composer install

# Installer les dépendances JavaScript
npm install

# Copier le fichier d'environnement
cp .env.example .env

# Générer la clé d'application
php artisan key:generate

# Créer la base de données et lancer les migrations
php artisan migrate

# Compiler les assets
npm run dev
```

### Lancer le projet
```bash
# Terminal 1 : Serveur Laravel
php artisan serve

# Terminal 2 : Vite dev server
npm run dev
```

Le site sera accessible sur `http://localhost:8000`

## 📁 Structure des Fichiers

```
resources/
├── js/
│   ├── Components/
│   │   └── Sections/
│   │       ├── HeroSection.vue
│   │       ├── PromisesSection.vue
│   │       ├── InsuranceServicesSection.vue
│   │       ├── MortgageCreditSection.vue
│   │       ├── WhyAdidenSection.vue
│   │       ├── HowItWorksSection.vue
│   │       ├── TestimonialsSection.vue
│   │       ├── FinalCTASection.vue
│   │       └── FooterSection.vue
│   ├── Layouts/
│   │   └── MainLayout.vue
│   ├── Pages/
│   │   └── Home.vue
│   └── app.js
├── css/
│   └── app.css
└── views/
    └── app.blade.php
```

## 🎨 Personnalisation

### Couleurs
Les couleurs sont définies dans `tailwind.config.js` :
```javascript
colors: {
    'adiden': {
        'blue-dark': '#1e3a8a',
        'blue-light': '#3b82f6',
        'gray-light': '#f8fafc',
    },
}
```

### Contenu
Les sections peuvent être modifiées dans les fichiers Vue correspondants dans `resources/js/Components/Sections/`

## 🚀 Production

Pour compiler les assets pour la production :
```bash
npm run build
```

## 📝 Informations de Contact (À mettre à jour)

- **Téléphone** : +32 2 XXX XX XX
- **Email** : contact@adiden-finances.be
- **Adresse** : Bruxelles, Belgique
- **Horaires** : Lun-Ven 9h-18h

## 📄 License

Propriété d'Adiden Finances © 2024

---

Développé avec ❤️ en utilisant Laravel + Vue.js + Inertia.js
