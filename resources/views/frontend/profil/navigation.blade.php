                    <div class="dashboard-close-main">
                        <div class="close-bars"> <i class="las la-times"></i> </div>
                        <div class="dashboard-bottom">
                            <ul class="dashboard-list list-style-none">
                                <li class="list">
                                    <a href="{{route('dashboard')}}"> <i class="las la-briefcase"></i> Dashboard </a>
                                </li>
                                <li class="list has-children active">
                                    <a href="javascript:void(0)"> <i class="las la-user-circle"></i> Profile </a>
                                    <ul class="submenu list-style-none">
                                        <li class="list"> <a href="{{route('dashboard.profil')}}"> Profile </a> </li>
                                        <li class="list"> <a href="{{route('dashboard.edit.profil')}}"> Modifier mes informations  </a> </li>
                                        <li class="list"> <a href="{{route('password.modify')}}"> Changer de Password  </a> </li>
                                    </ul>
                                </li>

                                <li class="list">
                                    <a href="{{route('logout')}}"> <i class="las la-sign-out-alt"></i> Déconnexion  </a>
                                </li>
                            </ul>
                        </div>
                    </div>
