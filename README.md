# Objectif v1 

## Homepage -->
route : /
 - Affiche la page d'accueil
 
 EXEMPLE : 
 - Liste des derniers articles ( par exemple 4)
 - 4 catégories aleatoires
 - Montrer les pages les + vues
 
## Menu -->
 
- Lien vers liste des catégoreis ( categories.php) en statique
 
## Single.php -->
 
 - route : /page/slug ou id
 
-  Affiche le contenu d'une seule page

## Category.php -->

- route : /category/slug ou id

- liste de toute les pages associe a la categorie

## Categories.php -->

- route : /categories/slug ou id

- liste de toute les categories
--> nous redirige vers la page category.php au clique


# Entity

## Page
- id
- name
- slug
- content
- title
- description
- isPublic
- userId

# ItemCategory

- id
- pageId
- categoryId
- index

# ItemPage

- id
- pageId
- mediaId

 
# Category

- id
- name
- slug
- icon

# Media

- id
- path
- name

# Comment
- id
- userId
- body
- pageId
- isModerated


