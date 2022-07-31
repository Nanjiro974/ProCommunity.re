<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        @if (isset($thread))
            {{ $thread->title }} -
        @endif
        @if (isset($category))
            {{ $category->title }} -
        @endif
        {{ trans('forum::general.home_title') }}
    </title>

    <!-- Google fonts-->
    <link
        href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />

    <!-- Bootstrap (https://github.com/twbs/bootstrap) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Feather icons (https://github.com/feathericons/feather) -->
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>

    <!-- Vue (https://github.com/vuejs/vue) -->
    @if (config('app.debug'))
        <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    @else
        <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>
    @endif

    <!-- Axios (https://github.com/axios/axios) -->
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <!-- Pickr (https://github.com/Simonwep/pickr) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/themes/classic.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/pickr.min.js"></script>

    <!-- Sortable (https://github.com/SortableJS/Sortable) -->
    <script src="//cdn.jsdelivr.net/npm/sortablejs@1.10.1/Sortable.min.js"></script>
    <!-- Vue.Draggable (https://github.com/SortableJS/Vue.Draggable) -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/Vue.Draggable/2.23.2/vuedraggable.umd.min.js"></script>
    <link href="/css/styles.css" rel="stylesheet" />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>

</head>

<body>
    <div class="collapse"style="background-color:rgba(47, 23, 15, 0.9)" id="navbarHeader">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-7 py-4">
                    <h4 class="text-white">A propos</h4>
                    <p class="text-muted">Add some information about the album below, the author, or any other
                        background context. Make it a few sentences long so folks can pick up some informative
                        tidbits. Then, link them off to some social networking sites or contact information.</p>
                </div>
                <div class="col-sm-4 offset-md-1 py-4">
                    <h4 class="text-white">Autentification</h4>
                    <ul class="list-unstyled">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">

                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/home') }}">Home</a>
                                <a id="navbarDropdown" class="nav-link dropdown-toggle " href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="navbar navbar-light"style="background-color: rgba(47, 23, 15, 0.8);">
        <div class="container">
            <a href="/" class="navbar-brand d-flex align-items-center ">
                <!-- <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg> -->
                <img id="logo" src="/img/logo_transparent.png" width="50" height="50" alt="logo">
                <strong>Acceuil</strong>
            </a>

            <strong><a class="navbar-brand d-flex align-items-center "
                    href="{{ url(config('forum.web.router.prefix')) }}">{{ trans('forum::general.index') }}</a></strong>

            <strong><a class="navbar-brand d-flex align-items-center "
                    href="{{ route('forum.recent') }}">{{ trans('forum::threads.recent') }}</a></strong>

            @auth

                <strong><a class="navbar-brand d-flex align-items-center "
                        href="{{ route('forum.unread') }}">{{ trans('forum::threads.unread_updated') }}</a></strong>

            @endauth
            @can('moveCategories')
                <strong><a class="navbar-brand d-flex align-items-center "
                        href="{{ route('forum.category.manage') }}">{{ trans('forum::general.manage') }}</a></strong>
            @endcan

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader"
                aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>

    <section class="page-section cta">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <div class="cta-inner bg-faded text-center rounded">
                        <aside class="col-sm-9 sidebar sidebar-right">

                            <!-- @include('forum::partials.breadcrumbs') -->
                            @include('forum::partials.alerts')

                            @yield('content')
                            
                    
                            <div class="intro-button mx-auto"><a class="btn btn-primary btn-xl" href="{{ route('register') }}">Créer un compte</a>
                            <a class="btn btn-primary btn-xl" href="{{ route('login') }}">Se connecter</a>
                        </div>

                        </aside>
                        <!-- /Sidebar -->

                    </div>
                </div> <!-- /container -->

            </div>
        </div>
        </div>
        </div>
        </div>

        <div class="mask"></div>

        <script>
            new Vue({
                el: '.v-navbar',
                name: 'Navbar',
                data: {
                    isCollapsed: true,
                    isUserDropdownCollapsed: true
                },
                methods: {
                    onWindowClick(event) {
                        const ignore = ['navbar-toggler', 'navbar-toggler-icon', 'dropdown-toggle'];
                        if (ignore.some(className => event.target.classList.contains(className))) return;
                        if (!this.isCollapsed) this.isCollapsed = true;
                        if (!this.isUserDropdownCollapsed) this.isUserDropdownCollapsed = true;
                    }
                },
                created: function() {
                    window.addEventListener('click', this.onWindowClick);
                }
            });

            const mask = document.querySelector('.mask');

            function findModal(key) {
                const modal = document.querySelector(`[data-modal=${key}]`);

                if (!modal) throw `Attempted to open modal '${key}' but no such modal found.`;

                return modal;
            }

            function openModal(modal) {
                modal.style.display = 'block';
                mask.style.display = 'block';
                setTimeout(function() {
                    modal.classList.add('show');
                    mask.classList.add('show');
                }, 200);
            }

            document.querySelectorAll('[data-open-modal]').forEach(item => {
                item.addEventListener('click', event => {
                    event.preventDefault();

                    openModal(findModal(event.currentTarget.dataset.openModal));
                });
            });

            document.querySelectorAll('[data-modal]').forEach(modal => {
                modal.addEventListener('click', event => {
                    if (!event.target.hasAttribute('data-close-modal')) return;

                    modal.classList.remove('show');
                    mask.classList.remove('show');
                    setTimeout(function() {
                        modal.style.display = 'none';
                        mask.style.display = 'none';
                    }, 200);
                });
            });

            document.querySelectorAll('[data-dismiss]').forEach(item => {
                item.addEventListener('click', event => event.currentTarget.parentElement.style.display = 'none');
            });

            document.addEventListener('DOMContentLoaded', event => {
                const hash = window.location.hash.substr(1);
                if (hash.startsWith('modal=')) {
                    openModal(findModal(hash.replace('modal=', '')));
                }

                feather.replace();

                const input = document.querySelector('input[name=color]');

                if (!input) return;

                const pickr = Pickr.create({
                    el: '.pickr',
                    theme: 'classic',
                    default: input.value || null,

                    swatches: [
                        '{{ config('forum.web.default_category_color') }}',
                        '#f44336',
                        '#e91e63',
                        '#9c27b0',
                        '#673ab7',
                        '#3f51b5',
                        '#2196f3',
                        '#03a9f4',
                        '#00bcd4',
                        '#009688',
                        '#4caf50',
                        '#8bc34a',
                        '#cddc39',
                        '#ffeb3b',
                        '#ffc107'
                    ],

                    components: {
                        preview: true,
                        hue: true,
                        interaction: {
                            input: true,
                            save: true
                        }
                    },

                    strings: {
                        save: 'Apply'
                    }
                });

                pickr
                    .on('save', instance => pickr.hide())
                    .on('clear', instance => {
                        input.value = '';
                        input.dispatchEvent(new Event('change'));
                    })
                    .on('cancel', instance => {
                        const selectedColor = instance
                            .getSelectedColor()
                            .toHEXA()
                            .toString();

                        input.value = selectedColor;
                        input.dispatchEvent(new Event('change'));
                    })
                    .on('change', (color, instance) => {
                        const selectedColor = color
                            .toHEXA()
                            .toString();

                        input.value = selectedColor;
                        input.dispatchEvent(new Event('change'));
                    });
            });
        </script>
        @yield('footer')
    </section>
    @include('layouts.footer')
</body>

</html>
