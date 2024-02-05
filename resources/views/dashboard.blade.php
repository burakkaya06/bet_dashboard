<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Layout</title>
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
    @endforeach
</div>
</body>
</html>
