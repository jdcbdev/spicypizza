<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Spicy Pizza</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" 
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    </head>
    <body>
        <div id="app">
            <header>
                <div class="top-nav border">
                    <div class="top-nav-left">
                    <img src="{{asset('/img/images/logo1.png')}}" alt="Spicy Pizza">
                        {{ menu('main', 'partials.menus.main') }}
                    </div>
                    <div class="top-nav-right">
                        @include('partials.menus.main-right')
                    </div>
                </div> <!-- end top-nav -->
                
                <div id="home">
                    <div id="upper">
                        <h5>The First Spicy Pizza in Town</h5>
                        <h1 id="reduced"><span>Spicy Flavors.</span> Tasty Pizza.</h1>
                        <a href="/shop" class="btn">Shop Now!</a>
                    </div>
                </div>
            </header>

            <div class="featured-section">
                <div class="text-center">
                    <h2>- Best Seller -</h2>
                    <br>
                </div>
                    <div class="products text-center">
                        @foreach ($bestseller as $product)
                            <div class="product">
                                <a href="{{ route('shop.show', $product->slug) }}"><img src="{{ productImage($product->image) }}" alt="product"></a>
                                
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                
                                <a href="{{ route('shop.show', $product->slug) }}"><div class="product-name">{{ $product->name }}</div></a>
                                <div class="product-price">{{ $product->presentPrice() }}</div>
                            </div>
                        @endforeach

                    </div> <!-- end products -->

                    <div class="text-center button-container">
                        <a href="{{ route('shop.index') }}" class="btn">View more products</a>
                    </div>


            </div> <!-- end featured-section -->

            <section id="banner">
                <div class="">
                </div>
            </section>

            @include('partials.footer')

        </div> <!-- end #app -->
        <script src="js/app.js"></script>
    </body>
</html>
