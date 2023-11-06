@php
    $showInformasi = App\Models\Informasi::first()->get();
@endphp
<nav class="main-header navbar navbar-expand navbar-white navbar-light">

    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        {{-- <li class="nav-item d-none d-sm-inline-block">
            <a href="" class="nav-link text-bold">POLITEKNIK LP3I KAMPUS TASIKMALAYA</a>
        </li> --}}
    </ul>

    <ul class="navbar-nav ml-auto">

        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-comments"></i>
                @if ($showInformasi[0]->informasi > 1)
                    <span class="badge badge-danger navbar-badge"></span>
                @else
                    <span class="badge badge-danger navbar-badge">1</span>
                @endif
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <a href="#" class="dropdown-item">

                    <div class="media">
                        {{-- <img src="adminlte/img/user2-160x160.jpg" alt="User Avatar"
                            class="img-size-50 mr-3 img-circle"> --}}
                        <div class="media-body">
                            <h3 class="dropdown-item-title">
                                Pesan Informasi
                                <span class="float-right text-sm text-primary"><i class="fas fa-star"></i></span>
                            </h3>
                            <div class="dropdown-divider mt-2"></div>

                            <p>{{ $showInformasi[0]->informasi }}</p>

                        </div>
                    </div>

                </a>
                <div class="dropdown-divider"></div>

                <a href="/informasi" class="dropdown-item dropdown-footer text-sm text-primary">Lihat
                    Selengkapnya...</a>
            </div>
        </li>



        <li class="nav-item">
            <a class="nav-link" role="button">

                <i class="fas fa-power-off" role="button" data-toggle="modal" data-target="#logout"></i>
            </a>
        </li>


    </ul>
</nav>
{{-- Modal Create --}}
<div class="modal fade" id="logout">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Logout</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Apakah kamu yakin ingin Logout ?</p>
            </div>
            <div class="modal-footer justify-content-center">
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary px-5">Ya</button>
                </form>
            </div>
        </div>
    </div>
</div>
