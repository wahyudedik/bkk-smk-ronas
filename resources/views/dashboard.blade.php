@extends('user.app')

@section('content')
    <div class="pagetitle">
        <h1>Dashboard</h1>
    </div><!-- End Page Title -->

    <div class="row">
            <div class="card col-lg-12 mb-4">
                <div class="card-body">
                    <h5 class="card-title">Jam Digital</h5>
                    <div id="clock" class="card-text"></div>
                    <script>
                        function updateClock() {
                            var now = new Date();
                            var hours = now.getHours();
                            var minutes = now.getMinutes();
                            var seconds = now.getSeconds();
                            var time = hours + ':' + minutes + ':' + seconds;
                            document.getElementById('clock').textContent = time;
                        }
                        setInterval(updateClock, 1000);
                    </script>
                </div>
            </div>
            <div class="card col-lg-12 mb-4">
                <div class="card-body">
                    <h5 class="card-title">Kalender</h5>
                    <div id="calendar" class="card-text"></div>
                    <script>
                        function updateCalendar() {
                            var now = new Date();
                            var day = now.getDate();
                            var month = now.getMonth() + 1;
                            var year = now.getFullYear();
                            var date = day + '/' + month + '/' + year;
                            document.getElementById('calendar').textContent = date;
                        }
                        setInterval(updateCalendar, 1000);
                    </script>
                </div>
            </div>
            <div class="card col-lg-12 mb-4">
                <div class="card-body">
                    <h5 class="card-title">Quote of the Day</h5>
                    <div id="quote" class="card-text"></div>
                    <script>
                        fetch('https://api.quotable.io/random')
                            .then(response => response.json())
                            .then(data => {
                                document.getElementById('quote').textContent = data.content + ' - ' + data.author;
                            });
                    </script>
                </div>
            </div>
        </div>
    </div>
@endsection
