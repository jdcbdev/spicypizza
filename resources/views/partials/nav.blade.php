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
</header>
