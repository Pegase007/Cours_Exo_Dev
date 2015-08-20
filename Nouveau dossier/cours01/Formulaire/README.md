# Fresh Restaurant

Compatibilité:

- IE 10+
- Firefox
- Chrome
- Safari
- Partielle IE8/9
- Non testé sous mobile

Ce corrigé présente :

- La méthode [SMACSS](http://smacss.com/)
- Une méthode où l’on style les balises avec un style de base puis on utilise
  les classes et les identifiants sans contextualiser par rapport à la balise.
  Ceci permet de réutiliser un style sur une balise différent, mais attention
  aux abus de classes !

Cette correction n’utilise que des classes pour montrer que les identifiants
ne sont pas indispensables. En les supprimant on évite :

- Des problèmes de priorité CSS
- Des problèmes de réutilisation impossible (id uniques)

Les unités sont pour la plupart en em et pourcents

Sous IE9, le rendu est mediocre mais fonctionnel, les colonnes ne seront pas
affichées correctement puisque le CSS ne propose pas de fallback (par exemple à
l'aide de modernizr). 

Moderniz sert surtout a faire comprendre des propriétés modernes à des vieux navigateurs.


