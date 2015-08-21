# Correction

Ceci est la correction de l’exercice *typography* **au complet**.

- [La page d’accueil](index.html)
- [Les tableaux](table.html)
- [Les formulaires](order.html)
- Le menu déroulant

Consultez le fichier [CREDITS](CREDITS.md) pour plus de détails sur les
technologies et outils utilisés.


# Compatibilité:

- IE8+
- Firefox
- Chrome
- Safari

# Explications

## Le menu déroulant

La partie la plus complexe de l’exercice est le menu déroulant.
Dans cette explication :

- Niveau 1 fait référence au premier *ul*, le menu visible de la page
- Niveau 2 au *ul* qui apparaît au survol de ce menu visible
- Niveau 3 au *ul* qui apparaît au survol des *li* de niveau 2

Le principe est le suivant. 

- Cacher les *ul* de niveau 2: ils apparaîtront au survol.
- Les positionner en absolu relativement à leur parent (*li*, qui seront donc en
  position relative)
- Au survol d’un *li*, on affiche le ul immédiatement enfant **mais pas les
  suivants**, qui doivent rester cachés. Pour cela on dispose du sélecteur CSS
*>*, « descendant direct ».
- Au survol d’un *li* dans le niveau 2, on affiche l’enfant *ul* à une position
  différente: calé exactement sur la droite. On se positionne donc à 100% sur la
gauche. Le pourcentage étant calculé en référence à la largeur du parent (li),
on aura un calage parfait.


## Hyphenator

L’utilisation de hyphenator nous permet d’avoir du texte justifié proprement, en
fonction du langage de la page (observez les traits d’unions). Consultez la
documentation dans le liens pour plus de détails.

