<html data-theme="lemonade">

<head>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.45.0/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-primary-content">
    <!-- Navbar -->
    <div class="sticky top-0 z-30">
        <?php include_once("navbar.html"); ?>
    </div>

    <!-- content -->
    <div class="bg-white mx-32 px-8 divide-y divide-solid divide-slate-200">
    <br><p class="text-4xl">Payment Method</p><br>
        <div class="grid grid-cols-2 gap-4">

            <!-- Container Kiri -->
            <div class="grid grid-rows-5 grid-flow-col gap-4">
                    <button class="btn btn-active btn-primary">COD</button>
                    <button class="btn btn-outline btn-primary">E-WALLET</button>
                    <button class="btn btn-outline btn-primary">DEBIT</button>
                    <button class="btn btn-outline btn-primary">KREDIT</button>
                    <button class="btn btn-outline btn-primary">MERCHANT</button>
            </div>

            <!-- Container Kanan -->
            <div class="grid grid-rows-5 grid-flow-col gap-4">
                <p class="text-4xl">Payment : </p>
                <p class="font-bold">Cash On Delivery (Pay after the order is received)</p>
                
                <div class="grid grid-cols-2 text-2xl p-2">
                    <div>Subtotal Product</div>
                    <div class="grid justify-items-end text-orange-500">Rp32.000,-</div>
                </div>
                <br>
                <button class="btn btn-active btn-primary">Confirmation Payment</button>
            </div>
        </div>
        <br>
    </div>

    <!-- Copyright -->
    <footer class="footer footer-center p-4 bg-base-300 text-base-content">
        <div>
            <p>Copyright © 2022 - All right reserved by ADSI Kelompok 3</p>
        </div>
    </footer>
</body>
</html>