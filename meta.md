
# Balises META

## SYNTAXE D'UNE BALISE META

Les balises meta doivent apparaître parmi les 512 premiers octets de la page.<br>
En effet, certains navigateurs ne consultent seulement ces premiers octets pour déterminer l'encodage utilisé pour la page.

```html
  <meta name="nom" content="contenu" />
```
## Balises recommandées pour toute page Web

- `charset` : détermine le jeu de caractère utilisé ; indispensable pour la validation W3C
- `author` : pas indispensable, mais pratique
- `description` : utile, à mettre
- `viewport` : indispensable pour le design responsive ; décrit la partie visible du contenu de la page ; [cf.](https://developer.mozilla.org/fr/docs/Web/HTML/Viewport_meta_tag)
- `color-scheme` : thème clair (light) ou sombre (dark) ou normal ; depuis Chrome 81 sorti le 7 avr 2020
```html
  <meta charset="utf-8">
  <meta name="author" content="Michel Diemer" />
  <meta name="description" content="Page HTML" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="color-scheme" content="normal">  
```
## Balise récente, vérifier le comportement pour d'anciens navigateurs
- `color-scheme` : thème clair (light) ou sombre (dark) ou normal ; depuis Chrome 81 sorti le 7 avr 2020
```html
  <meta name="color-scheme" content="normal">  
```

## Balises diverses
- `keywords` : devenue obsolète ; Google ne l'utilise plus depuis 2007
- `generator` : outil qui a généré la page html
- `creator` : personne ou organisation qui a créé la page
```html
  <meta name="keywords" content="…" />
  <meta name="generator" content="" />
  <meta name="creator" content="Michel Diemer">
```  
  
## Balises pour lesquelles une autre technologie existe
- `robots` : utiliser le fichier `robots.txt` ou l'en-tête HTTP `X-Robots-Tag` à la place
_ `http-equiv` : remplace une en-tête HTTP. À éviter mais peut être utile si on n'a pas accès à la configuration du serveur.
```html
  <meta name="robots" content="none">
  <!-- exemple de balse meta http-equiv -->
  <meta http-equiv="Content-Language" content="fr-FR" />
  <meta http-equiv="Cache-Control" content="max-age=600" />
  <meta http-equiv="Expires" content="Wed, 30 Feb 2009 17:00:59 GMT" />
```   
## Balises meta inutiles
```html
  <meta name="refresh" content="...">
  <meta name="revisit-after" content="14 days" />
  <meta name="revisit" content="7 days" />
  <meta name="MSSmartTagsPreventParsing" content="true" />
```  

## Références
- [Mozilla](https://developer.mozilla.org/fr/docs/Web/HTML/Element/meta)
- [AlsaCreations](https://www.alsacreations.com/article/lire/628-balises-meta.html)

