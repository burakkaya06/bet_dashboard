<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Dashboard</title>
   <style>
       body, html {
           height: 100%;
           margin: 0;
       }

       .dashboard {
           display: grid;
           grid-template-columns: repeat(12, 1fr);
           grid-template-rows: auto;
           gap: 10px;
           height: 100%;
           padding: 10px;
           box-sizing: border-box;
       }

       .box {
           background: red; /* Varsayılan arka plan */
           border-radius: 10px;
       }

       /* Renk sınıfları */
       .green {
           background: green;
       }

       .red {
           background: red;
       }

       /* Grid alanı */
       .box:nth-child(1) { grid-column: span 6; grid-row: span 2; } /* Büyük kutu */
       .box:nth-child(2) { grid-column: span 3; grid-row: span 1; }
       .box:nth-child(3) { grid-column: span 3; grid-row: span 1; }
       .box:nth-child(4) { grid-column: span 3; grid-row: span 1; }
       .box:nth-child(5) { grid-column: span 3; grid-row: span 1; }
       .box:nth-child(6) { grid-column: span 3; grid-row: span 1; }
       .box:nth-child(7) { grid-column: span 3; grid-row: span 2; } /* Diğer büyük kutu */

       /* Responsive */
       @media (max-width: 768px) {
           .dashboard {
               grid-template-columns: repeat(6, 1fr);
           }
           .box:nth-child(1) { grid-column: span 6; }
           .box:nth-child(7) { grid-column: span 6; }
       }

   </style>
</head>
<body>
<div class="dashboard">
    @for ($i = 0; $i < 7; $i++)
        <div class="box {{ $yourArray[$i] ? 'green' : 'red' }}">
            <!-- İçerik buraya gelecek -->
        </div>
    @endfor
</div>
</body>
</html>
