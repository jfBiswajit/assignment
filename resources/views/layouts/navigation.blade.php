<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{ route('dashboard') }}">
    <img style="height: 50px;" src="https://selise.ch/wp-content/uploads/2020/11/SELISE-DIgital-Platforms-.png" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('product.index') }}">Proucts</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('card.index') }}">Card</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('order.index') }}">Orders</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}">Logout</a>
      </li>
    </ul>
  </div>
</nav>
