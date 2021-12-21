<div class="sidebar sidebar-main sidebar-default  ">
    <div class="sidebar-fixed">
                <div class="sidebar-content">

                    <!-- User menu -->
                    <div class="sidebar-user-material">
                        <div class="category-content">
                            <div class="sidebar-user-material-content">
                                <a href="#"><img src="{{asset('assets/images/Logo Kab Kediri.png')}}" class="img-circle img-responsive" alt=""></a>
                                <h6> </h6>
                                <span class="text-size-small"> </span>
                            </div>

                            <div class="sidebar-user-material-menu">
                                <a href="#user-nav" data-toggle="collapse"><span>My account</span> <i class="caret"></i></a>
                            </div>
                        </div>

                        <div class="navigation-wrapper collapse" id="user-nav">
                            <ul class="navigation">
 
                                <li><a href="{{ url('admin/myprofile') }}"><i class="icon-user-plus"></i> <span>My profile</span></a></li> 

                                <li><a href="#" onclick="$('#logout-form').submit();"><i class="icon-switch2"></i> <span>Logout</span></a></li>
                            </ul>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> @csrf</form>
                        </div>
                    </div>
                    <!-- /user menu -->


                    <!-- Main navigation -->
                    <div class="sidebar-category sidebar-category-visible">
                        <div class="category-content no-padding">
                            <ul class="navigation navigation-main navigation-accordion">

                                <!-- Main -->
                                <li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
                                
                                <li class="dashboard {{ Request::is('*home') ? 'active' : '' }}"><a href="{{ url('/home') }}"><i class="icon-home4"></i> <span>Dashboard</span></a></li> 
 
                                <!-- <li class="dashboard" onclick="data_arsip_aktif()"><a href="{{ url('/admin/data_arsip') }}"><i class="icon-book"></i> <span>Data Arsip Aktif</span></a></li>  -->
 
                                <li class="dashboard {{ Request::is('*/data_arsip_inactive') ? 'active' : '' }}"><a href="{{ url('/admin/data_arsip_inactive') }}"><i class="icon-newspaper"></i> <span>Data Arsip Inaktif</span></a></li> 
                                @if(Auth::user()->role==2)
                                <li>
                                    <a href="#"><i class="icon-briefcase"></i> <span>Master Data</span></a>
                                    <ul>
                                        <li class="master_indeks {{ Request::is('*/indeks') ? 'active' : '' }}">
                                            <a href="{{ url('/admin/indeks') }}">Indeks</a>
                                        </li>
                                        <li class="master_pemilik {{ Request::is('*/pemilik') ? 'active' : '' }}">
                                            <a href="{{ url('/admin/pemilik') }}">Divisi / Bidang</a>
                                        </li>
                                        <li class="master_lokasi {{ Request::is('*/lokasi') ? 'active' : '' }}">
                                            <a href="{{ url('/admin/lokasi') }}"> Arsip Lokasi</a>
                                        </li>
                                        <li class="master_jenis {{ Request::is('*/jenis') ? 'active' : '' }}">
                                            <a href="{{ url('/admin/jenis') }}">Jenis Divisi / Bidang</a>
                                        </li>
                                        <li class="master_kondisi {{ Request::is('*/kondisi') ? 'active' : '' }}">
                                            <a href="{{ url('/admin/kondisi') }}">Kondisi</a>
                                        </li> 
                                        <li class="master_kategori {{ Request::is('*/kategori') ? 'active' : '' }}">
                                            <a href="{{ url('/admin/kategori') }}">Arsip Kategori</a>
                                        </li>
                                        <li class="master_user {{ Request::is('*/user') ? 'active' : '' }}">
                                            <a href="{{ url('/admin/user') }}">Master User</a>
                                        </li>
                                    </ul>
                                </li>
                                @endif
                                <li class="dashboard  {{ Request::is('*/laporan_arsip') ? 'active' : '' }}"><a href="{{ url('/admin/laporan_arsip') }}"><i class="icon-history"></i> <span>Data Rekapitulasi</span></a></li>
                                
                                <!-- /page kits -->

                            </ul>
                        </div>
                    </div>
                    <!-- /main navigation -->

                </div>
    </div>
</div>