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
    <br><p class="text-4xl">Ordered Product</p><br>
        <div class="grid grid-cols-2 gap-4">

            <!-- Container Kiri -->
            <div class="grid grid-rows-5 grid-flow-col gap-4">
                
                <div class="grid text-2xl">
                    <div>Green Store (2 KM)</div>
                    <div><button class="btn btn-active btn-primary">Chat Seller</button></div>
                </div>

                <div class="grid grid-cols-2">
                    <div><img src="images/tomato-sm.png"></div>
                    <div>
                        <div class="grid grid-rows-3 grid-flow-col gap-2">
                            <div><p class="font-bold">Fresh Organic Tomato 1 Kg</p></div>
                            <div class="grid grid-cols-2">
                                <div>Quantity </div>
                                <div>
                                <select class="select-xs">
                                <option disabled selected>1</option>
                                <option>2</option>
                                <option>0</option>
                                </select>
                                </div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div>Price</div>
                                <div><p class="font-bold">Rp 6000,-</p></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-2">
                    <div><img src="images/tomato-sm.png"></div>
                    <div>
                        <div class="grid grid-rows-3 grid-flow-col gap-2">
                            <div><p class="font-bold">Fresh Organic Tomato 500 gr</p></div>
                            <div class="grid grid-cols-2">
                                <div>Quantity </div>
                                <div>
                                <select class="select-xs">
                                <option disabled selected>2</option>
                                <option>0</option>
                                <option>1</option>
                                </select>
                                </div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div>Price</div>
                                <div><p class="font-bold">Rp 10.000,-</p></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-2xl">Notes : <br>
                <input type="text" placeholder="Type here" class="input input-bordered input-primary w-full max-w-xs" />
                </div>

                <div class="text-2xl">Voucher : <br>
                        <select class="select select-primary w-full max-w-xs">
                        <option disabled selected>Select Voucher</option>
                        <option>IFVOUCHER1</option>
                        <option>IFVOUCHER2</option>
                        </select>
                </div>
            </div>

            <!-- Container Kanan -->
            <div class="grid grid-rows-5 grid-flow-col gap-4">
                
                <div class="text-4xl">Shipping Address</div>

                <div>
                <p class="font-bold text-xl">Buyer's Name</p>
                <p class="font-bold text-xl">(+62)821XXXXXXXX</p>
                <p class="font-bold text-xl">Lowokwaru, Malang (65112)</p>
                </div>

                <div class="text-4xl">Shipping Options</div>

                <div class="grid grid-cols-2">
                    <div>
                        <p class="font-bold text-xl">Product</p>
                        <p class="font-bold text-xl">Discount</p>
                        <p class="font-bold text-xl">Inbike (Change)</p>
                        <p class="font-bold text-xl">Delivery Price</p>
                        <br>
                        <p class="font-bold text-orange-500 text-2xl">Total</p>
                    </div>
                    <div>
                        <p class="font-bold text-xl">: Rp 26.000,-</p>
                        <p class="font-bold text-xl">: Rp 0,-</p>
                        <p class="font-bold text-xl">(Receive in 2-4 hours)</p>
                        <p class="font-bold text-xl">: Rp 8.000,-</p>
                        <br>
                        <p class="font-bold text-orange-500 text-2xl">: Rp 34.000,-</p>
                    </div>
                </div>

                <div><button class="btn btn-block btn-primary">Checkout</button></div>

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