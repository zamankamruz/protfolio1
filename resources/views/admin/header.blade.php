
<header class="dashboard-header">
    <div class="logo">
        <img src="your-logo-url.png" alt="Logo" width="50"> <!-- Replace with your logo URL -->
    </div>

    <div class="header-left">
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
<a href="#" class="logout-btn" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>


    </div>
</header>