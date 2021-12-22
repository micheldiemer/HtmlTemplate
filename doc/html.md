# Template HTML5

## Balises `<html>` `<head>` et `<body>`

- Le W3C recommande de mettre `<html lang="fr"> ... </html>`
- Les balises `<head>` et `<body>` sont facultatives en HTML5 dans certains cas, mais c'est mal supporté par IE9
- Google n'utilise pas l'attribut `lang` de la balise `html`
- Google recommande de **_ne pas mettre_** les balises `<html>` `<head>` et `<body>`
- Pour la langue Google recommande d'utiliser [hreflang](https://ahrefs.com/blog/hreflang-tags/)
- Voir [HTML5 boilerplate](https://html5boilerplate.com/)
- Voir [http://www.initializr.com/]

## Structure du projet

- [Structure](https://medium.com/@nmayurashok/file-and-folder-structure-for-web-development-8c5c83810a5)

## Fichier favicon

Résumé

- `favicon.ico` : en 32x32, pour les anciens navigateurs<br>
  Si on garde un favicon il sera chargé par défaut par Google Chrome<br>
  Eventuellement remplacer par `<link rel="icon" href="/icon.png" type="image/png">` pour que Google charge le fichier .svg à la place
- `icon.svg` : image vectorielle qui se redimensionne facilement<br>
  Mal supporté par Safari<br>
  Avantage du format SVG : support le `dark mode`
- `apple-touch-icon` : en 180x180 pour les smartphones et tablettes
- `manifest` :

```html
<link rel="icon" href="/favicon.ico" sizes="any" /><!-- 32×32 -->
<link rel="icon" href="/icon.png" type="image/png" /><!-- 32×32 -->
<link rel="icon" href="/icon.svg" type="image/svg+xml" />
<link rel="apple-touch-icon" href="/apple-touch-icon.png" /><!-- 180×180 -->
<link rel="manifest" href="/manifest.webmanifest" />
```

```json
{
  "icons": [
    { "src": "/192.png", "type": "image/png", "sizes": "192x192" },
    { "src": "/512.png", "type": "image/png", "sizes": "512x512" },
    { "src": "/android-maskable-192.png", "type": "image/png", "sizes": "192x192", "purpose": "maskable" },
  ]
```

- [favicon](https://www.alsacreations.com/astuce/lire/59-icon-link-rel-favicon-ico-navigateur.html)<br>
- [Real Favicon Generator](https://realfavicongenerator.net/)
  est un outil gratuit en ligne permettant de vérifier et de générer des fichiers "favicon" pour son site web. Bien plus complet que d'autres outils du même acabit, RFG ne se contente pas de la version favicon de bureau mais également des versions pour smartphones et tablettes iOS, Android<br> - Code généré par Real Favicon Generator
- Le guide pour 2021 :
- [Details](https://evilmartians.com/chronicles/how-to-favicon-in-2021-six-files-that-fit-most-needs)
- [Résumé](https://css-tricks.com/how-to-favicon-in-2021/)
- [Documentation exhaustive](https://github.com/audreyfeldroy/favicon-cheat-sheet)

```html
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png" />
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png" />
<link rel="manifest" href="/site.webmanifest" />
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5" />
<meta name="msapplication-TileColor" content="#da532c" />
<meta name="theme-color" content="#ffffff" />
```
