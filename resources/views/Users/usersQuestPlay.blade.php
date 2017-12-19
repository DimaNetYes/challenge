@extends('layouts.dashboard')
@section('style')
    {!!HTML::style('css/User/userProfile.css')!!}
    {!!HTML::style('css/UserGeneral/headerNav.css')!!}
@stop
@section('content')

    <header>
        @include('Users.General.headerNav')
    </header>

    <main>
        <aside>
            <div class="avatar"></div>
            <p class="name">Имя: {{Auth::user()->name}}</p>
            <p class="name">Возраст: {{Auth::user()->age}}</p>
            <p class="name">Пол: {{Auth::user()->gender}}</p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <button class="btn btn-link link"><a href="" onclick="openbox('idTQ'); return false">Текущий
                    квест</a>
            </button>
            <button class="btn btn-link link"><a href="" onclick="openbox('idFQ'); return false">Грядущие квесты</a>
            </button>
            <button class="btn btn-link link"><a href="" onclick="openbox('idLQ'); return false">Архив</a>
            </button>
        </aside>

        <section class="section">

            <div id="section_inner">



            </div> <!-- div section inner-->
        </section>

    </main>

    <footer></footer>

    <script type="text/javascript">
        function openbox(id) {
            display = document.getElementById(id).style.display;
            if (display == 'none') {
                document.getElementById(id).style.display = 'block';
            } else {
                document.getElementById(id).style.display = 'none';
            }
        }
    </script>

@stop