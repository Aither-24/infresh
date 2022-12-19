<html data-theme="lemonade">

<head>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.45.0/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-emerald-300">
    <!-- Navbar -->
    <div class="sticky top-0 z-30">
        <?php include_once("navbar.html"); ?>
    </div>

    <!-- content -->
    <div class="bg-white mx-32 px-8 divide-y divide-solid divide-slate-200">

        <div class="flex flex-wrap items-center gap-4 p-10">
            <div class="avatar online">
                <div class="w-16 rounded-full">
                    <img src="https://placeimg.com/192/192/people" />
                </div>
            </div>
            <div class="text-2xl">
                Green Store
            </div>
        </div>

        <div class="divide-y divide-solid divide-slate-100">
            <div class="grid grid-cols-5 gap-4 p-6 gap-4">
                <div>
                    <img src="images/tomato-sm.png">
                </div>
                <div class="col-span-2">
                    <div class="grid grid-rows-3 grid-flow-col gap-2">
                        <div>Fresh Organic Tomato</div>
                        <div>1 Kg</div>
                        <div>Qty: 2</div>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="grid grid-rows-3 grid-flow-col gap-2">
                        <div class="flex flex-wrap gap-4">
                            <div>Product Quality</div>
                            <div class="rating">
                                <input type="radio" name="rating-1" class="mask mask-star bg-orange-400" />
                                <input type="radio" name="rating-1" class="mask mask-star bg-orange-400" checked />
                                <input type="radio" name="rating-1" class="mask mask-star bg-orange-400" />
                                <input type="radio" name="rating-1" class="mask mask-star bg-orange-400" />
                                <input type="radio" name="rating-1" class="mask mask-star bg-orange-400" />
                            </div>
                        </div>
                        <div>Review</div>
                        <div>
                            <input type="text" placeholder="Type here" class="input input-bordered input-sm w-full max-w-xs" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-5 gap-4 p-6 gap-4">
                <div>
                    <img src="images/tomato-sm.png">
                </div>
                <div class="col-span-2">
                    <div class="grid grid-rows-3 grid-flow-col gap-2">
                        <div>Fresh Organic Tomato</div>
                        <div>1 Kg</div>
                        <div>Qty: 2</div>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="grid grid-rows-3 grid-flow-col gap-2">
                        <div class="flex flex-wrap gap-4">
                            <div>Product Quality</div>
                            <div class="rating">
                                <input type="radio" name="rating-2" class="mask mask-star bg-orange-400" />
                                <input type="radio" name="rating-2" class="mask mask-star bg-orange-400" checked />
                                <input type="radio" name="rating-2" class="mask mask-star bg-orange-400" />
                                <input type="radio" name="rating-2" class="mask mask-star bg-orange-400" />
                                <input type="radio" name="rating-2" class="mask mask-star bg-orange-400" />
                            </div>
                        </div>
                        <div>Review</div>
                        <div>
                            <input type="text" placeholder="Type here" class="input input-bordered input-sm w-full max-w-xs" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid grid-rows-3 grid-flow-col gap-2 p-10">
            <div class="text-2xl text-emerald-800">About Service</div>
            <div class="flex flex-wrap gap-24">
                <div class="w-32">Seller Service</div>
                <div class="rating">
                    <input type="radio" name="rating-seller" class="mask mask-star bg-orange-400" />
                    <input type="radio" name="rating-seller" class="mask mask-star bg-orange-400" />
                    <input type="radio" name="rating-seller" class="mask mask-star bg-orange-400" />
                    <input type="radio" name="rating-seller" class="mask mask-star bg-orange-400" checked />
                    <input type="radio" name="rating-seller" class="mask mask-star bg-orange-400" />
                </div>
            </div>
            <div class="flex flex-wrap gap-24">
                <div class="w-32">Delivery's Service</div>
                <div class="rating">
                    <input type="radio" name="rating-deliver" class="mask mask-star bg-orange-400" />
                    <input type="radio" name="rating-deliver" class="mask mask-star bg-orange-400" />
                    <input type="radio" name="rating-deliver" class="mask mask-star bg-orange-400" />
                    <input type="radio" name="rating-deliver" class="mask mask-star bg-orange-400" checked />
                    <input type="radio" name="rating-deliver" class="mask mask-star bg-orange-400" />
                </div>
            </div>
        </div>
        <div class="grid justify-items-end p-10">
            <button class="btn btn-active btn-primary w-64">Send</button>
        </div>
    </div>

</body>

</html>