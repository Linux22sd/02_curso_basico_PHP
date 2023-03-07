<?php
$array_anidados = [
    'user' => [
        'name' => 'Luis',
        'apellido' => 'Padilla'
    ],
    'cursos' => [
        'php' => [
            'basico' => 'terminado',
            'intermedio' => 'no iniciado',
            'experto' => 'no iniciado'
        ],
        'javascript' => [
            'basico' => 'terminado',
            'intermedio' => 'terminado',
            'experto' => 'no iniciado'
        ]
    ]
];

echo '<pre>';
print_r($array_anidados);
echo '</pre>';

// Creando algunas variables para hacer mas sencilla la impresion en pantalla

$full_name = $array_anidados['user']['name'].' '.$array_anidados['user']['apellido'];
$php = $array_anidados['cursos']['php'];
$js = $array_anidados['cursos']['javascript'];

echo "El alumno $full_name <br>";
echo "Tiene los cursos de: <br><br>";
echo "PHP basico: {$php['basico']} <br>";
echo "JS basico {$js['basico']} <br>";
echo "JS intermedio {$js['intermedio']} <br>";
?>