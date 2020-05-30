<div class="container-fluid position-fixed" style="z-index: 9999999;">

    <div class="row p-0">

        <div class="col-1 bg-secondary">
            <img src="/img/logo-simple-icon.svg" class="mx-auto d-block" style="height: 75px;" alt="">
        </div>
        <div class="col-8 bg-white border-bottom pt-3">
            @yield('header-page')
        </div>
        <div class="col-3 bg-white border-bottom">
            <div class="dropdown float-right">
                <button class="dropdown-user btn btn-white p-0 px-3 btn-no-effects" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   <ul class="nav">
                        <li class="nav-item">
                            <p class="icon-user rounded-circle mt-3 text-center px-3 py-2 text-white">
                                @php
                                    echo ucfirst((Auth::user()->name)[0])
                                @endphp
                            </p>
                        </li>
                        <li class="nav-item pt-4 pl-2 dropdown-toggle">

                            {{ Auth::user()->name }}

                        </li>
                    </ul>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">sair
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </a>
                </div>
            </div>


        </div>
    </div>

</div>
<div class="container-fluid" style="height: 75px;">

</div>
