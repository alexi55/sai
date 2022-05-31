        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>


                        @can('admin_panel_access')
                        <!-- dashboard-->
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark  @if(request()->is('admin')) is_active @endif"
                                href="{{ route('admin.home') }}" aria-expanded="false">
                                <i class="fab fa-windows" aria-hidden="true"></i>
                                <span class="hide-menu" style="color:black;font-weight: bold;">MENU PRINCIPAL</span>
                            </a>
                        </li>
                        @endcan



                        @canany(['compras_panel_access'])
                        <li class="sidebar-item">

                            <a class="sidebar-link has-arrow waves-effect waves-dark selected" href="javascript:void(0)"
                                aria-expanded="false">

                                <i class="fab fa-whmcs" aria-hidden="true"></i>
                                <span class="hide-menu" style="color:#00688A;font-weight: bold;">Panel de Compras</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level
                                @if(request()->is('admin/users') || request()->is('admin/users/*')) in @endif
   
                            ">
                                @can('medidas_access')
                                <li class="sidebar-item">
                                    <a class="sidebar-link waves-effect waves-dark  @if(request()->is('admin/users') || request()->is('admin/users/*')) is_active @endif"
                                        href="{{ route('medidas.index') }}" aria-expanded="false">
                                        <i class="mdi-format-quote-open" aria-hidden="true"></i>
                                        <span class="hide-menu" style="color:black;font-weight: bold;">Medidas</span>
                                    </a>
                                </li>
                                @endcan
                                @can('productos_access')
                                <li class="sidebar-item">
                                    <a class="sidebar-link waves-effect waves-dark  @if(request()->is('admin/users') || request()->is('admin/users/*')) is_active @endif"
                                        href="{{ route('pedido.index') }}" aria-expanded="false">
                                        <i class="mdi mdi-cart" aria-hidden="true"></i>
                                        <span class="hide-menu" style="color:black;font-weight: bold;">Compras</span>
                                    </a>
                                </li>
                                @endcan
                                @can('partidas_access')
                                <li class="sidebar-item">
                                    <a class="sidebar-link waves-effect waves-dark  @if(request()->is('admin/users') || request()->is('admin/users/*')) is_active @endif"
                                        href="{{ route('partida.index') }}" aria-expanded="false">
                                        <i class="mdi mdi-apps" aria-hidden="true"></i>
                                        <span class="hide-menu" style="color:black;font-weight: bold;">Partidas</span>
                                    </a>
                                </li>
                                @endcan
                                @can('users_access')
                                <li class="sidebar-item">
                                    <a class="sidebar-link waves-effect waves-dark  @if(request()->is('admin/users') || request()->is('admin/users/*')) is_active @endif"
                                        href="{{ route('productos.index') }}" aria-expanded="false">
                                        <i class="mdi mdi-collage" aria-hidden="true"></i>
                                        <span class="hide-menu"
                                            style="color:black;font-weight: bold;">Productos-Items</span>
                                    </a>
                                </li>
                                @endcan


                                @can('proveedores_access')
                                <li class="sidebar-item">
                                    <a class="sidebar-link waves-effect waves-dark  @if(request()->is('admin/users') || request()->is('admin/users/*')) is_active @endif"
                                        href="{{ route('proveedores.index') }}" aria-expanded="false">
                                        <i class="mdi mdi-briefcase" aria-hidden="true"></i>
                                        <span class="hide-menu"
                                            style="color:black;font-weight: bold;">Proveedores</span>
                                    </a>
                                </li>
                                @endcan



                                @can('programas_access')
                                <li class="sidebar-item">
                                    <a class="sidebar-link waves-effect waves-dark  @if(request()->is('admin/users') || request()->is('admin/users/*')) is_active @endif"
                                        href="{{ route('programas.index') }}" aria-expanded="false">
                                        <i class="mdi mdi-vector-polygon" aria-hidden="true"></i>
                                        <span class="hide-menu" style="color:black;font-weight: bold;">Programas</span>
                                    </a>
                                </li>
                                @endcan

                                @can('catprog_access')
                                <li class="sidebar-item">
                                    <a class="sidebar-link waves-effect waves-dark  @if(request()->is('admin/users') || request()->is('admin/users/*')) is_active @endif"
                                        href="{{ route('catprog.index') }}" aria-expanded="false">
                                        <i class="mdi mdi-altimeter" aria-hidden="true"></i>
                                        <span class="hide-menu"
                                            style="color:black;font-weight: bold;">Cat.Programatica</span>
                                    </a>
                                </li>
                                @endcan


                            </ul>
                        </li>
                        @endcanany















                        @canany(['users_access','roles_access','permissions_access'])
                        <li class="sidebar-item">

                            <a class="sidebar-link has-arrow waves-effect waves-dark selected" href="javascript:void(0)"
                                aria-expanded="false">

                                <i class="fab fa-expeditedssl" aria-hidden="true"></i>
                                <span class="hide-menu" style="color:#00688A;font-weight: bold;">Panel de
                                    Usuarios</span>
                            </a>
                            <ul aria-expanded="false"
                                class="collapse first-level
                                @if(request()->is('admin/users') || request()->is('admin/users/*')) in @endif
                                @if(request()->is('admin/roles') || request()->is('admin/roles/*')) in @endif
                                @if(request()->is('admin/permissions') || request()->is('admin/permissions/*')) in @endif">

                               

                                @can('empleados_access')
                                <li class="sidebar-item">
                                    <a class="sidebar-link waves-effect waves-dark  @if(request()->is('admin/users') || request()->is('admin/users/*')) is_active @endif"
                                        href="{{ route('empleados.index') }}" aria-expanded="false">
                                        <i class="mdi mdi-account-box" aria-hidden="true"></i>
                                        <span class="hide-menu" style="color:black;font-weight: bold;">Empleados</span>
                                    </a>
                                </li>
                                @endcan

                                @can('areas_access')
                                <li class="sidebar-item">
                                    <a class="sidebar-link waves-effect waves-dark  @if(request()->is('admin/users') || request()->is('admin/users/*')) is_active @endif"
                                        href="{{ route('areas.index') }}" aria-expanded="false">
                                        <i class="mdi mdi-view-sequential" aria-hidden="true"></i>
                                        <span class="hide-menu" style="color:black;font-weight: bold;">Areas</span>
                                    </a>
                                </li>
                                @endcan



                                @can('users_access')
                                <li class="sidebar-item">
                                    <a class="sidebar-link waves-effect waves-dark  @if(request()->is('admin/users') || request()->is('admin/users/*')) is_active @endif"
                                        href="{{ route('admin.users.index') }}" aria-expanded="false">
                                        <i class="mr-3 mdi mdi-account-multiple" aria-hidden="true"></i>
                                        <span class="hide-menu" style="color:black;font-weight: bold;">Usuarios</span>
                                    </a>
                                </li>
                                @endcan

                                @can('roles_access')
                                <li class="sidebar-item">
                                    <a class="sidebar-link waves-effect waves-dark  @if(request()->is('admin/roles') || request()->is('admin/roles/*')) is_active @endif"
                                        href="{{ route('admin.roles.index') }}" aria-expanded="false">
                                        <i class="mr-3 mdi mdi-star" aria-hidden="false"></i>
                                        <span class="hide-menu" style="color:black;font-weight: bold;">Roles</span>
                                    </a>
                                </li>
                                @endcan

                                @can('permissions_access')
                                <li class="sidebar-item">
                                    <a class="sidebar-link waves-effect waves-dark  @if(request()->is('admin/permissions') || request()->is('admin/permissions/*')) is_active @endif"
                                        href="{{ route('admin.permissions.index') }}" aria-expanded="false">
                                        <i class="mr-3 mdi mdi-key" aria-hidden="false"></i>
                                        <span class="hide-menu" style="color:black;font-weight: bold;">Permisos</span>
                                    </a>
                                </li>
                                @endcan
                            </ul>
                        </li>
                        @endcanany

                        {{-- <li class="sidebar-item selected"> <a class="sidebar-link has-arrow waves-effect waves-dark active" href="javascript:void(0)" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home feather-icon"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg><span class="hide-menu">Dashboard <span class="badge badge-pill badge-success">5</span></span></a>
                            <ul aria-expanded="false" class="collapse first-level in">
                                <li class="sidebar-item"><a href="index.html" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Modern Dashboard  </span></a></li>
                                <li class="sidebar-item active"><a href="index2.html" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Awesome Dashboard </span></a></li>
                                <li class="sidebar-item"><a href="index3.html" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Classy Dashboard </span></a></li>
                                <li class="sidebar-item"><a href="index4.html" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Analytical Dashboard </span></a></li>
                                <li class="sidebar-item"><a href="index5.html" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Minimal Dashboard </span></a></li>
                            </ul>
                        </li> --}}

                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->