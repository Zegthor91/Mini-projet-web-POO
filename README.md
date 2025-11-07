# **Mini Projet Web POO en PHP**

# **Contexte**

Vous devez créer un mini site Web en PHP orienté objet permettant de gérer une petite liste de produits comme si c’était un mini catalogue.

L’objectif est d’utiliser la POO, les classes, les propriétés privées, les getters/setters, les constructeurs, et l’héritage.

# **Fonctionnalités attendues**

- Une page d’accueil index.php qui affiche tous les produits
- Une possibilité d’ajouter un produit via un formulaire HTML add.php
- Les produits doivent être stockés dans un tableau PHP (pas de BDD pour l’instant)

# **Contraintes techniques**

Vous devez créer :

**1) une classe**

**Produit**

**avec :**

- id (int)
- nom (string)
- prix (float)
- une méthode afficher() qui retourne le nom et le prix

**2) une classe**

**ProduitAlimentaire**

**qui hérite de**

**Produit**

**avec :**

- une date d’expiration (string ou DateTime)
- une méthode afficherExpiration() qui retourne la date

**3) une classe**

**Catalogue**

**qui contient :**

- un attribut privé $produits (tableau)
- une méthode ajouterProduit(Produit $p)
- une méthode afficherCatalogue() qui retourne tous les produits en HTML

# **Ce que doit faire le site**

1. Sur la page d’accueil (index.php) :
    - vous créez un objet Catalogue
    - vous ajoutez 2 ou 3 produits en dur (par exemple "Pomme", "Stylo", …)
    - vous affichez le catalogue en HTML
2. 
3. Sur la page add.php :
    - un formulaire permet de saisir nom + prix
    - si la date d’expiration est remplie → c’est un ProduitAlimentaire
    - sinon → c’est un Produit normal
    - après validation, vous ajoutez ce produit dans le catalogue
    - vous retournez à index.php
4. 

# **Livrable**

- Un dossier complet du mini site
- Pas de framework
- Que du PHP POO (classes + require)
