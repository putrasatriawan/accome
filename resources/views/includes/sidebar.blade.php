<!-- Sidebar -->
<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="{{ asset('front/assets_front_home/img/accome/orang1.png') }}"
                         alt="..."
                         class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse"
                       href="#collapseExample"
                       aria-expanded="true">
                        <span>
                            {{-- {{ Auth::user()->name }} --}}
                            <span class="user-level">Administrator</span>

                        </span>
                    </a>
                    <div class="clearfix"></div>
                </div>
            </div>
            <ul class="nav nav-primary">
                <li class="nav-item">
                    <a href="{{ route('dashboardback') }}">
                        <i class="
                        fas fa-home"></i>
                        <p>Dashboard</p>
                        <span class="badge badge-success"></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('talent.index') }}">
                        <i class="
                        far fa-list-alt"></i>
                        <p>Talent</p>
                        @php
                        $talent =App\Models\Talent::count();
                        @endphp
                        <span class="badge badge-success">{{ $talent }}</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('kategori.index') }}">
                        <i class="
                        far fa-list-alt"></i>
                        <p>Kategori</p>
                        @php
                        $kategori =App\Models\Kategori::count();
                        @endphp
                        <span class="badge badge-success">{{ $kategori }}</span>
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a href="{{ route('kategoristage.index') }}">
                        <i class="
                        far fa-list-alt"></i>
                        <p>Kategori Parent</p>
                        <span class="badge badge-success">4</span>
                    </a>
                </li> --}}
                <li class="nav-item">
                    <a href="{{ route('domisili.index') }}">
                        <i class="
                        far fa-list-alt"></i>
                        <p>Domisili</p>
                        @php
                        $domisili =App\Models\Domisili::count();
                        @endphp
                        <span class="badge badge-success">{{ $domisili }}</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('tag.index') }}">
                        <i class="
                        far fa-list-alt"></i>
                        <p>Tag</p>
                        @php
                        $tag =App\Models\Tags::count();
                        @endphp
                        <span class="badge badge-success">{{ $tag }}</span>
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a href="{{ route('artikel.index') }}">
                        <i class="fas fa-desktop"></i>
                        <p>Artikel</p>
                        <span class="badge badge-success">4</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('playlist.index') }}">
                        <i class="far fa-folder-open"></i>
                        <p>Playlist</p>
                        <span class="badge badge-success">4</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('materi.index') }}">
                        <i class="fas fa-pen-square"></i>
                        <p>Materi</p>
                        <span class="badge badge-success">4</span>
                    </a>
                </li>
                <li class="nav-item"> --}}

                    <a class="dropdown-item"
                       href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                        <i class="fas fa-undo"></i>
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form"
                          action="{{ route('logout') }}"
                          method="POST"
                          class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->