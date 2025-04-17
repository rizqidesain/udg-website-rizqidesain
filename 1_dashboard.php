<?php
$tamu = 12;
$rsvp = 90;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">


</head>
<style>
    body {
        background: #f6f6f6;
        font-family: 'Roboto', sans-serif;
        padding: 0;
        margin: 0;
    }


    .container-fluid {
        position: relative;
        width: 100%;
        min-height: 850px;
        padding: 0;
        margin: 0;
        align-items: center;
        justify-content: start;
    }

    .sticky {
        position: fixed;
        bottom: 3%;
        left: 5%;
        right: 5%;
        height: 8vh;
        background: #ffffff;
        border-radius: 20vw;
        display: flex;
        justify-content: space-around;
        align-items: center;
        z-index: 1000;
    }

    .sticky-item {
        color: #adacb4;
    }

    .sticky-item.activate {
        color: #698adb;
    }

    .header {
        width: 100%;
        height: 300px;
        background: linear-gradient(to bottom right, #396ece, rgb(149, 180, 237), #c9ebaf);
        padding: 0 3vh;
        position: relative;
    }

    .atas {
        background: transparent;
        height: 50px;
        display: flex;
        justify-content: start;
        align-items: center;
        gap: 1vh;
        position: relative;
        padding-top: 3vh;
    }

    .logout {
        color: #ffffff;
        background: rgba(255, 255, 255, 0.3);
        font-size: 0.7em;
        text-decoration: none;
        padding: 0.2vh 0.9vh;
        border-radius: 0.7vh;
    }

    .atas p {
        color: white;
        font-size: 0.8em;
        align-self: center;
        margin: 0;
    }

    .pemberitahuan {
        color: #ffffff;
        font-size: 1.2em;
        text-decoration: none;
        position: absolute;
        right: 1vh;
        top: 50%;
        transform: translateY(-50%);
        padding-top: 3vh;
    }

    .judul-wrapper {
        margin-top: 3vh;
    }

    .judul {
        font-size: 1.2em;
        color: #ffffff;
        font-weight: normal;
        margin: 0;
    }

    .sub-judul {
        font-size: 0.9em;
        color: #ffffff;
        font-weight: normal;
        margin: 0.3vh 0 0 0;
        display: block;
    }
</style>
<style>
    .tagihan {
        position: absolute;
        top: 18vh;
        left: 50%;
        transform: translateX(-50%);
        width: 80%;
        height: 60px;
        background: white;
        border-radius: 3vh;
    }
</style>
<style>
    .rsvp {
        position: absolute;
        top: 28vh;
        left: 50%;
        transform: translateX(-50%);
        width: 80%;
        height: auto;
        background: white;
        border-radius: 3vh;
        /*border: 1px solid #38b6ff;*/
    }

    .visitor {
        padding: 4%;
        display: flex;
        align-items: center;
        gap: 1vh;
        font-size: 0.6em;
    }

    .visitor a {
        color: rgb(40, 87, 153);
        padding: 0.1vh 2vw;
        text-decoration: none;
        border-radius: 10vh;
    }

    .circular-container {
        display: flex;
        justify-content: center;
        gap: 40px;
        margin: 20px 0;
    }

    .circular-progress {
        position: relative;
        width: 100px;
        height: 100px;
        --value: 0;
        --color: #38b6ff;
        /* default jika tidak ditentukan di style */
        background: conic-gradient(var(--color) var(--value, 0%), #eee 0%);
        border-radius: 50%;
    }

    .circular-progress::before {
        content: '';
        position: absolute;
        top: 15%;
        left: 15%;
        width: 70%;
        height: 70%;
        background: white;
        border-radius: 50%;
        z-index: 1;
    }

    .circular-progress::after {
        content: '';
        position: absolute;
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background: var(--color);
        top: 50%;
        left: 50%;
        transform: rotate(calc(var(--value, 0%) * 3.6deg)) translate(0, -50px);
        transform-origin: center;
        z-index: 2;
    }

    .circular-label {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-weight: bold;
        font-size: 14px;
        text-align: center;
        z-index: 3;
    }
</style>

<style>
    .pesanan {
        margin-top: 18vh;
        padding: 0 2vh;
    }

    .pesanan h1 {
        font-size: 1.5em;
        font-weight: bold;
        color: rgb(0, 13, 36);
    }

    .detail-row {
        display: flex;
        justify-content: flex-start;
        margin-bottom: 12px;
        font-size: 0.9em;
    }

    .detail-label {
        width: 130px;
    }

    .detail-value {
        flex: 1;
        color: rgb(139, 139, 139);
    }

    .bank-list {
        list-style: none;
        padding-left: 0;
    }

    .bank-list li::before {
        content: '💳 ';
        margin-right: 5px;
    }
</style>

<body>
    <div class="container-fluid">
        <div class="sticky">
            <a href="#" class="sticky-item activate">
                <i class="fas fa-home"></i>
            </a>
            <a href="#" class="sticky-item">
                <i class="fas fa-eye"></i>
            </a>
            <a href="#" class="sticky-item">
                <i class="fas fa-users"></i>
            </a>
            <a href="#" class="sticky-item">
                <i class="fas fa-comment"></i>
            </a>
            <a href="#" class="sticky-item">
                <i class="fas fa-cogs"></i>
            </a>
        </div>
        <div class="header">
            <div class="atas">
                <a href="#" class="logout"><i class="fas fa-sign-out-alt fa-flip-horizontal me-2"></i>Out</a>
                <p>INV202504001</p>
                <a href="#" class="pemberitahuan"><i class="fas fa-bell"></i></a>
            </div>
            <div class="judul-wrapper">
                <h1 class="judul">Hi <strong>Virda Tara & Fatikhul</strong></h1>
                <span class="sub-judul">make your special moment with us</span>
            </div>
            <div class="tagihan">
            </div>
        </div>
        <div class="rsvp">
            <div class="visitor">
                <a href="#" style="background: rgba(149, 237, 177, 0.63);">
                    <i class="fas fa-user-friends me-2"></i>Tamu
                </a>
                <a href="#" style="background: rgba(149, 212, 237, 0.63);">
                    <i class="fas fa-envelope-open-text me-2"></i>RSVP
                </a>
            </div>
            <div class="circular-container">
                <div class="circular-progress" style="--value: <?= $tamu ?>%; --color: #38b6ff;">
                    <div class="circular-label">Tamu<br><?= $tamu ?>%</div>
                </div>
                <div class="circular-progress" style="--value: <?= $rsvp ?>%; --color: #4ade80;">
                    <div class="circular-label">RSVP<br><?= $rsvp ?>%</div>
                </div>
            </div>
        </div>
        <div class="pesanan">
            <h1>Detail Pesanan</h1>
            <div class="detail-row">
                <div class="detail-label">Mempelai Pria</div>
                <div class="detail-pemisah me-1">:</div>
                <div class="detail-value">Fatikhul</div>
            </div>
            <div class="detail-row">
                <div class="detail-label">Ortu pria</div>
                <div class="detail-pemisah me-1">:</div>
                <div class="detail-value">Nama Ortu pria dan bapak ibunya</div>
            </div>
            <div class="detail-row">
                <div class="detail-label">Mempelai Wanita</div>
                <div class="detail-pemisah me-1">:</div>
                <div class="detail-value">Fatikhul</div>
            </div>
            <div class="detail-row">
                <div class="detail-label">Ortu Wanita</div>
                <div class="detail-pemisah me-1">:</div>
                <div class="detail-value">Nama Ortu pria dan bapak ibunya</div>
            </div>
            <div class="detail-row">
                <div class="detail-label">Tanggal</div>
                <div class="detail-pemisah me-1">:</div>
                <div class="detail-value">21 April 2025</div>
            </div>
            <div class="detail-row">
                <div class="detail-label">Cashless</div>
                <div class="detail-pemisah me-1">:</div>
                <div class="detail-value">
                    <ul class="bank-list">
                        <li>bri-12345</li>
                        <li>bca-12345</li>
                    </ul>
                </div>
            </div>
        </div>


    </div>
</body>

</html>