<footer class="d-footer">
    <div class="row align-items-center justify-content-between">
      <div class="col-auto">
        <p class="mb-0">© {{ date('Y') . ' - ' . $home->site_name }}. All Rights Reserved.</p>
      </div>
      <div class="col-auto">
        <p class="mb-0">Made by <span class="text-primary-600"> Unique Digitals</span></p>
  
        @auth
        <p>{{ Auth::user()->name }}</p>
        <form action="{{ route('logout') }}" method="post">
            @csrf
                <button type="submit" class="dropdown-item text-black px-0 py-8 hover-bg-transparent hover-text-danger d-flex align-items-center gap-3"> <iconify-icon icon="lucide:power" class="icon text-xl"></iconify-icon>Log Out</button>
        </form>
        @endauth
      </div>
    </div>
  </footer>