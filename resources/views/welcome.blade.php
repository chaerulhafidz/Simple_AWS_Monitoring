<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300i,400&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>
</head>

<body onload="startTime()">

<div class="container">
    <div class="topbar">
        <div class="left">
            <h1>Automatic Weather<br>Station Report</h1>
        </div>
        <div class="right">
            <h1 id="tggl" class="tggl">Kamis/20-10-2019</h1>
            <h1 id="times">15.20</h1>
        </div>
    </div>
    <div class="content">
        <div class="content-card">
          <!-- card -->
            <div class="card1" id="myBtn">
                <div class="containers">
                    <div class="icons">
                        <img src="{{ asset('img/wind.png') }}">
                    </div>
                    <div class="textnya">
                        <h4>Kecepatan Angin</h4>
                        <p><span class="uniq" id="uniq">{{ $arah_angin_latest->kecepatan }}</span>km/h</p>
                    </div>
                </div>

            </div>
            <div class="card2" id="myBtn1">
                <div class="containers">
                    <div class="icons">
                        <img src="{{ asset('img/map.png') }}">
                    </div>
                    <div class="textnya">
                        <h4>Arah Angin</h4>
                        <p><span class="uniq" id="uniq1">30</span>km/h</p>
                    </div>
                </div>
            </div>
            <div class="card3" id="myBtn2">
                <div class="containers">
                    <div class="icons">
                        <img src="{{ asset('img/thermometer.png') }}">
                    </div>
                    <div class="textnya">
                        <h4>Suhu</h4>
                        <p><span class="uniq" id="uniq2">30</span>km/h</p>
                    </div>
                </div>
            </div>
            <div class="card4" id="myBtn3">
                <div class="containers">
                    <div class="icons">
                        <img src="{{ asset('img/raindrop.png') }}">
                    </div>
                    <div class="textnya">
                        <h4>Kelembaban</h4>
                        <p><span class="uniq" id="uniq3">30</span>km/h</p>
                    </div>
                </div>
            </div>
            <div class="card5" id="myBtn4">
                <div class="containers">
                    <div class="icons">
                        <img src="{{ asset('img/pressure.png') }}">
                    </div>
                    <div class="textnya">
                        <h4>Tekanan Udara</h4>
                        <p><span class="uniq" id="uniq4">30</span>km/h</p>
                    </div>
                </div>
            </div>
            <div class="card6" id="myBtn5">
                <div class="containers">
                    <div class="icons">
                        <img src="{{ asset('img/sun.png') }}">
                    </div>
                    <div class="textnya">
                        <h4>Intensitas Cahaya</h4>
                        <p><span class="uniq" id="uniq5">30</span>km/h</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- The Modal -->
<div id="myModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <span class="close">&times;</span>
            <h2>Grafik Kecepatan Angin</h2>
        </div>
        <div class="modal-body">
            <canvas id="chart" height="80px"></canvas>
        </div>
    </div>
</div>
<div id="myModal1" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <span class="close1">&times;</span>
            <h2>Grafik Arah Angin</h2>
        </div>
        <div class="modal-body">
            <canvas id="chart1" height="80px"></canvas>
        </div>
    </div>
</div>
<div id="myModal2" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <span class="close2">&times;</span>
            <h2>Grafik Suhu</h2>
        </div>
        <div class="modal-body">
            <canvas id="chart2" height="80px"></canvas>
        </div>
    </div>
</div>
<div id="myModal3" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <span class="close3">&times;</span>
            <h2>Grafik Kelembaban</h2>
        </div>
        <div class="modal-body">
            <canvas id="chart3" height="80px"></canvas>
        </div>
    </div>
</div>
<div id="myModal4" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <span class="close4">&times;</span>
            <h2>Grafik Tekanan Udara</h2>
        </div>
        <div class="modal-body">
            <canvas id="chart4" height="80px"></canvas>
        </div>
    </div>
</div>
<div id="myModal5" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <span class="close5">&times;</span>
            <h2>Grafik Intensitas Cahaya</h2>
        </div>
        <div class="modal-body">
            <canvas id="chart5" height="80px"></canvas>
        </div>
    </div>
</div>
</body>

</html>

<!-- main function -->
<script>
    const xl = [];
    const yl = [];


    const ctx = document.getElementById('chart').getContext('2d');

    const myChart = new Chart(ctx, {
        type: 'line',
        data: {
            // BEFORE labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            labels: xl,
            datasets: [{
                label: 'Global Average Temprature in C°',
                data: yl,
                backgroundColor: '#06789e',
                borderColor: '#06789e',
                borderWidth: 1,
                fill: false,
                options: {
                    maintainAspectRatio: false,
                }
            }]
        }
    });

    // const url_iss = 'http://api.open-notify.org/iss-now.json';
    const url_aws = 'http://localhost:8000/api/arah_angin'

    async function getAWS() {
        const response = await fetch(url_aws);
        const data = await response.json();
        document.getElementById('uniq').textContent = data.arah_angin_latest;
    }

    async function getISS() {
        const response = await fetch(url_aws);
        const data = await response.json();

        for (var i = 0; i < 5; i++) {
            xl.push(data.arah_angin[i].tanggal);
            yl.push(data.arah_angin[i].kecepatan);
        }

        if (xl.length > 5) {
            for (var i = 0; i < 5; i++) {
                xl.shift();
                yl.shift();
            }
        }
        myChart.update();
    }


    getISS();
    getAWS();
    setInterval(getISS, 4000);
    setInterval(getAWS, 4000);
</script>

<!-- calendar and time -->
<script>
    function startTime() {
        var today = new Date();
        var h = today.getHours();
        var m = today.getMinutes();
        var s = today.getSeconds();

        if (h < 10) {
            h = "0" + h;
        }
        if (m < 10) {
            m = "0" + m;
        }
        if (s < 10) {
            s = "0" + s;
        }

        document.getElementById('times').textContent =
            h + ":" + m + ":" + s;

        var weekday = new Array(7);
        weekday[0] = "Minggu";
        weekday[1] = "Senin";
        weekday[2] = "Selasa";
        weekday[3] = "Rabu";
        weekday[4] = "Kamis";
        weekday[5] = "Jum'at";
        weekday[6] = "Sabtu";

        var date = weekday[today.getDay()] + '/' + today.getDate() + '-' + (today.getMonth() + 1) + '-' + today.getFullYear();
        document.getElementById('tggl').textContent = date;
        var t = setTimeout(startTime, 500);
    }

</script>

<!-- modals -->
<script>
    // Get the modal
    var modal = document.getElementById("myModal");
    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];
    // When the user clicks the button, open the modal
    btn.onclick = function () {
        modal.style.display = "block";
    }
    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
    }
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
<!-- modal2 -->
<script>
    // Get the modal
    var modal1 = document.getElementById("myModal1");
    // Get the button that opens the modal
    var btn1 = document.getElementById("myBtn1");
    // Get the <span> element that closes the modal
    var span1 = document.getElementsByClassName("close1")[0];
    // When the user clicks the button, open the modal
    btn1.onclick = function () {
        modal1.style.display = "block";
    }
    // When the user clicks on <span> (x), close the modal
    span1.onclick = function () {
        modal1.style.display = "none";
    }
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal1) {
            modal1.style.display = "none";
        }
    }
</script>
<!-- modal3 -->
<script>
    // Get the modal
    var modal2 = document.getElementById("myModal2");
    // Get the button that opens the modal
    var btn2 = document.getElementById("myBtn2");
    // Get the <span> element that closes the modal
    var span2 = document.getElementsByClassName("close2")[0];
    // When the user clicks the button, open the modal
    btn2.onclick = function () {
        modal2.style.display = "block";
    }
    // When the user clicks on <span> (x), close the modal
    span2.onclick = function () {
        modal2.style.display = "none";
    }
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal1) {
            modal2.style.display = "none";
        }
    }
</script>
<!-- modal4 -->
<script>
    // Get the modal
    var modal3 = document.getElementById("myModal3");
    var btn3 = document.getElementById("myBtn3");
    var span3 = document.getElementsByClassName("close3")[0];

    btn3.onclick = function () {
        modal3.style.display = "block";
    }
    span3.onclick = function () {
        modal3.style.display = "none";
    }
    window.onclick = function (event) {
        if (event.target == modal1) {
            modal3.style.display = "none";
        }
    }
</script>
<!-- modal5 -->
<script>
    // Get the modal
    var modal4 = document.getElementById("myModal4");
    var btn4 = document.getElementById("myBtn4");
    var span4 = document.getElementsByClassName("close4")[0];

    btn4.onclick = function () {
        modal4.style.display = "block";
    }
    span4.onclick = function () {
        modal4.style.display = "none";
    }
    window.onclick = function (event) {
        if (event.target == modal1) {
            modal4.style.display = "none";
        }
    }
</script>
<!-- modal6 -->
<script>
    // Get the modal
    var modal5 = document.getElementById("myModal5");
    var btn5 = document.getElementById("myBtn5");
    var span5 = document.getElementsByClassName("close5")[0];

    btn5.onclick = function () {
        modal5.style.display = "block";
    }
    span5.onclick = function () {
        modal5.style.display = "none";
    }
    window.onclick = function (event) {
        if (event.target == modal1) {
            modal5.style.display = "none";
        }
    }
</script>
