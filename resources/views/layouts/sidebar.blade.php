<div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu" id="side-menu">
                <li class="menu-title">Utama</li>
                
                <li class="{{ request()->is('/') ? 'active' : ''}}">
                    <a href="/">
                        <i class="mdi mdi-view-home"></i><span> Dashboard </span>
                    </a>
                </li>
                @if (auth()->user()->level==1)
                    <li class="{{ request()->is('/') ? 'active' : ''}}">
                        <a href="/registrasi"><i class="mdi mdi-calendar-check"></i><span>Registrasi</span></a>
                    </li>
                @else (auth()->user()->level==2)
                <li class="{{ request()->is('/') ? 'active' : ''}}">
                    <a href="/barang" ><i class="mdi mdi-calendar-check"></i><span> Barang </span></a>
                </li>
                <li class="{{ request()->is('/') ? 'active' : ''}}">
                    <a href="/penjualan"><i class="mdi mdi-calendar-check"></i><span> Penjualan </span></a>
                </li>
                <li class="{{ request()->is('/') ? 'active' : ''}}">
                    <a href="#"><i class="mdi mdi-calendar-check"></i><span> Pembelian </span></a>
                </li>
                <li class="{{ request()->is('/') ? 'active' : ''}}">
                    <a href="/operasional"><i class="mdi mdi-calendar-check"></i><span> Operasional </span></a>
                </li>
                @endif 

                <li class="menu-title">Laporan</>

                <li>
                    <a href="#"><i class="mdi mdi-calendar-check"></i><span> Laporan Bulanan </span></a>
                </li>
                

            </ul>

        </div>