<!-- ========================================= NAVIGATION ========================================= -->
<nav id="top-megamenu-nav" class="megamenu-vertical animate-dropdown">
    <div class="container">
        <div class="yamm navbar">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mc-horizontal-menu-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div><!-- /.navbar-header -->
            <div class="collapse navbar-collapse" id="mc-horizontal-menu-collapse">
                <ul class="nav navbar-nav">
                @foreach ($categories as $category)
                    <li class="dropdown">
                        <a href="{{ asset('page') . '/' . $category['id'] }}" class="dropdown-toggle" data-hover="dropdown" >{{ $category['name'] }}</a>
                        @if (count($category->subCategories) != 0)
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="yamm-content">
                                        <div class="row">
                                           <div class="col-xs-12 col-sm-4">
                                                <ul>
                                                @foreach ($category->subCategories as $subCategory)
                                                    <li><a href="{{ asset('page') . '/' . $subCategory['id'] }}">{{ $subCategory['name'] }}</a></li>
                                                @endforeach
                                                </ul>
                                            </div><!-- /.col -->
                                        </div><!-- /.row -->
                                    </div><!-- /.yamm-content -->
                                </li>
                            </ul>
                        @endif
                    </li>
                @endforeach
                </ul><!-- /.navbar-nav -->
            </div><!-- /.navbar-collapse -->
        </div><!-- /.navbar -->
    </div><!-- /.container -->
</nav><!-- /.megamenu-vertical -->
<!-- ========================================= NAVIGATION : END ========================================= -->