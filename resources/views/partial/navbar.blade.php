<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ ($judul === 'home | page') ? 'active' : '' }} " href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($judul === 'about | page') ? 'active' : '' }} " href="/about">about</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($judul === 'blog | page') ? 'active' : '' }} " href="/posts">blog</a>

        </li>
      </ul>
    </div>
  </div>
</nav>