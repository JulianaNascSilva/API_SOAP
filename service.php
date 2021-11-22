<?php

include './client.php';

$client = new client();

parse_str($_SERVER['QUERY_STRING'], $query);

if ($query['f'] == 'list')
    echo $client->listStudents();
else if ($query['f'] == 'get')
    echo $client->getStudent($query);
else if ($query['f'] == 'create')
    echo $client->createStudent($query);
else if ($query['f'] == 'update')
    echo $client->updateStudent($query);
else if ($query['f'] == 'delete')
    echo $client->deleteStudent($query);
