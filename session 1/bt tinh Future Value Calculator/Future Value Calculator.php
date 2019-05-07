<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="css/style.css" />

<head>
    <title>Future Value Calculator</title>
</head>

<body>
    <style>
        #content {
            width: 450px;
            margin: 0 auto;
            padding: 0px 20px 20px;
            background: white;
            border: 2px solid navy;
        }

        h1 {
            color: navy;
        }

        label {
            width: 10em;
            padding-right: 1em;
            float: left;
        }

        #data input {
            float: left;
            width: 15em;
            margin-bottom: .5em;
        }

        #buttons input {
            float: left;
            margin-bottom: .5em;
        }

        br {
            clear: left;
        }

        .error {
            color: red;
        }
    </style>
    <div id="content">
        <h1>Future Value Calculator</h1>

        <form method="POST">
            <div id="data">
                <?php
                $investment = $_POST['investment'];
                $rate = $_POST['rate'] / 100;
                $year = $_POST['years'];
                $future = $investment + ($investment * $rate);
                for ($i = 2; $i <= $year; $i++) {
                    $future += $future * $rate;
                }
                ?>
                <label>Investment Amount:</label>
                <?php
                echo '$' . $_POST['investment']
                ?>
                <br />

                <label>Yearly Interest Rate:</label>
                <?php
                echo '$' . $_POST['rate']
                ?>
                <br />

                <label>Number of Years:</label>
                <?php
                echo '$' . $_POST['years']
                ?>
                <br>
                <label>Future Value</label>
                <?php
                echo '$' .  $future
                ?>
            </div>

        </form>
    </div>
    <?php

    ?>
</body>

</html>