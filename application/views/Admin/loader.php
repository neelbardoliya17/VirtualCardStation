<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loader</title>
    <style>
        .loading {
            height: 0;
            width: 0;
            padding: 15px;
            border: 6px solid #ccc;
            border-right-color: #888;
            border-radius: 22px;
            -webkit-animation: rotate 1s infinite linear;
            /* left, top and position just for the demo! */
            position: absolute;
            left: 50%;
            top: 50%;
        }

        @-webkit-keyframes rotate {

            /* 100% keyframe for  clockwise. 
     use 0% instead for anticlockwise */
            100% {
                -webkit-transform: rotate(360deg);
            }
        }
    </style>
</head>

<body>
    <div class="loading"></div>
</body>

</html>