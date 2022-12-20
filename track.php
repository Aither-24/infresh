<!DOCTYPE html>
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
  <div class="bg-white lg:mx-32 px-8 divide-y divide-solid divide-slate-200">
    <div class="text-3xl font-bold text-primary p-5">
      Track Delivery
    </div>
    <div class="grid lg:grid-cols-2 gap-4">
      <div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d30109.105426249484!2d112.61922783351187!3d-7.955904230319156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sid!4v1671544796630!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="p-5">
        <div class="grid justify-items-center gap-4">
          <div class="font-bold text-lg">
            Order ID : 1234567890AB
          </div>
          <div class="grid grid-cols-5 gap-4 py-5">
            <div class="grid justify-items-center">
              <button class="btn btn-primary btn-circle">
                <div>
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                  </svg>
                </div>
              </button>
              <div>
                Order Placed
              </div>
            </div>
            <div class="grid justify-items-center">
              <button class="btn btn-primary btn-circle">
                <div>
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                </div>
              </button>
              <div>
                Paid
              </div>
            </div>
            <div class="grid justify-items-center">
              <button class="btn btn-primary btn-circle">
                <div>
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M20.893 13.393l-1.135-1.135a2.252 2.252 0 01-.421-.585l-1.08-2.16a.414.414 0 00-.663-.107.827.827 0 01-.812.21l-1.273-.363a.89.89 0 00-.738 1.595l.587.39c.59.395.674 1.23.172 1.732l-.2.2c-.212.212-.33.498-.33.796v.41c0 .409-.11.809-.32 1.158l-1.315 2.191a2.11 2.11 0 01-1.81 1.025 1.055 1.055 0 01-1.055-1.055v-1.172c0-.92-.56-1.747-1.414-2.089l-.655-.261a2.25 2.25 0 01-1.383-2.46l.007-.042a2.25 2.25 0 01.29-.787l.09-.15a2.25 2.25 0 012.37-1.048l1.178.236a1.125 1.125 0 001.302-.795l.208-.73a1.125 1.125 0 00-.578-1.315l-.665-.332-.091.091a2.25 2.25 0 01-1.591.659h-.18c-.249 0-.487.1-.662.274a.931.931 0 01-1.458-1.137l1.411-2.353a2.25 2.25 0 00.286-.76m11.928 9.869A9 9 0 008.965 3.525m11.928 9.868A9 9 0 118.965 3.525" />
                  </svg>
                </div>
              </button>
              <div>
                Delivered
              </div>
            </div>
            <div class="grid justify-items-center">
              <button class="btn btn-disabled btn-circle">
                <div>
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 11.25v8.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 109.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1114.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                  </svg>
                </div>
              </button>
              <div>
                Recieved
              </div>
            </div>
            <div class="grid justify-items-center">
              <button class="btn btn-disabled btn-circle">
                <div>
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                  </svg>
                </div>
              </button>
              <div>
                Review
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="text-lg font-bold text-primary">
            Deliver Address
          </div>
          <div class="opacity-75 py-2">
            <div class="flex gap-4">
              <div class="font-bold opacity-100">
                Jonathan C. Ramonds
              </div>
              <div>
                +122 8800 1124
              </div>
            </div>
            <div>
              Lowokwaru, Malang (65112)
            </div>
          </div>
          <div>
            <div class="text-lg font-semi-bold text-primary py-2">
              Air Waybill :1234567890ABCD
            </div>
            <div>
              08:20 - Order Placed </br>
              08:24 - Order Paid </br>
              09:46 - Order Processed by Seller </br>
              09:55 - Order arr delivered by InBike </br>
            </div>
            <div class="text-primary">
              Estimated package arrived at 11:00
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="grid lg:grid-cols-2 gap-4 py-5">
      <div class="divide-y divide-solid divide-slate-500 px-10">
        <div class="grid grid-cols-2 p-2">
          <div>
            Subtotal Product
          </div>
          <div class="grid justify-items-end">
            Rp26.000,-
          </div>
        </div>
        <div class="grid grid-cols-2 p-2">
          <div>
            Delivery Fee
          </div>
          <div class="grid justify-items-end">
            Rp8.000,-
          </div>
        </div>
        <div class="grid grid-cols-2 p-2">
          <div>
            Discount
          </div>
          <div class="grid justify-items-end">
            Rp0,-
          </div>
        </div>
        <div class="grid grid-cols-2 text-2xl p-2">
          <div>
            Subtotal Product
          </div>
          <div class="grid justify-items-end text-orange-500">
            Rp32.000,-
          </div>
        </div>
        <div>
        </div>
      </div>

      <div class="px-10">
        <div class="text-3xl font-bold px-8">
          Green Store
        </div>
        <div class="grid grid-cols-2 justify-items-center py-10">
          <div>
            <button class="btn btn-active btn-accent w-48">Contact Seller</button>
          </div>
          <div>
            <button class="btn btn-active btn-primary w-48">Order Recieved</button>
          </div>
        </div>
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