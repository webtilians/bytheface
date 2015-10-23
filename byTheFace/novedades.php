<?php
$m = new MongoClient("mongodb://vps204956.ovh.net"); // conectar
$db = $m->selectDB("bytheface");
$collection = new MongoCollection($db, 'articulos');
$artQuery = array('idArticulos' => 'Fruit');
$cursor = $collection->find();
$lista;
foreach ($cursor as $doc) {
    var_dump($doc);
    $lista[$cursor]=$doc;
}
echo json_encode($lista);

