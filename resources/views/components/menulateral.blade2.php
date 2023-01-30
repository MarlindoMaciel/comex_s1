



<div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">BBBootstrap</span> </a>
                <div class="nav_list">
                {{ $slot }}
                <a class="nav_link active"> <i class='bx bx-grid-alt nav_icon' href="{{ url('/') }}/?id={{ $categoria->id }}"></i> <span class="nav_name">{{ ucfirst( mb_strtolower($categoria->nome) ) }}</span> </a> 

                </div>
            </div> <a href="#" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
        </nav>
    </div>
    <!--Container Main start-->
    <div class="height-100 bg-light">
        <h4>Main Components</h4>
    </div>
    <!--Container Main end-->
