<?php

$object = ['GitHub' => 'TripleYei', 'Blog' => 'blogtriple.netlify.app'];
header("content-type: application/json");
echo json_encode($object);

?>