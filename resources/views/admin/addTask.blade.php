@extends('header')
<link href={{ asset('css/stylesAT.css') }} rel="stylesheet">
</head>
<body>
<div class="container">
    <h2>Новaя Задача!</h2>

    <?php
    echo "<br>";
    echo Form::open(array('url' => route('postTask'), 'method' => 'post', 'role' => 'form', 'class' => 'form-vertical'));

    echo Form::label('name', 'Название') . Form::text('name');
    echo "<br>";
    echo Form::label('description', 'Описание') . Form::text('description');
    echo "<br>";
    echo Form::label('duration', 'Длительность:') . Form::time('duration');
    echo "<br>";
    echo Form::label('weight', 'Вес задачи:') . Form::number('weight');
    echo "<br>";
    echo Form::label('QR', 'Текст для QR-кода:') . Form::text('QR');
    echo "<br>";
    echo Form::submit('Добавить');

    echo Form::token() . Form::close();

    ?>

    <div>
        <?php

        echo "<table>";
        echo "<tr><th>id</th><th>name</th><th>description</th><th>duration</th><th>weight</th><th>QR</th></tr>";
        foreach ($tasks as $key => $value) {
            echo "<tr>";
            echo "<td> " . $value->id . " </td>";
            echo "<td> " . $value->name . " </td>";
            echo "<td> " . $value->description . " </td>";
            echo "<td> " . $value->duration . " </td>";
            echo "<td> " . $value->weight . " </td>";
            echo "<td> " . $value->QR . " </td>";
            echo "</tr>";
        }
        echo "</table>";
        ?>

    </div>

</div>
</body>
</html>