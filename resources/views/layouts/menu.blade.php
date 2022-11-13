<li class="nav-item">
    <a href="{{ route('profiles.index') }}"
       class="nav-link {{ Request::is('profiles*') ? 'active' : '' }}">
        <p>Profiles</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('competances.index') }}"
       class="nav-link {{ Request::is('competances*') ? 'active' : '' }}">
        <p>Competances</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('projects.index') }}"
       class="nav-link {{ Request::is('projects*') ? 'active' : '' }}">
        <p>Projects</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('categories.index') }}"
       class="nav-link {{ Request::is('categories*') ? 'active' : '' }}">
        <p>Categories</p>
    </a>
</li>





<li class="nav-item">
    <a href="{{ route('universities.index') }}"
       class="nav-link {{ Request::is('universities*') ? 'active' : '' }}">
        <p>Universities</p>
    </a>
</li>


