<?php

namespace App\Controller;

use IntlRuleBasedBreakIterator;

class Controller
{
  public function route(): void
  {
    if (isset($_GET['controller'])) {
      switch ($_GET['controller']) {
        case 'page':
          //charger le controller page
          var_dump('On charge PageController')
          break;
        case 'book':
          //charger le controller book
          var_dump('On charge BookController')
          break;
        
        default:
          //Erreur
          break;
      }
    } else {
      //Charger la page d'accueil
    }
  }
}
