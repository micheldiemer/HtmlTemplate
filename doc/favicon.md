# Favicon

## Résumé

- `favicon.ico` : en 32x32, pour les anciens navigateurs  
  Si on garde un favicon il sera chargé par défaut par Google Chrome  
  Eventuellement remplacer par `<link rel="icon" href="/icon.png" type="image/png">`  
  pour que Google charge le fichier .svg à la place
- `icon.svg` : image vectorielle qui se redimensionne facilement  
  Mal supporté par Safari  
  Avantage du format SVG : support le `dark mode`
- `apple-touch-icon` : en 180#x180 pour les smartphones et tablettes
- `manifest`

```html
<!-- link rel="icon" href="/favicon.ico" sizes="any" / --><!-- 32×32 -->
<link rel="icon" href="/icon.png" type="image/png" /><!-- 32×32 -->
<link rel="icon" href="/icon.svg" type="image/svg+xml" />
<link rel="apple-touch-icon" href="/apple-touch-icon.png" /><!-- 180×180 -->
<link rel="manifest" href="/manifest.webmanifest" />
```

Fichier manifest

```json
{
  "icons": [
    { "src": "/192.png", "type": "image/png", "sizes": "192x192" },
    { "src": "/512.png", "type": "image/png", "sizes": "512x512" },
    {
      "src": "/android-maskable-192.png",
      "type": "image/png",
      "sizes": "192x192",
      "purpose": "maskable"
    }
  ]
}
```

## Documentation

- [favicon](https://www.alsacreations.com/astuce/lire/59-icon-link-rel-favicon-ico-navigateur.html)
- [Real Favicon Generator](https://realfavicongenerator.net/)
  est un outil gratuit en ligne permettant de vérifier et de générer des fichiers "favicon" pour son site web. Bien plus complet que d'autres outils du même acabit, RFG ne se contente pas de la version favicon de bureau mais également des versions pour smartphones et tablettes iOS, Android
- Code généré par Real Favicon Generator
- Le guide pour 2021 :
- [Details](https://evilmartians.com/chronicles/how-to-favicon-in-2021-six-files-that-fit-most-needs)
- [Résumé](https://css-tricks.com/how-to-favicon-in-2021/)
- [Documentation exhaustive](https://github.com/audreyfeldroy/favicon-cheat-sheet)

```html
<link
  rel="apple-touch-icon"
  sizes="180x180"
  href="/img/icons/apple-touch-icon.png"
/>
<link
  rel="icon"
  type="image/png"
  sizes="32x32"
  href="/img/icons/favicon-32x32.png"
/>
<link
  rel="icon"
  type="image/png"
  sizes="16x16"
  href="/img/icons/favicon-16x16.png"
/>
<link rel="manifest" href="/img/icons/site.webmanifest" />
<link rel="mask-icon" href="/img/icons/safari-pinned-tab.svg" color="#5bbad5" />
<link rel="shortcut icon" href="/img/icons/favicon.ico" />
<meta name="msapplication-TileColor" content="#da532c" />
<meta name="msapplication-config" content="/img/icons/browserconfig.xml" />
<meta name="theme-color" content="#ffffff" />
```
