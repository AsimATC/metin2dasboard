<!DOCTYPE html>
<html>
<style>
    body,
    html {
        height: 100%;
        margin: 0;
    }

    .logo {
        max-width: 248px;
    }

    .bgimg {
        background-image: url('back.jpg');
        height: 100%;
        background-position: center;
        background-size: cover;
        position: relative;
        color: white;
        font-family: "Courier New", Courier, monospace;
        font-size: 25px;
    }

    .topleft {
        position: absolute;
        top: 0;
        left: 16px;
    }

    .bottomleft {
        position: absolute;
        bottom: 0;
        left: 16px;
    }

    .middle {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
    }

    hr {
        margin: auto;
        width: 40%;
    }
</style>

<body>

    <div class="bgimg">
        <div class="topleft">
            <img src="https://reloadedsky2.com/data/upload/5f84556cc96374.71381751_epqmjflikognh.png" alt="" class="logo">
        </div>
        <div class="middle">
            <h1>COMING SOON</h1>
            <hr>
            <!--
                <p id="demo" style="font-size:30px;font-weight:bold;"></p>
-->
        </div>
        <div class="bottomleft">
            <p></p>
        </div>
    </div>

    <script>
        // Set the date we're counting down to
        var countDownDate = new Date("Dec 30, 2022 19:00:00").getTime();

        // Update the count down every 1 second
        var countdownfunction = setInterval(function() {

            // Get todays date and time
            var now = new Date().getTime();

            // Find the distance between now an the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Output the result in an element with id="demo"
            document.getElementById("demo").innerHTML = hours + "h " + minutes + "m " + seconds + "s ";

            // If the count down is over, write some text 
            if (distance < 0) {
                clearInterval(countdownfunction);
                document.getElementById("demo").innerHTML = "EXPIRED";
            }
        }, 1000);
    </script>

</body>

</html>