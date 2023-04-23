@extends('layouts.main')

@section('header_nav')

  <li class="nav-item dropdown pe-3">
    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
      <span class="d-none d-md-block dropdown-toggle ps-2">@yield('username')</span>
    </a><!-- End Profile Iamge Icon -->
    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
      <li class="dropdown-header">
        <h6>@yield('username')</h6>
        <span>@yield('usersubname')</span>
      </li>
      <li>
        <hr class="dropdown-divider">
      </li>
      <li>
        <hr class="dropdown-divider">
      </li>
      <li>
        <a class="dropdown-item d-flex align-items-center" href="{{route('SignOut')}}">
          <i class="bi bi-box-arrow-right"></i>
          <span>Выйти</span>
        </a>
      </li>
    </ul><!-- End Profile Dropdown Items -->
  </li><!-- End Profile Nav -->

@endsection

@section('sidebar')

<li class="nav-item">
  <a class="nav-link collapsed" href="/earn">
    <i class="bi bi-chat-left"></i>
    <span>Pul ishlamoqchiman</span>
  </a>
</li>

<li class="nav-item">
  <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
    <i class="bi bi-menu-button-wide"></i><span>Product</span><i class="bi bi-chevron-down ms-auto"></i>
  </a>
  <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
    @php
      use ThreadBeanPHP\C as C;

      $categoryes = C::findAll('category_mess');
    @endphp

    @foreach ($categoryes as $val)
    <li>
      <a href="/category?id={{$val -> id}}">
        <i class="bi bi-circle"></i><span>{{$val -> title}}</span>
      </a>
    </li>
    @endforeach
  </ul>
</li>

@endsection