<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Layout</title>

    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            var numbersString = @json($numbersFromBackend); // Backend'den gelen string
            var numbersArray = numbersString.split(',').map(function(item) {
                return parseInt(item, 10); // String'leri sayıya çevir
            });
            const kirmiziSayilar = [1, 3, 5, 7, 9, 12, 14, 16, 18, 21, 19, 23, 25, 27, 30, 32, 34, 36];
            const siyahSayilar = [2, 4, 6, 8, 11, 10, 13, 15, 17, 20, 22, 24, 26, 29, 28, 33, 31, 35];
            const container = document.getElementById('rouletteNumbers');
            debugger

            numbersArray.forEach(number => {
                const colorClass = kirmiziSayilar.includes(number) ? 'red' : siyahSayilar.includes(number) ? 'black' : (number === 0 ? 'green' : '');
                const numberElement = document.createElement('div');
                numberElement.className = `number ${colorClass}`;
                numberElement.textContent = number;
                container.appendChild(numberElement);
            });
        });
    </script>
    <style>
        .data-item {
            border: 1px solid #ddd;
            margin-bottom: 10px;
            padding: 8px;
            background-color: #f7f7f7;
        }

        .data-label {
            font-weight: bold;
        }

        .data-value {
            display: inline-block;
            margin-left: 10px;
        }
        .roulette-numbers {
            display: flex;
        }

        .number {
            width: 30px;
            height: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-right: 5px;
            color: white;
            font-weight: bold;
        }

        .red {
            background-color: red;
        }

        .black {
            background-color: black;
        }

        .green {
            background-color: green;
        }


        @media screen and (max-width: 600px) {
            .data-label, .data-value {
                display: block;
                margin-left: 0;
            }
        }
    </style>
</head>
<body>
<div class="responsive-container">
    @foreach ($data as $item)
        <div class="data-item">
            <span class="data-label">Başlangıç </span>
            <span class="data-value">{{ $item['start_date'] }}</span>
        </div>
        <div class="data-item">
            <span class="data-label">Tarih </span>
            <span class="data-value">{{ $item['tarih'] }}</span>
        </div>
        <div class="data-item">
            <span class="data-label">Tarih </span>
            <span class="data-value">{{ $item['baslangıc'] }}</span>
        </div>
        <div class="data-item">
            <span class="data-label">Kar:</span>
            <span class="data-value">{{ $item['kar'] }}</span>
        </div>
        <div class="data-item">
            <span class="data-label">Yatırılan Para:</span>
            <span class="data-value">{{ $item['yatirilan_para'] }}</span>
        </div>
        <div class="data-item">
            <span class="data-label">Last N:</span>
            <span class="data-value">{{ $item['last_n'] }}</span>
        </div>
        <div class="data-item">
            <span class="data-label">Max N:</span>
            <span class="data-value">{{ $item['max_n'] }}</span>
        </div>
        <div class="data-item">
            <span class="data-label">Max N Tarih:</span>
            <span class="data-value">{{ $item['max_n_tarih'] }}</span>
        </div>

        <div class="data-item">
            <span class="data-label">Son Gelen Renk:</span>
            <span class="data-value">{{ $item['son_gelen_renk'] }}</span>
        </div>
        <div class="data-item">
            <span class="data-label">Son Gelen Sayı:</span>
            <span class="data-value">{{ $item['son_gelen_sayi'] }}</span>
        </div>
        <div class="data-item">
            <span class="data-label">Oynanılan Renk:</span>
            <span class="data-value">{{ $item['oynanilan_renk'] }}</span>
        </div>
        <div class="data-item">
            <span class="data-label">Durum:</span>
            <span class="data-value">{{ $item['durum'] }}</span>
        </div>
        <div class="data-item">
            <span class="data-label">Son Log:</span>
            <span class="data-value">{{ $item['son_log'] }}</span>
        </div>
        <div class="data-item">
            <span class="data-label">Roulette Numbers:</span>
            <div id="rouletteNumbers" class="roulette-numbers">
                <!-- Sayılar JavaScript ile buraya eklenecek -->
            </div>
        </div>

    @endforeach
</div>
</body>
</html>
