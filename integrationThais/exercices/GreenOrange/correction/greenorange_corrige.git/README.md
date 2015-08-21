# ![Green Orange](img/logo.png)

Compatibilité 

- IE 10+
- Firefox
- Chrome
- Safari
- Non testé sous mobile

Ce corrigé présente :

- La méthode [SMACSS](http://smacss.com/)
- Une méthode où l’on style les balises par défaut puis on utilise les classes et les identifiants sans contextualiser par rapport à la balise. Ceci permet de réutiliser un style sur une balise différente, mais attention aux abus de classes !

Attention à la priorité des identifiants. Nous verrons dans d’autres exercices comment supprimer leur utilisation et quels avantages cela apporte.

La plupart des unités sont en pixels pour se concentrer sur la compréhension des bases.

Cette solution ne fonctionnera pas en dessous de IE9, puique modernizr n'a pas
été inclu, afin de proposer une solution épurée.


>En production, les CSS devraient être compressés en un seul fichier pour des
questions de performances.
