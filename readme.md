1- interface loginInterface {
  public function login($user, $password);
}

2- Les methodes magiques:

  - La méthode __construct() va être appelée dès qu’on va instancier une classe possédant un constructeur.
  Cette méthode est très utile pour initialiser les valeurs dont un objet a besoin dès sa création et avant toute utilisation de celui-ci.
  
  - La méthode __destruct() est la méthode « contraire » de la fonction constructeur et va être appelée dès qu’il n’y a plus de référence sur un objet donné ou dès qu’un objet n’existe plus dans le contexte d’une certaine application. Bien évidemment, pour que le destructeur soit appelé, vous devrez le définir dans la définition de la classe tout comme on a l’habitude de le faire avec le constructeur.
  Le destructeur va nous servir à « nettoyer » le code en détruisant un objet une fois qu’on a fini de l’utiliser. Définir un destructeur va être particulièrement utile pour effectuer des opérations juste avant que l’objet soit détruit.
  
  - La méthode magique __get() va s’exécuter si on tente d’accéder à une propriété inaccessible (ou qui n’existe pas) dans une classe. Elle va prendre en argument le nom de la propriété à laquelle on souhaite accéder.
  
  - La méthode magique __set() s’exécute dès qu’on tente de créer ou de mettre à jour une propriété inaccessible (ou qui n’existe pas) dans une classe. Cette méthode va prendre comme arguments le nom et la valeur de la propriété qu’on tente de créer ou de mettre à jour.
  
  - la méthode magique __isset() va s’exécuter lorsque les fonctions isset() ou empty() sont appelées sur des propriétés inaccessibles.
   La fonction isset() va servir à déterminer si une variable est définie et si elle est différente de NULL tandis que la fonction empty() permet de déterminer si une variable est vide.
   
   - la méthode magique __unset() va s’exécuter lorsque la fonction unset() est appelée sur des propriétés inaccessibles.
    La fonction unset() sert à détruire une variable.
    
3-  __destruct().

4- La classe abstraite.   
   Et pour la crée on utilise le mot clé abstract, une classe abstraite n’est pas structurellement différente d’une classe classique (à la différence de la présence potentielle de méthodes abstraites) et qu’on va donc tout à fait pouvoir ajouter des constantes, des propriétés et des méthodes classiques dans une classe abstraite.
   
   <?php
    
   abstract class EtreHumain
   {
     
     protected $sexe;
    
    
     protected $nom;
    
     
     public function setNom($nom)
     {
       $this->nom = $nom;
     }
    
    
     public function getNom()
     {
       return $this->nom;
     }
    
     
     public function getSexe()
     {
       return $this->sexe;
     }
   }
   ?>
   
   5- La visibilité permet de définir de quelle manière un attribut ou une méthode d'un objet sera accessible dans le programme. PHP introduit 3 niveaux différents de visibilité applicables aux propriétés ou méthodes de l'objet.
      Il s'agit des visibilités publiques, privées ou protégées qui sont respectivement définies dans la classe au moyen des mots-clés public, private et protected.
      
   - L'accès public: C'est l'accès par défaut de PHP si l'on ne précise aucune visibilité. Tous les attributs et méthodes qui sont déclarés sans l'un de ces trois mots-clés sera considéré automatiquement par l'interprêteur comme publique.
        Le mot-clé public indique que les propriétés et méthodes d'un objet seront accessibles depuis n'importe où dans le programme principal ou bien dans les classes mères héritées ou classes filles dérivées.
        
   - L'accès private: Le mot-clé private permet de déclarer des attributs et des méthodes qui ne seront visibles et accessibles directement que depuis l'intérieur même de la classe. C'est à dire qu'il devient impossible de lire ou d'écrire la valeur d'un attribut privé directement en faisant $monVehicule->_volumeCarburant. 
   
   - L'accès protected
     L'accès protégé ( protected ) est un intermédiaire entre l'accès publique et l'accès privé. Il permet d'utiliser des attributs et méthodes communs dans une classe parente et ses classes qui en héritent.
     
   6- Les exceptions sont une façon différente de gérer les erreurs. Celles-ci sont en fait des erreurs lancées par PHP lorsque quelque chose qui ne va pas est survenu. ça permet de lancer nos propres exceptions. Le constructeur de la classeExceptiondemande en paramètre le message d'erreur et on peut preciser le code d'erreur.
   par exemple : if (!is_numeric($a) || !is_numeric($b))
                   {
                     // On lance une nouvelle exception grâce à throw et on instancie directement un objet de la classe Exception.
                     throw new Exception('Les deux paramètres doivent être des nombres');
                   }
   
   7- Le routeur va switcher les appels en fonction des informations contenues dans l’url de la page (méthode GET ou répertoires virtuels).
   L’exemple ci-dessous illustre le rôle d’un contrôleur. Lorsqu’on arrive sur la page index.php, on appelle le contrôleur (sous forme d’objet – POO).
   
   require 'Routeur.php';
    
   //instancie un routeur pour traiter la requête entrante
   $routeur = new Routeur();
   $routeur->routerRequete();                 
     
   8- Avantage d'utilisation du pattern MVC:
   - Une conception claire et efficace grâce à la séparation des données de la vue et du contrôleur
   - Un gain de temps de maintenance et d’évolution du site
   - Une plus grande souplesse pour organiser le développement du site entre différents développeurs (indépendance des données, de l’affichage (webdesign) et des actions)

   9- 
   - Le Modèle:
      Le modèle correspond aux données, la plupart du temps stockées dans une base de données. Mais celles-ci peuvent également êtres contenues dans un fichier XML ou dans des fichiers texte.
      Les données peuvent être exploitées sous forme de classes, dans un langage de programmation orientée objet (comme PHP5).
      
   - Le Contrôleur:
      Le contrôleur est l’élément qui va utiliser les données pour les envoyer à la vue. Son rôle est donc de récupérer les informations, de les traiter en fonction des paramètres demandés par la vue (par l’utilisateur, exemple: afficher les derniers articles), puis de renvoyer à la vue les données afin d’être affichées.
       Le contrôleur peut donc instancier différents objets (classe User, classe Articles, …) qui enverront des requêtes vers la base de données ou récupéreront des données XML.
       La transmission à la vue des données récupérées se fait généralement à l’aide d’un template: insertion des données dans un fichier HTML qui va être envoyé au navigateur.
      
   - La vue:
      La vue correspond à un fichier HTML la plupart du temps (peut être un fichier XML avec une feuille de style XSL). Elle se contente d’afficher le contenu qu’elle reçoit sans avoir connaissance des données.
      Elle ne contient que les informations liées à l’affichage. Dans le cas d’une page HTML, elle contient les éléments <h1>, <p>, <div> … dans lesquels vont venir s’insérer les contenus.
   