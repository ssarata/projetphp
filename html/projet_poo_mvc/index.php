<?php
use Src\Controller\EmployeController;

require_once 'vendor/autoload.php';

$curentRoute = "";
// Obtenez le chemin de l'URL
if (isset($_GET["page"])) {
    $curentRoute = $_GET["page"];
}

$routes = [
    'index' => '',
    'createForm' => 'create',
    'create' => 'create',
    'updateForm' => 'update',
    'update' => 'update',
    'delete' => 'delete',
];
// Définissez vos routes
switch ($curentRoute) {
    case $routes['index']:
        // Page d'accueil
        $controller = new EmployeController();
        $controller->index();
        break;
    case $routes['create']:
        //Page de création
        $controller = new EmployeController();
        $controller->create();
        break;
    case $routes['update']:
        // Page de mise à jour
        $controller = new EmployeController();
        $controller->update();
        break;
    case $routes['delete']:
        // Page de suppression
        $controller = new EmployeController();
        $controller->delete(); // Remplacez 1 par l'ID de l'employé à supprimer
        break;
    case 'sarata':
            echo 'srata';
            break;
    default:
        // Gestion des routes inconnues (par exemple, afficher une page d'erreur 404)
        echo 'Page non trouvée';
        break;
}