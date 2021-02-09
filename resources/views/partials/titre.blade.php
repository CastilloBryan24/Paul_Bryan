<!-- ======= Header ======= -->
<header id="header" class=" ">
    <div class="container d-flex align-items-center justify-content-between">
        <h1 class="logo"><a href="#">{{$navbardb1[0]->brand}}</a></h1>        
        <nav class="nav-menu d-none d-lg-block">
          <ul>
            @foreach ($navbardb2 as $item)   
            <li class="active"><a href="{{$item->route}}">{{$item->lien}}</a></li>
            @endforeach
          </ul>
        </nav><!-- .nav-menu -->
    </div>
</header><!-- End Header -->