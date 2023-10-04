<div class="page-main-header">
    <div class="main-header-right row m-0">
      <div class="nav-right col pull-right right-menu p-0">
        <ul class="nav-menus">
          <li>
            <div class="mode"><i class="fa fa-moon-o"></i></div>
          </li>
          <li class="onhover-dropdown">
            <div class="bookmark-box"><i data-feather="more-vertical"></i></div>
            <div class="bookmark-dropdown onhover-show-div">
              <ul class="m-t-5">
                <li class="add-to-bookmark text-center"><a class="btn btn-primary" type="button" href="{{ route('logout') }}"><i data-feather="log-out"></i>  Log out</a></li>
              </ul>
            </div>
          </li>
          {{-- <li class="onhover-dropdown p-0">
            <button class="btn btn-primary-light" type="button"><a href="login_two.html"><i data-feather="log-out"></i>Log out</a></button>
          </li> --}}
        </ul>
      </div>
      <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
    </div>
  </div>