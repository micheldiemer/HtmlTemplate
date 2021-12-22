<?php

use JetBrains\PhpStorm\Internal\ReturnTypeContract;

function head($title, $lang='fr') {
  return <<<EOD
<!DOCTYPE html>
<html lang="$lang">
  <meta charset="utf-8" />
  <title>$title</title>

EOD;
}

function css(bool $normalize=true, bool $style=true, bool $form=true, bool $reset=false) {
  $files = [];
  if($reset)
    $files[] = 'reset.css';
  if($normalize)
    $files[] = 'normalize.css';
  if($style)
    $files[] = 'style.css';
  if($form)
    $files[] = 'form.css';

  $ret = '';
  foreach($files as $f) {
    $ret .= '  <link rel="stylesheet" href="css/' . trim($f) . '" />' . "\n";
  }
  return $ret;

}

function icon(string $href = '') {
  if($href === '')
    $href = 'data:;base64,iVBORw0KGgo=';

  return '  <link rel="icon" href="' . $href . '" />' . "\n";

}

function foot() {
  return '</html>';
}

function add_meta($name, $content) {
  return '  <meta name="' . $name . '" content="' . $content . '" />' . "\n";;
}

function addTag(string $tagName, int $nestLevel = 1, bool $close = false, bool $autoClose = false) {
  $ret = '';
  for($i = 0 ; $i < $nestLevel ; $i++)
    $ret .= '  ';
  $ret .= '<' . ($close ? '/' : '') . $tagName . ($autoClose ? ' /' : '') . '>' . "\n";
  return $ret;
}

function javascript(string | array $jsFiles = 'script.js') {
  $ret = '';
  if(is_string($jsFiles)) {
    $ret = mb_strlen($jsFiles) == 0 ? '' : '  <script src="js/' . trim($jsFiles) . '"></script>' . "\n";
  }
  elseif(is_array($jsFiles)) {
    foreach($jsFiles as $jsFile) {
      $ret .= '  <script src=js/"' . trim($jsFile) . '" />';
    }
  }
  return $ret;
}

function metas(string $author = '', string $description = '', string $viewport = 'width=device-width, initial-scale=1.0',  string $colorScheme = '', string $robots = '') {
  $ret = '';
  if($author) {
    $v = "author";
    $ret .= add_meta($v,$$v);
  }
  if($description) {
    $v = "description";
    $ret .= add_meta($v,$$v);
  }
  if($viewport) {
    $v = "viewport";
    $ret .= add_meta($v,$$v);
  }
  if($colorScheme) {
    $v = "color-scheme";
    $ret .= add_meta($v,$$v);
  }
  if($robots) {
    $v = "robots";
    $ret .= add_meta($v,$$v);
  }
  return $ret;
}

function createHtml($type = 'basic', $title = 'Page', $lang = 'fr', $author = 'Michel Diemer', $description='HTML / CSS / Javascript', $css = 'default', $js = 'default', $outputFile = '', $outputDir = 'templates/') {
  $html = head($title, $lang);
  $html .= icon('img/icons/favicon.png');

  if($type != 'basic') {
    $html .= metas($author, $description);
    if($type !== 'metas') {
      if($css === 'default') {
        $html .= css();
      }
      if($type !== 'index_css') {
        if($js === 'default') {
          $html .= javascript();
        }
      }
    }
  }

  $html .= addTag('main');
  $html .= addTag('main',close: true);

  $html .= foot();

  if($outputFile == '')
    $outputFile = $type . '.html';
  $outputFile = $outputDir . $outputFile;
  file_put_contents($outputFile, $html);
}

createHtml('basic');
createHtml('meta');
createHtml('index_css');
createHtml('index_js');
createHtml('index',outputDir:'../');
?>