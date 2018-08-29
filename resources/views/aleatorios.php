<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <script>
            function notifyMe() {
                if (!("Notification" in window)) {
                    alert("Este browser não suporta notificações de Desktop");
                } else if (Notification.permission === "granted") {
                    new Notification("RAIN!");
                } else if (Notification.permission !== 'denied') {
                    Notification.requestPermission(function (permission) {
                        if (permission === "granted") {
                            new Notification("Hi there!");
                        }
                    });
                }
            }
            var context = new (window.AudioContext || window.webkitAudioContext)();
            var osc = context.createOscillator();
            setInterval(function () {
                if (document.getElementsByClassName('claimRain').) {
                    notifyMe();
                    osc.type = 'sine';
                    osc.frequency.value = 440;
                    osc.connect(context.destination);
                    osc.start();
                    osc.stop(context.currentTime + 0.5);
                }
            }, 1000);
            var list = [];
            var games;
            setInterval(function () {
                list = [];
                games = {};
                games = document.querySelectorAll('a.recentBust');
                for (let i = 0; i < games.length; i++) {
                    list.push({id: games[i].href.substring(30), numero: games[i].innerHTML.slice(0, -1)});
                }
                $.ajax({
                    type: 'GET',
                    url: 'http://localhost/gamdom',
                    data: {dados: JSON.stringify(list.reverse())},
                    error: function (req, err) {
                        console.log('EROOO - ' + err);
                    },
                    success: function (req, result) {
                        console.log('DEU - ' + req);
                    }
                });
            }, 20000);

            document.querySelectorAll('a.recentBust')
        </script>
    </body>
</html>
