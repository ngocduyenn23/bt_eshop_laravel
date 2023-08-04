
<x-admin_layout title="trang chu">

</x-admin_layout>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
</head>

<body>

    <header id="myHeader">
        <div class="logo">
            <img src="./image/logo.png" alt="">
        </div>
        <div class="menubar">
            <ul>
                <li><a href="/">Home</a></li>
                {{-- <li><a href="#shop_category">Cửa Hàng</a></li> --}}
                <li><a href="/contact">Product</a></li>
                <li><a href="#lastest_pruducts">Contact</a></li>
            </ul>
        </div>

        <div class="right">
            <i class="fa-solid fa-magnifying-glass"></i>

            <div class="rel">
                <i class="fa-solid fa-heart"></i>
                <span class="number">20</span>
            </div>

            <div class="rel">
                <a href="#"> <i class="fa-solid fa-cart-plus"></i></a>
                <span class="number">0</span>
            </div>
       </div>
    
    </header>

    <section id="shop_category" class="w-70">
        <div class="shop_category">
            <div class="food">
                @foreach ($data as $item)
                    <div class="food_items mt-5" >
                        <div class="img" style="width: 300px; height:350px ">
                            <a href="/detail"><img src="{{ $item->anh_bia }}" alt="img"></a>
                        </div>
                        <div class="food_details">
                            <div class="review">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <h4>{{ $item->san_pham }}</h4>
                            <h3>{{ number_format($item->gia) }}</h3>
                            <p>{{ $item->chi_tiet }}</p>
                            <button>Add To Cart</button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <script>
        window.onscroll = function() {
            myFunction()
        };
        var header = document.getElementById('myHeader');
        var sticky = header.offsetTop;

        function myFunction() {
            if (window.pageYOffset > sticky) {
                header.classList.add('sticky');
            } else {
                header.classList.remove('sticky');
            }
        }
    </script>
</body>
</html>
