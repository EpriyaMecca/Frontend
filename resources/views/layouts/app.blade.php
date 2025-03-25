<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Belajar_UKK</title>

  {{-- SweetAlert CSS --}}
  <link rel="stylesheet" href="{{ asset('assets/sweetalert2/sweetalert2.min.css') }}">

  {{-- Font Awesome --}}
  <link rel="stylesheet" href="{{ asset('assets/fontawesome/fontawesome-free-6.7.2-web/css/all.min.css') }}">

  {{-- Boostsrap --}}
  <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css ') }}">

  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>

<body>
  <div class="custom">
    <div class="overlay"></div>
    <div class="sidebar">
      <div class="sidebar-header">
        <div class="logo">
          <span class="menu-text">TodoEasy</span>
        </div>
      </div>
      <a href="/" class="menu-item {{ Request::is('/') ? 'active' : '' }}">
        <i class="fa-solid fa-home"></i>
        <span class="menu-text">Dashboard</span>
      </a>
      <a href="/task" class="menu-item {{ request()->routeIs('tasks.*') ? 'active' : '' }}">
        <i class="fa-solid fa-clipboard-list"></i>
        <span class="menu-text">Tasks</span>
      </a>
      <a href="/completed" class="menu-item {{ request()->routeIs('completed') ? 'active' : '' }}">
        <i class="fa-solid fa-calendar-check"></i>
        <span class="menu-text">Completed Task</span>
      </a>
      <div class="footer">
        <p style="font-size: 12px">Made with ❤️ by Epriya Mecca</p>
      </div>
    </div>

    <main class="content">
      <div class="main">
        @yield('content')
      </div>

    </main>
  </div>
</body>

{{-- Bootstrap JS --}}
<link rel="stylesheet" href="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js') }}">

{{-- SweetAlert JS --}}
<script src="{{ asset('assets/sweetalert2/sweetalert2.all.min.js') }}"></script>


<script>
  document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.delete-task').forEach(button => {
      button.addEventListener('click', function() {
        let taskId = this.getAttribute('data-id');
        Swal.fire({
          title: "Apakah kamu yakin?",
          text: "Data yang dihapus tidak bisa dikembalikan!",
          icon: "warning",
          showCancelButton: true,
          confirmButtonColor: "#3085d6",
          cancelButtonColor: "#d33",
          confirmButtonText: "Ya, hapus!",
          cancelButtonText: "Batal"
        }).then((result) => {
          if (result.isConfirmed) {
            document.getElementById(`delete-form-${taskId}`).submit();
          }
        });
      });
    });

    @if (session('success'))
      Swal.fire({
        title: 'Sukses!',
        text: '{{ session('success') }}',
        icon: 'success',
        confirmButtonText: 'OK'
      });
    @endif
  });
</script>



<script>
  const toggleBtn = document.querySelector(".toggle-btn");
  const mobileToggle = document.querySelector(".mobile-toggle");
  const sidebar = document.querySelector(".sidebar");
  const container = document.querySelector(".custom");
  const overlay = document.querySelector(".overlay");

  toggleBtn.addEventListener("click", () => {
    container.classList.toggle("collapsed");
  });

  mobileToggle.addEventListener("click", () => {
    sidebar.classList.add("active");
    overlay.style.display = "block";
  });

  overlay.addEventListener("click", () => {
    sidebar.classList.remove("active");
    overlay.style.display = "none";
  });

  const menuItems = document.querySelectorAll(".menu-item");
  menuItems.forEach((item) => {
    item.addEventListener("click", () => {
      menuItems.forEach((i) => i.classList.remove("active"));
      item.classList.add("active");

      if (window.innerWidth < 1024) {
        sidebar.classList.remove("active");
        overlay.style.display = "none";
      }
    });
  });

  window.addEventListener("resize", () => {
    if (window.innerWidth >= 1024) {
      overlay.style.display = "none";
      sidebar.classList.remove("active");
    }
  });

  function toggleDropdown() {
    const dropdownMenu = document.getElementById("dropdownMenu");
    dropdownMenu.style.display = dropdownMenu.style.display === "block" ? "none" : "block";
  }

  window.onclick = function(event) {
    if (!event.target.matches(".profile-pic")) {
      const dropdowns = document.getElementsByClassName("dropdown-menu");
      for (let i = 0; i < dropdowns.length; i++) {
        const openDropdown = dropdowns[i];
        if (openDropdown.style.display === "block") {
          openDropdown.style.display = "none";
        }
      }
    }
  };
</script>

</html>
