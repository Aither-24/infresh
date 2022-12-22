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
        <div class="grid grid-rows-3 grid-flow-col gap-4">
            <div class="row-span-3">
                <br>
                <img src="images/tomato-sm1.png" width = "600" height = "150">
                <br>
            </div>

            <div class="col-span-2">
                <br>
                <div class="text-4xl">Fresh Organic Tomato</div>
                <br>
                <div class="rating">
                    <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                    <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                    <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                    <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" checked />
                    <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                </div>
                <br>
                <br>
                <div class="text-2xl">Rp 6000,-</div>
                <br>
                <div class="text-2xl">Variant</div>
                <br>
                <div class="grid grid-cols-4 gap-4">
                    <button class="btn btn-outline btn-primary">500 gr</button>
                    <button class="btn btn-outline btn-primary">1 Kg</button>
                </div>
                <br>
                <div class="text-2xl">Description</div>
                <br>
                <p>No description now, you can only buy this product.</p>
            </div>
        </div>
        <div class="row-span-2 col-span-2">
                <div class="grid grid-cols-4 gap-2">
                    <button class="btn btn-outline btn-primary">Share</button>
                    <button class="btn btn-outline btn-primary">Chat</button>
                    <button class="btn btn-outline btn-primary">Add to Cart</button>
                    <button class="btn btn-outline btn-primary">Buy Now</button>
                    <br>
                </div>
            </div>
    </div>

    <!-- Copyright -->
    <footer class="footer footer-center p-4 bg-base-300 text-base-content">
        <div>
            <p>Copyright © 2022 - All right reserved by ADSI Kelompok 3</p>
        </div>
    </footer>
</body>
</html>