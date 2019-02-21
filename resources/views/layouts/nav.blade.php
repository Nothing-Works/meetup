<nav-bar inline-template>
    <nav class="navbar has-shadow">
        <div class="container">
            <div class="navbar-brand">
                <a class="navbar-item" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <a @click="toggleBurger" class="navbar-burger burger" :class="{ 'is-active': showBurger }">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
            </div>
            <div class="navbar-menu" :class="{ 'is-active': showBurger }">
                <div class="navbar-start">
                    <a href="/posts" class="navbar-item">
                        Posts
                    </a>
                </div>
                <div class="navbar-end">
                    @guest
                    <div class="navbar-item">
                        <div class="buttons">
                            <a class="button is-primary" href="{{ route('register') }}">
                                <strong>Sign up</strong>
                            </a>
                            <a class="button is-light" href="{{ route('login') }}">Log in</a>
                        </div>
                    </div>
                    @else
                    <div @click="toggleDropDown" class="navbar-item has-dropdown" :class="{'is-active':showDropDown}">
                        <a class="navbar-link">
                            {{ Auth::user()->name }}
                        </a>
                        <div class="navbar-dropdown">
                            <a class="navbar-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                Log out
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                    @endguest
                </div>
            </div>
        </div>
    </nav>
</nav-bar>
