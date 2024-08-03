<nav class="bg-gray-900 py-4">
  <div class="container mx-auto px-4 flex items-center justify-between">
    <div class="text-white font-bold text-2xl flex items-center">
      <a href="index.php">
       <img class="h-14 w-14 flex" src="logo.png" alt="Logo">
      </a>
    </div>
    
    <div class="hidden md:flex items-center space-x-2 uppercase">
      <a href="index.php" class="hover:text-gray-200 px-2 py-2 rounded text-white">Forside</a>
      <a target="_blank" href="https://docs.google.com/document/d/1puSJFBPzuNRizgKiI3ghyMV3JALUXnjr0nhGteamphI/edit?usp=sharing" class="hover:text-gray-200 px-2 py-2 rounded text-white">Regler</a>
      <a target="_blank" href="https://discord.gg/Zonix" class="hover:text-gray-200 px-2 py-2 rounded bg-opacity-80 text-white">Discord</a>
      
      <div class="relative" x-data="{ open: false }">
        <button @click="open = !open" class="hover:text-gray-200 px-2 py-2 rounded bg-opacity-80 uppercase text-white inline-flex items-center">
          Ansøg
        </button>
        <div x-show="open" @click.away="open = false" class="absolute z-50 mt-2 bg-white text-gray-700 text-white rounded shadow-md">
        <a href="whitelist.php" class="block px-4 py-2 text-sm leading-5 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 transition duration-150 ease-in-out">Whitelist</a>
          <a href="staff.php" class="block px-4 py-2 text-sm leading-5 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 transition duration-150 ease-in-out">Staff</a>
          <a href="unban.php" class="block px-4 py-2 text-sm leading-5 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 transition duration-150 ease-in-out">Unban</a>
          <a href="police.php" class="block px-4 py-2 text-sm leading-5 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 transition duration-150 ease-in-out">Politi</a>
          <a href="ems.php" class="block px-4 py-2 text-sm leading-5 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 transition duration-150 ease-in-out">EMS</a>
          <a href="gang.php" class="block px-4 py-2 text-sm leading-5 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 transition duration-150 ease-in-out">Bande</a>
           <a href="firma.php" class="block px-4 py-2 text-sm leading-5 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 transition duration-150 ease-in-out">Firma</a>
        </div>
      </div>
      
<div class="relative" x-data="{ open: false }">
        <button @click="open = !open" class="hover:text-gray-200 uppercase px-2 py-2 rounded bg-opacity-80 text-white inline-flex items-center">
          Besvar
        </button>
        <div x-show="open" @click.away="open = false" class="absolute z-50 mt-2 bg-white text-gray-700 rounded shadow-md">
          <a href="besvar_whitelist.php" class="block px-4 py-2 text-sm leading-5 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 transition duration-150 ease-in-out">Whitelist</a>
          <a href="besvar_staff.php" class="block px-4 py-2 text-sm leading-5 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 transition duration-150 ease-in-out">Staff</a>
          <a href="besvar_unban.php" class="block px-4 py-2 text-sm leading-5 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 transition duration-150 ease-in-out">Unban</a>
          <a href="besvar_police.php" class="block px-4 py-2 text-sm leading-5 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 transition duration-150 ease-in-out">Politi</a>
          <a href="besvar_ems.php" class="block px-4 py-2 text-sm leading-5 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 transition duration-150 ease-in-out">EMS</a>
          <a href="besvar_gang.php" class="block px-4 py-2 text-sm leading-5 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 transition duration-150 ease-in-out">Bande</a>
          <a href="besvar_firma.php" class="block px-4 py-2 text-sm leading-5 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 transition duration-150 ease-in-out">Firma</a>
        </div>
      </div>




      <?php
      if (isset($_SESSION['user_id'])) {
        echo '<a href="logout.php" class="px-2 py-2 text-red-500 hover:text-opacity-80 rounded focus:outline-none focus:shadow-outline-blue active:bg-red-500">Log ud</a>';
      } else {
        echo '<a href="login.php" class="px-2 py-2 hover:text-opacity-80 text-green-500 rounded focus:outline-none focus:shadow-outline-blue active:bg-red-500">Log ind</a>';
      }
      ?>

    </div>

    <div class="md:hidden">
      <button id="burger" class="text-white focus:outline-none">
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-6 h-6">
          <path d="M4 6h16M4 12h16m-7 6h7"></path>
        </svg>
      </button>
    </div>
  </div>

  <div id="mobileMenu" class="md:hidden">
    <div class="flex flex-col grid px-4 text-center items-center space-y-2">
      <a href="index.php" class="hover:text-black text-white">Forside</a>
      <a target="_blank" href="https://discord.gg/Zonix" class="hover:text-black text-white">Discord</a>
      
      <div class="relative" x-data="{ open: false }">
    <button @click="open = !open" class=" rounded bg-opacity-80 text-white inline-flex items-center">
        Ansøg
      
    </button>
    <div x-show="open" @click.away="open = false" class="absolute z-50 mt-2 bg-white text-gray-700 rounded shadow-md">
        <a href="whitelist.php" class="block px-4 py-2 text-sm leading-5 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 transition duration-150 ease-in-out">Whitelist</a>
        <a href="staff.php" class="block px-4 py-2 text-sm leading-5 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 transition duration-150 ease-in-out">Staff</a>
        <a href="unban.php" class="block px-4 py-2 text-sm leading-5 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 transition duration-150 ease-in-out">Unban</a>
        <a href="police.php" class="block px-4 py-2 text-sm leading-5 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 transition duration-150 ease-in-out">Politi</a>
        <a href="ems.php" class="block px-4 py-2 text-sm leading-5 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 transition duration-150 ease-in-out">EMS</a>
    <a href="gang.php" class="block px-4 py-2 text-sm leading-5 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 transition duration-150 ease-in-out">Bande</a>
    <a href="firma.php" class="block px-4 py-2 text-sm leading-5 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 transition duration-150 ease-in-out">Firma</a>
      </div>
</div>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('dropdown', () => ({
            open: false,
        }));
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.js" defer></script>


      <div class="relative" x-data="{ open: false }">
    <button @click="open = !open" class=" rounded bg-opacity-80 text-white inline-flex items-center">
        Besvar
    </button>
    <div x-show="open" @click.away="open = false" class="absolute z-50 mt-2 bg-white text-gray-700 rounded shadow-md">
        <a href="besvar_whitelist.php" class="block px-4 py-2 text-sm leading-5 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 transition duration-150 ease-in-out">Whitelist</a>
        <a href="besvar_staff.php" class="block px-4 py-2 text-sm leading-5 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 transition duration-150 ease-in-out">Staff</a>
        <a href="besvar_unban.php" class="block px-4 py-2 text-sm leading-5 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 transition duration-150 ease-in-out">Unban</a>
        <a href="besvar_police.php" class="block px-4 py-2 text-sm leading-5 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 transition duration-150 ease-in-out">Politi</a>
        <a href="besvar_ems.php" class="block px-4 py-2 text-sm leading-5 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 transition duration-150 ease-in-out">EMS</a>
    <a href="besvar_gang.php" class="block px-4 py-2 text-sm leading-5 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 transition duration-150 ease-in-out">Bande</a>
      <a href="besvar_firma.php" class="block px-4 py-2 text-sm leading-5 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 transition duration-150 ease-in-out">Firma</a>
  </div>
</div>

<script>

    document.addEventListener('alpine:init', () => {
        Alpine.data('dropdown', () => ({
            open: false,
        }));
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.js" defer></script>


      <?php
      if (isset($_SESSION['user_id'])) {
        echo '<a href="logout.php" class="hover:bg-opacity-80 text-white">Log ud</a>';
      } else {
        echo '<a href="login.php" class="hover:bg-opacity-80 text-white">Log ind</a>';
      }
      ?>

    </div>
  </div>
</nav>

<script>
  document.getElementById('burger').addEventListener('click', function() {
    document.getElementById('mobileMenu').classList.toggle('hidden');
  });
</script>
