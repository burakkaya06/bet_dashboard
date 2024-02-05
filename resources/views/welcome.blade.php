<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parametric Color Grid Layout</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            box-sizing: border-box;
        }
        .grid-container {
            display: grid;
            grid-template-columns: 3fr 1fr;
            grid-template-rows: repeat(3, 33.33%);
            height: 100vh;
            gap: 10px;
            padding: 10px;
        }
        .grid-item {
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-size: 30px;
        }
        .red {
            background-color: red;
        }
        .green {
            background-color: green;
        }
        .grid-item.large {
            grid-row: span 3;
        }
        .grid-item.medium {
            grid-row: span 2;
        }
        /* Responsive */
        @media (max-width: 768px) {
            .grid-container {
                grid-template-columns: 1fr;
                grid-template-rows: repeat(6, auto);
                gap: 10px;
            }
            .grid-item.large, .grid-item.medium {
                grid-row: span 1;
            }
        }
    </style>
</head>
<body>

<div class="grid-container">

</div>

</body>
</html>
