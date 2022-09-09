{{-- <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <h6
                class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1
        text-muted">
                <span>Administrator Minumint</span>
            </h6>

            <li class="nav-item">
                <a class="nav-link {{ Request::is('/administrator/product*') ? 'active' : '' }}" aria-current="page"
                    href="/administrator/product">
                    <span data-feather="home"></span>
                    Product
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ Request::is('administrator/category*') ? 'active' : '' }}"
                    href="/administrator/category">
                    <span data-feather="file-text"></span>
                    Category
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ Request::is('administrator/member*') ? 'active' : '' }}"
                    href="/administrator/member">
                    <span data-feather="grid"></span>
                    Member
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/topping*') ? 'active' : '' }}"
                    href="/administrator/topping">
                    <span data-feather="grid"></span>
                    Topping
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/voucer*') ? 'active' : '' }}"
                    href="/administrator/voucer">
                    <span data-feather="grid"></span>
                    Voucer
                </a>
            </li>

            <div class="nav-item text-nowrap">
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="nav-link px-3 bg-dark border-0">
                        Logout<span data-feather="log-out"></span></button>
                </form>
            </div>
        </ul>
    </div>
</nav> --}}

<nav class="sidebar">
    <div class="sidebar-header">
        <a href="{{ url('/') }}" target="_blank" class="sidebar-brand">
            <span>Minumint</span>
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item nav-category">Main</li>
            <li class="nav-item">
                <a href="/administrator/main" class="nav-link {{ Request::is('administrator/main*') ? 'active' : '' }}">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="/administrator/member" class="nav-link {{ Request::is('administrator/member*') ? 'active' : '' }}">
                    <i class="link-icon" data-feather="user"></i>
                    <span class="link-title">User</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="/administrator/category" class="nav-link {{ Request::is('administrator/category*') ? 'active' : '' }}">
                    <i class="link-icon" data-feather="briefcase"></i>
                    <span class="link-title">Kategori</span>
                </a>
            </li> 
            <li class="nav-item">
                <a href="/administrator/product" class="nav-link {{ Request::is('/administrator/product*') ? 'active' : '' }}" aria-current="page" >
                    <i class="link-icon" data-feather="coffee"></i>
                    <span class="link-title">Produk</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="/administrator/voucer" class="nav-link {{ Request::is('dashboard/voucer*') ? 'active' : '' }}">
                    <i class="link-icon" data-feather="gift"></i>
                    <span class="link-title">Voucher</span>
                </a>
            </li>
            <li class="nav-item">
              <a href="/administrator/topping" class="nav-link {{ Request::is('dashboard/voucher*') ? 'active' : '' }}">
                  <i class="link-icon" data-feather="gift"></i>
                  <span class="link-title">Topping</span>
              </a>
          </li>
            <li class="nav-item">
                <a href="transaksi.html" class="nav-link">
                    <i class="link-icon" data-feather="dollar-sign"></i>
                    <span class="link-title">Transaksi</span>
                </a>
            </li>
            {{-- <div class="nav-item text-nowrap">
              <form action="/logout" method="post">
                  @csrf
                  <button type="submit" class="nav-link px-3 bg-dark border-0">
                      Logout<span data-feather="log-out"></span></button>
              </form>
          </div> --}}

        </ul>
    </div>
</nav>


