<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>22/11/2021 00H00</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=VT323&display=swap');

        @keyframes glitch {
            0% {
                text-shadow:5px 2px 0px #f0f, -1px -2px 0 #0ff;
            }
            33% {
                text-shadow:2px 3px 0px #f0f, -7px -5px 0 #0ff;
            }
            66% {
                text-shadow:-5px -8px 0px #f0f, 3px 8px 0 #0ff;
            }
            to {
                text-shadow:-2px 2px 0px #f0f, -5px -3px 0 #0ff;
            }
        }

        body{
            margin: 0;
            background-color: #261838;
        }
        .container{
            width: 100vw;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .container h1{
            font-size: 5rem;
            font-family: 'VT323', sans-serif;
            text-shadow:1px 1px 0px #f0f, -1px -1px 0 #0ff;
            color: white;
            animation: glitch 1s cubic-bezier(0.25, 0.46, 0.45, 0.94) both infinite;
        }
        .container img{
            width: 250px;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="{{asset('img/Interlan_logo.svg')}}"/>
        <h1 id="countdown"></h1>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment-with-locales.min.js" integrity="sha512-LGXaggshOkD/at6PFNcp2V2unf9LzFq6LE+sChH7ceMTDP0g2kn6Vxwgg7wkPP7AAtX+lmPqPdxB47A0Nz0cMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        const countdown = document.getElementById('countdown');
        setInterval(() => {
            // Delta between server time and 22-11-2020 00:00:00(UTC+1)
            const delta = moment.utc('2020-11-22 00:00:00').diff(moment.utc(), 'seconds');
            countdown.innerHTML = moment.utc(delta * 1000).format('HH:mm:ss');
        }, 500);
    </script>
</body>
</html>