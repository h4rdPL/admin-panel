<script
        type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"
></script>
<!-- Font Awesome -->
<link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        rel="stylesheet"
/>
<!-- Google Fonts -->
<link
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
        rel="stylesheet"
/>
<!-- MDB -->
<link
        href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css"
        rel="stylesheet"
/>

<header>
    <!-- Sidebar -->
    <nav
            id="sidebarMenu"
            class="collapse d-lg-block sidebar collapse bg-white"
    >
        <div class="position-sticky">
            <div class="list-group list-group-flush mx-3 mt-4">
                <a
                        href="index.php"
                        class="list-group-item list-group-item-action py-2 ripple"
                        aria-current="true"
                >
                    <i class="fas fa-tachometer-alt fa-fw me-3"></i
                    ><span>Dashboard</span>
                </a>
                <a
                        href="clients.php"
                        class="list-group-item list-group-item-action py-2 ripple"
                >
                    <i class="fas fa-chart-area fa-fw me-3"></i
                    ><span>Klienci</span>
                </a>
                <a
                        href="calendar.php"
                        class="list-group-item list-group-item-action py-2 ripple"
                ><i class="fas fa-lock fa-fw me-3"></i><span>Kalendarz</span></a
                >
                <a
                        href="tasks.php"
                        class="list-group-item list-group-item-action py-2 ripple"
                ><i class="fas fa-chart-line fa-fw me-3"></i
                    ><span>Zadania</span></a
                >
                <a
                        href="users.php"
                        class="list-group-item list-group-item-action py-2 ripple"
                >
                    <i class="fas fa-chart-pie fa-fw me-3"></i><span>Użytkownicy</span>
                </a>

            </div>
        </div>
    </nav>
    <!-- Sidebar -->

    <!-- Navbar -->
    <nav
            id="main-navbar"
            class="navbar navbar-expand-lg navbar-light bg-white fixed-top"
    >
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Toggle button -->
            <button
                    class="navbar-toggler"
                    type="button"
                    data-mdb-toggle="collapse"
                    data-mdb-target="#sidebarMenu"
                    aria-controls="sidebarMenu"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
            >
                <i class="fas fa-bars"></i>
            </button>

            <!-- Brand -->
            <a class="navbar-brand" href="#">Admin panel
            </a>
            <!-- Search form -->
            <form class="d-none d-md-flex input-group w-auto my-auto">
                <input
                        autocomplete="off"
                        type="search"
                        class="form-control rounded"
                        placeholder='Szukaj'
                        style="min-width: 225px"
                />
                <span class="input-group-text border-0"
                ><i class="fas fa-search"></i
                    ></span>
            </form>

            <!-- Right links -->
            <ul class="navbar-nav ms-auto d-flex flex-row">
                <!-- Notification dropdown -->

                <!-- Avatar -->
                <li class="nav-item dropdown">
                    <a
                            class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center"
                            href="#"
                            id="navbarDropdownMenuLink"
                            role="button"
                            data-mdb-toggle="dropdown"
                            aria-expanded="false"
                    >
                        <img
                                src="https://mdbootstrap.com/img/Photos/Avatars/img (31).jpg"
                                class="rounded-circle"
                                height="22"
                                alt=""
                                loading="lazy"
                        />
                    </a>
                    <ul
                            class="dropdown-menu dropdown-menu-end"
                            aria-labelledby="navbarDropdownMenuLink"
                    >
                        <li><a class="dropdown-item" href="#">Wylogowanie</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
</header>
<!--Main Navigation-->
