# Énonce

- Réaliser chaque énoncé dans un fichier portant le nom (écrit en minuscule) de l'énonce, exemple : `enonce-00.php`
- Récupérer tous les fichiers de ce dépôt afin **d'en créer un** sur votre compte **github** , le rendre **privé** m'envoyer une invitation pour je puisse y avoir accès
- Votre travail se fera dans une branche nommée **developp**
- Chaque énoncé aura sa **branche** dédié dans la branche **developp**
- Vous devrez faire des commits fréquents (atomiques) , soigner l'indentation de votre code

## Enonce-00 :

- Créer un tableau php avec ces nombres : 27,15,34,379,248,5643,81,211,999,142,300,572
- Tester les nombres de ce tableau pour savoir si chaque nombre est pair ou impair (un nombre est pair si le reste de la division par 2 est 0)
- Afficher les résultats sous forme de liste html `ul` comme ceci (xx,yy sont les nombres du tableau) :

```
* xx : pair
* yy : impaire
etc ...
```

## Enonce-01 : 

- Réaliser une fonction qui convertit une température de degré Celsius °C en degré Fahrenheit °F 
- Afficher les résultats dans un tableau html `table` , utiliser la fonction php `round` pour arrondir à l'unité supérieur
- Voici le tableau de conversion que vous devez avoir :

| °C | °F |
|--- |--- |
| 25 | 77 |
| 03 | 37.4 |
| 35 | 95 |
| 11 | 51.8 |


## Enonce-02 :

- Travailler avec le fichier json `persons.json` dans le dossier `data`
- Afficher le(a) deuxième ami(e) de Raymond Jimenez dans un titre html `<h3>`
- Afficher la couleur des yeux de Ball Shaffer en gras html `strong` sous la forme d'une phrase : `La couleur des yeux de Ball Shaffer est :`
- Afficher dans une balise html `article` dans l'ordre suivant :
	- image de la personne dans une balise html `img`
	- Nom : le nom de la personne
	- Age: âge de la personne
	- Couleur des yeux : la couleur des yeux de la personne
	- Email: email de la personne
	- Age: age de la personne
	- Fruit favori : fruit favori de la personne
	- Si isActive est à true : afficher ACTIF
	- Tags : afficher tous les tags de la personne séparé d'une virgule
	- Chaque personne sera séparé d'une ligne horizontale html `<hr>` 

Vous trouverez une [capture du résultat attendu](./data/resultat-enonces-02.png).

## Enonces-03 :

A l'aide d'une boucle foreach clef/valeur , parcourir le fichier **colors.json** , afin  d'obtenir le résultats de [la capture d'écran suivante](./data/resultat-enonces-03.png)

## Enonces-04 :

- Récupérer les données que vous renvoie cette url : `https://dummyjson.com/user` 
- Puis afficher , l'image , le prénom,nom et email de chaque **user**

Voir un exemple de rendu sur [la capture d’écran](./data/dummyjson_user_screenshot.png).

## Enonces-05 :

- Récupérer les données que vous renvoie cette url : `https://randomuser.me/api/?results=20` 
- Puis afficher , l'image , le prénom,nom et email de chaque **user**
- Pour chaque **femme** souligner son prénom et nom

Voir un exemple de rendu sur ce [pen](https://codepen.io/medker/pen/BaZyyXw)
