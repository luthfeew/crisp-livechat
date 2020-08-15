<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crisp</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <style>
        html,
        body {
            background-color: #fff;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .crisp {
            background-image: url(data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjI0IiB2aWV3Qm94PSIwIDAgODYgMjQiIHdpZHRoPSI4NiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSIjMTk3MmY1IiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxwYXRoIGQ9Im00NC43MjcxNTQ1IDE3LjcxMTg2OTljMi4yMjQzOTAyIDAgMy41MzU2MDk3LS45NiA0LjMzMTcwNzMtMi4wMTM2NTg1bC0xLjYxNTYwOTgtMS41MjE5NTEyYy0uNjMyMTk1MS44ODk3NTYxLTEuNDk4NTM2NiAxLjM1ODA0ODctMi41OTkwMjQ0IDEuMzU4MDQ4Ny0yLjAzNzA3MzEgMC0zLjQxODUzNjUtMS41Njg3ODA0LTMuNDE4NTM2NS0zLjc2OTc1NjEgMC0yLjIwMDk3NTU2IDEuMzgxNDYzNC0zLjc0NjM0MTQyIDMuNDE4NTM2NS0zLjc0NjM0MTQyIDEuMTAwNDg3OCAwIDEuOTY2ODI5My40MjE0NjM0MiAyLjU5OTAyNDQgMS4zMTEyMTk1MWwxLjYxNTYwOTgtMS40NzUxMjE5NWMtLjc5NjA5NzYtMS4wNzcwNzMxNy0yLjEwNzMxNzEtMi4wMTM2NTg1My00LjMzMTcwNzMtMi4wMTM2NTg1My0zLjQxODUzNjYgMC01LjgzMDI0MzkgMi41MDUzNjU4NS01LjgzMDI0MzkgNS45MjM5MDIzOSAwIDMuNDE4NTM2NiAyLjQxMTcwNzMgNS45NDczMTcxIDUuODMwMjQzOSA1Ljk0NzMxNzF6bTguNjQyNjAxNi0uMjgwOTc1NnYtNy43MDM0MTQ2M2MuNDkxNzA3My0uODE5NTEyMTkgMS44NzMxNzA3LTEuNTIxOTUxMjEgMi45MjY4MjkzLTEuNTIxOTUxMjEuMzA0MzkwMiAwIC41Mzg1MzY2LjAyMzQxNDYzLjc0OTI2ODMuMDcwMjQzOXYtMi40MzUxMjE5NWMtMS40NTE3MDc0IDAtMi44MDk3NTYxLjg0MjkyNjgzLTMuNjc2MDk3NiAxLjkydi0xLjYzOTAyNDM5aC0yLjQ1ODUzNjZ2MTEuMzA5MjY4Mjh6bTYuNTgyMTEzOC0xMi42OTA3MzE3Yy44NDI5MjY4IDAgMS41MjE5NTEyLS42NzkwMjQzOSAxLjUyMTk1MTItMS41MjE5NTEyMnMtLjY3OTAyNDQtMS41MjE5NTEyMi0xLjUyMTk1MTItMS41MjE5NTEyMi0xLjUyMTk1MTIuNjc5MDI0MzktMS41MjE5NTEyIDEuNTIxOTUxMjIuNjc5MDI0NCAxLjUyMTk1MTIyIDEuNTIxOTUxMiAxLjUyMTk1MTIyem0xLjIxNzU2MSAxMi42OTA3MzE3di0xMS4zMDkyNjgyOGgtMi40NTg1MzY2djExLjMwOTI2ODI4em02Ljc0NjAxNjMuMjgwOTc1NmMzLjA0MzkwMjQgMCA0LjcwNjM0MTQtMS41MjE5NTEyIDQuNzA2MzQxNC0zLjUzNTYwOTcgMC00LjQ5NTYwOTc5LTYuODM3MDczMi0yLjk5NzA3MzItNi44MzcwNzMyLTQuOTg3MzE3MTEgMC0uNzk2MDk3NTYuNzk2MDk3Ni0xLjQwNDg3ODA1IDIuMDgzOTAyNS0xLjQwNDg3ODA1IDEuNDI4MjkyNyAwIDIuNjY5MjY4My42MDg3ODA0OSAzLjM0ODI5MjcgMS4zNTgwNDg3OGwxLjAzMDI0MzktMS43MzI2ODI5M2MtMS4wMDY4MjkzLS44ODk3NTYwOS0yLjQ1ODUzNjYtMS41Njg3ODA0OC00LjM3ODUzNjYtMS41Njg3ODA0OC0yLjg1NjU4NTQgMC00LjQ0ODc4MDUgMS41Njg3ODA0OC00LjQ0ODc4MDUgMy40MTg1MzY1OCAwIDQuMzU1MTIxOTEgNi44MzcwNzMyIDIuNzYyOTI2ODEgNi44MzcwNzMyIDQuOTg3MzE3MTEgMCAuODg5NzU2MS0uNzcyNjgzIDEuNDk4NTM2Ni0yLjI0NzgwNDkgMS40OTg1MzY2LTEuNDUxNzA3MyAwLTMuMDIwNDg3OC0uNzQ5MjY4My0zLjgxNjU4NTQtMS41Njg3ODA1bC0xLjEyMzkwMjQgMS43NTYwOTc1YzEuMTcwNzMxNyAxLjE0NzMxNzEgMi45MDM0MTQ2IDEuNzc5NTEyMiA0Ljg0NjgyOTMgMS43Nzk1MTIyem0xMi45Mjc0Nzk2IDBjLTEuNDI4MjkyNyAwLTIuNjkyNjgyOS0uNjU1NjA5Ny0zLjYyOTI2ODMtMS44NDk3NTYxdjUuODc3MDczMmgtMi40NTg1MzY1di0xNS42MTc1NjA5OGgyLjQ1ODUzNjV2MS41NDUzNjU4NWMuODQyOTI2OS0xLjEyMzkwMjQ0IDIuMTU0MTQ2NC0xLjgyNjM0MTQ2IDMuNjI5MjY4My0xLjgyNjM0MTQ2IDIuOTI2ODI5MyAwIDUuMDEwNzMxNyAyLjIwMDk3NTYxIDUuMDEwNzMxNyA1LjkyMzkwMjM5IDAgMy43MjI5MjY5LTIuMDgzOTAyNCA1Ljk0NzMxNzEtNS4wMTA3MzE3IDUuOTQ3MzE3MXptLS43MjU4NTM2LTIuMTc3NTYxYzEuOTQzNDE0NiAwIDMuMjA3ODA0OC0xLjU2ODc4MDQgMy4yMDc4MDQ4LTMuNzY5NzU2MSAwLTIuMjAwOTc1NTYtMS4yNjQzOTAyLTMuNzQ2MzQxNDItMy4yMDc4MDQ4LTMuNzQ2MzQxNDItMS4xNDczMTcxIDAtMi4zNDE0NjM0LjY1NTYwOTc2LTIuOTAzNDE0NyAxLjQ5ODUzNjU5djQuNDcyMTk1MTNjLjUzODUzNjYuODQyOTI2OCAxLjc1NjA5NzYgMS41NDUzNjU4IDIuOTAzNDE0NyAxLjU0NTM2NTh6Ii8+PHBhdGggZD0ibTExLjU5NzEyNiAxOC45OTk3MzMyIDQuNjU5NDA3OSA0LjkwNDIwODMgMy41OTA0MzkxLTUuODUxMDc4NyA5LjU5MDA4NDgtMS4xMDA2OTUzLTEuNjIxOTgzNi0xNi44NTE5Njk0OC0yNy43MTEzNDk3NyAzLjE4MDU1MDgxIDEuNjIxOTgzNTQgMTYuODUxOTY5NDd6IiB0cmFuc2Zvcm09Im1hdHJpeCguOTk5OTkwNDggLjAwNDM2MzMxIC0uMDA0MzYzMzEgLjk5OTk5MDQ4IC4wNTI1MDkgLS4wNjQzMzQpIi8+PC9nPjwvc3ZnPg==);
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            height: 24px;
            width: 86px;
        }
    </style>
    <script type="text/javascript">
        window.$crisp = [];
        window.CRISP_WEBSITE_ID = "5d959ff8-04a3-41cb-8f93-69e7b8612a31";
        (function() {
            d = document;
            s = d.createElement("script");
            s.src = "https://client.crisp.chat/l.js";
            s.async = 1;
            d.getElementsByTagName("head")[0].appendChild(s);
        })();
        $crisp.push(["safe", true]);
        $crisp.push(["do", "chat:open"]);
    </script>
</head>

<body>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                Powered by
                <div class="crisp"></div>
                <?php
                function getUserIP()
                {
                    // Get real visitor IP behind CloudFlare network
                    if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
                        $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
                        $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
                    }
                    $client  = @$_SERVER['HTTP_CLIENT_IP'];
                    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
                    $remote  = $_SERVER['REMOTE_ADDR'];

                    if (filter_var($client, FILTER_VALIDATE_IP)) {
                        $ip = $client;
                    } elseif (filter_var($forward, FILTER_VALIDATE_IP)) {
                        $ip = $forward;
                    } else {
                        $ip = $remote;
                    }

                    return $ip;
                }
                $user_ip = getUserIP();
                echo $user_ip;
                ?>
            </div>
        </div>
    </div>
</body>

</html>