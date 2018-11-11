<?php

// Modelo de objetos que se corresponde con la tabla de MySQL
class Serie extends \Illuminate\Database\Eloquent\Model
{
	public $timestamps = false;
}

$app->get('/series', function ($req, $res, $args)  {

    // Creamos un objeto collection + json con la lista de películas

    // Obtenemos la lista de los series de la base de datos y la convertimos del formato Json (el devuelto por Eloquent) a un array PHP
    $series = json_decode(\Serie::all());

    // Mostramos la vista
    return $this->view->render($res, 'serielist_template.php', [
        'items' => $series
    ]);
})->setName('series');


/*  Obtención de un serie en concreto  */
$app->get('/series/{name}', function ($req, $res, $args) {

    // Creamos un objeto collection + json con el serie pasado como parámetro

    // Obtenemos el serie de la base de datos a partir de su id y la convertimos del formato Json (el devuelto por Eloquent) a un array PHP
    $p = \serie::find($args['name']);
    $serie = json_decode($p);

    // Mostramos la vista
    return $this->view->render($res, 'serie_template.php', [
        'item' => $serie
    ]);

});


/* Borrado de un serie en concreto */
$app->delete('/series/{name}', function ($req, $res, $args) {

    // Obtenemos el serie de la base de datos a partir de su id y lo borramos
    $p = \Serie::find($args['name']);  
    $p->delete();

});

/* Añadido de un serie */

$app->post('/series', function ($req, $res, $args) {
    $template = $req->getParsedBody();

    $datos = $template['template']['data'];

    foreach ($datos as $item) { 
        switch ($item['name']) {
        case 'name':
            $name = $item['value'];
            break;

        case 'description':
            $description = $item['value'];
            break;

        case 'temporadas':
            $temporadas = $item['value'];
            break;

	case 'pais':
            $pais = $item['value'];
            break;
        case 'datePublished':
            $datePublished = $item['value'];
            break;

        case 'image':
            $image = $item['value'];
            break;
        }
    }

    $serie = new Serie;

    $serie->name = $name;
    $serie->description = $description;
    $serie->temporadas = $temporadas;
    $serie->pais = $pais;
    $serie->datePublished = $datePublished;
    $serie->image = $image;
    $serie->save();
});

/* Actualizacion de un serie en concreto */
/*  Obtención de un serie en concreto  */
$app->put('/series/{name}', function ($req, $res, $args) {

    // Creamos un objeto collection + json con el serie pasado como parámetro

    // Obtenemos el serie de la base de datos a partir de su id y la convertimos del formato Json (el devuelto por Eloquent) a un array PHP
    $p = \serie::find($args['name']);

    $template = $req->getParsedBody();

    $datos = $template['template']['data'];

    foreach ($datos as $item) { 
        switch ($item['name']) {
        case 'name':
            $nombre= $item['value'];
            break;

        case 'temporadas':
            $temporadas = $item['value'];
            break;

	case 'pais':
            $pais = $item['value'];
            break;
        case 'datePublished':
            $datePublished = $item['value'];
            break;

        case 'image':
            $image = $item['value'];
            break;
        }
    }

    $serie = new Serie;

    $serie->name = $name;
    $serie->description = $description;
    $serie->temporadas = $temporadas;
    $serie->pais = $pais;
    $serie->datePublished = $datePublished;
    $serie->image = $image;
    $serie->save();


});

?>