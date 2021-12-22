<?php
  use Favicon\FaviconImageGenerator as FaviconImageGenerator;
  use Favicon\FaviconHtmlGenerator as FaviconHtmlGenerator;

  function generereFavicon(
    $applicationName = 'App', $faviconDir = 'img/icons/',
    $msapplicationTileColor = '#FFF', $themeColor = '#FFF', $titleBarColor = '#FFF',
    $faviconFilePath  = 'img/icons/source.png',
    $appleFilePath  = 'img/icons/source.png',
    $appleStartupImageProportion = 20.0)
  {



    $faviconImageGenerator = new FaviconImageGenerator($faviconDir,  $faviconFilePath, $appleFilePath, $appleStartupImageProportion);
    $faviconImageGenerator->generate();

    $faviconHtmlGenerator = new FaviconHtmlGenerator($applicationName, $faviconDir, $msapplicationTileColor, $themeColor, $titleBarColor);
    return $faviconHtmlGenerator->generate();
  }





?>