# 📚 Projet : Création d’un site web pour un salon du livre jeunesse — “Plumes & Pages”

## 🎯 Objectif

Mettre en pratique toutes les compétences WordPress en créant un site vitrine dynamique pour un salon du livre dédié à la littérature jeunesse, ses auteurs, illustrateurs et maisons d’édition.

---

## 📝 Description

Le site présente l’événement fictif **“Plumes & Pages”**, un salon annuel avec des expositions, ateliers pour enfants, séances de dédicaces et conférences autour de la lecture et de l’écriture. Le site doit être coloré, accessible et engageant.

Il comprendra :

- Pages de présentation (événement, invités, programme)
- Fiches auteurs/illustrateurs
- Programme des ateliers interactifs
- Formulaires d’inscription
- Boutique WooCommerce pour réserver des livres ou des goodies

---

# 🗂️ Structure du projet Plumes & Pages - WP

```bash
plumes_pages
│
├── functions.php                   # Fonctions principales du thème
├── style.css                       # Styles du thème
├── templates/                      # Templates personnalisés
│   └── single-atelier.php          # Template pour afficher un atelier
│
└── plugin/
    └── atelier-inscription/
        ├── atelier-inscription.php # Plugin personnalisé pour l'inscription
        ├── includes/                # Dossier pour les fichiers inclus
        │   ├── cpt-atelier.php     # Définition du CPT "Atelier"
        │   └── form-handler.php    # Traitement du formulaire d'inscription
        ├── assets/                 # Dossier pour les fichiers CSS/JS du plugin
        └── readme.md               # Documentation du plugin
```

---

## 🛠 Modalités

Travail en groupes en mode **mob programming**, ou en sous-groupes pour gérer les différentes sections (contenu, design, dev).  
Travail collaboratif sur GitHub + organisation type **Kanban** (Trello/Notion).

---

## ✅ Tâches à réaliser

### 1. 🏁 Installation de WordPress

- Création via **LocalWP**
- Réglages de base
- Ajout de comptes utilisateurs : organisateur, intervenant, parent

---

### 2. 📑 Création de contenu

- Page d'accueil avec affiches, dates, teaser vidéo
- Pages : À propos, Programme, Infos pratiques, Contact
- Section "Nos invités" avec fiches auteurs/illustrateurs (bio + œuvres)
- Page “Ateliers enfants” avec description des activités

---

### 3. 🎨 Thème & personnalisation

- Thème enfant basé sur **Astra** ou **Blocksy**
- Identité visuelle douce et colorée  
  _Inspiration :_ [Salon de Montreuil 2023](https://montreuil2023.salon-livre-presse-jeunesse.net/)
- Ajout de blocs **Gutenberg personnalisés** si besoin
- Slider d’images, galeries illustrées, pictogrammes enfants-friendly

---

### 4. 🔍 Référencement & performance

- Plugin **Rank Math** : optimiser 1 article + 1 page
- Lazy Load + mise en cache avec **WP Super Cache**
- Vérification via **Lighthouse** + **Eco-Index**
- Utilisation d’images optimisées et compressées (TinyPNG)

---

### 5. 🧩 CPT & plugin custom

**Custom Post Type “Atelier”** :

- Titre  
- Âge recommandé  
- Animateur  
- Horaire  
- Nombre de places  

**Plugin personnalisé** : formulaire d'inscription parent/enfant à un atelier

- Affichage via shortcode
- Envoi dans le back-office avec statut **brouillon**

---

### 6. 🛍 WooCommerce

- Vente de produits dérivés du salon : totebags, carnets, albums illustrés
- Réservation de **packs d'ouvrages jeunesse**
- Paiement simulé avec WooCommerce + **sandbox PayPal**

---

## 🌟 Bonus / Avancé

- Module “**Coloriage à télécharger**” (fichiers PDF à imprimer)
- Espace privé pour les enseignants (accès via mot de passe)
- Système de **témoignages** des parents/enfants
- Création d’un **jeu interactif** en JS intégré à une page  
  _(ex : memory autour des livres du salon)_

---

## 🎨 Inspirations visuelles

- [Salon du livre et de la presse jeunesse – Montreuil](https://www.slpjplus.fr/)
- [Festival du Livre de Paris](https://festivaldulivredeparis.fr)
- [Éditions Sarbacane](https://www.editions-sarbacane.com)
