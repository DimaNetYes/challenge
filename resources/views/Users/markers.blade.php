@extends('layouts.dashboard')
@section('style')
    {{HTML::style('css/User/userProfile.css')}}
    {{HTML::style('css/UserGeneral/headerNav.css')}}
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

                {{--<p onclick="initMap($coord)">xxx</p>--}}
                <div id="floating-panel">
                    <button id="drop" onclick="drop()">Drop Markers</button>
                </div>
                <div id="map"></div>


            </div> <!-- div section inner-->
        </section>

    </main>


    <footer></footer>

    <script type="text/javascript">


        window.onload = function () {
            initMap();
        };

        var markers = [];
        var flightPath;
        var map;
        var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        var labelIndex = 0;
        var arr;
        var infowindow;

        function initMap() {
            var myLatLng = {lat: 49.987670699999995, lng: 36.2330605};

            map = new google.maps.Map(document.getElementById('map'), {
                zoom: 5,
                center: myLatLng
            });
        }


        function drop($coord, $dateTime) {
            var a = "<? echo $coord ?>";
            var dt = "<? echo $dateTime ?>";
            arr = dt.split(',');

            var b = JSON.parse(a);
            var pos = [];
            for (var j = 0; j < b.length; j++) {
                pos.push({lat: b[j][0], lng: b[j][1]});
            }
            clearMarkers();
            for (var i = 0; i < b.length; i++) {
                addMarkerWithTimeout(b[i], i * 300);
            }
            line(pos);
        }


        function addMarkerWithTimeout(position, timeout) {
            window.setTimeout(function () {
                markers.push(new google.maps.Marker({
                    position: {lat: position[0], lng: position[1]},
                    label: labels[labelIndex++ % labels.length],
                    map: map,
                    animation: google.maps.Animation.DROP
                }));
            }, timeout);
        }
        


        function line(position) {
            window.setTimeout(function () {
                flightPath = new google.maps.Polyline({
                    path: position,
                    geodesic: true,
                    strokeColor: '#FF0000',
                    strokeOpacity: 1.0,
                    strokeWeight: 2
                });
                flightPath.setMap(map);
            }, 400);
        }

        function clearMarkers() {
            for (var i = 0; i < markers.length; i++) {
                markers[i].setMap(null);
                flightPath.setMap(null);
            }
            markers = [];
            flightPath = [];
            labelIndex = 0;
        }


        function openbox(id) {
            if (id == 'idTQ') {
                document.getElementById('idTQ').style.display = 'block';
                document.getElementById('idLQ').style.display = 'none';
                document.getElementById('idFQ').style.display = 'none';
            } else if (id == 'idLQ') {
                document.getElementById('idLQ').style.display = 'block';
                document.getElementById('idTQ').style.display = 'none';
                document.getElementById('idFQ').style.display = 'none';
            } else if (id == 'idFQ') {
                document.getElementById('idFQ').style.display = 'block';
                document.getElementById('idTQ').style.display = 'none';
                document.getElementById('idLQ').style.display = 'none';
            }
        }

        function openboxt(id) {
            display = document.getElementById(id).style.display;
            if (display == 'none') {
                document.getElementById(id).style.display = 'block';
            } else {
                document.getElementById(id).style.display = 'none';
            }
        }


    </script>
    {{--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDL1sGQvZosVlgfL5TqdXvMqpeXa_YBgxg&callback=initMap"--}}
    {{--async defer>--}}

    {{--<script> --}}
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDL1sGQvZosVlgfL5TqdXvMqpeXa_YBgxg&callback=initMap"
            async defer></script>


@stop