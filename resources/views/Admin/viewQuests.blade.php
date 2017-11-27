@extends('header')
<link href={{ asset('css/stylesAVQ.css') }} rel="stylesheet">
</head>
<body>
<div class="container">

    <h1>Список квестов</h1>
    <?php

    echo Form::open(array('url' => route('admin_add_quest'), 'method' => 'get', 'role' => 'form', 'class' => 'form-vertical'));
    echo Form::submit('Добавить');
    echo Form::token() . Form::close();
       ?>

    <?php

    echo "<table>";
    echo "<tr><th>id</th><th>name</th><th>description</th><th>date</th><th>time</th></tr>";
    foreach ($quests as $key => $value) {
        echo "<tr>";
        echo "<td> " . $value->id . " </td>";
        echo "<td> " . $value->name . " </td>";
        echo "<td> " . $value->description . " </td>";
        echo "<td> " . $value->date . " </td>";
        echo "<td> " . $value->time . " </td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>


</div>
</body>
