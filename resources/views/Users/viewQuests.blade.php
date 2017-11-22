@extends('header')
<link href="http://quest/resources/views/Users/css/styles.css" rel="stylesheet">
</head>
<body>
    <div class="container">
    <div class="row ">
    @foreach($quests as $q)
        <div class="quest">
            <h3 class="text-center">{!! $q->name !!}</h3>
            <h3 class="text-center">{!! $q->date !!}</h3>
            <button class="btn btn-default btn-lg active"><a href="{{route('more')}}">Подробней...</a></button>
        </div>
       @endforeach
    </div>
    </div>
</body>
</html>