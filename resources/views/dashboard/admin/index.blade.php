halaman admin
{{ Auth::user()->name }}
<form method="POST" name="logout" action="{{ route('logout') }}">
    @csrf
    <button class="dropdown-item" onclick="logout()"> <i
            class="bx bx-power-off me-2"></i><span class="align-middle">Log
            Out</span></button>

    <script>
        function logout() => {
            document.logout.submit();
        }
    </script>
</form>
