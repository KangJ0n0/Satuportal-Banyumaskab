<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar with Rubik Font and Hover Effect</title>
  
  <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
  <style>
    a{
    
      font-size: 16px;
     
    }
    .nav-link::after {
      content: '';
      display: block;
      width: 0;
      height: 4px;
      background: #4287A0; /* Tailwind's blue-700 color */
      transition: width 0.3s;
    }

    .nav-link:hover {
      color: #4B97A9;
    }
    .nav-link:hover::after {
      width: 100%;
    }

    button{
    
      font-size: 16px;
    }
    }
  </style>
</head>
<body class="font-rubik">

<div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8 pt-6">
  <nav class="border-gray-200">
    <div class="container mx-auto flex flex-wrap items-center justify-between">
      <a href="#" class="flex">
        <img src="storage/logo.png" class="h-12" alt="Logo">
      </a>
      <button data-collapse-toggle="mobile-menu" type="button" class="md:hidden ml-3 text-gray-400 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-300 rounded-lg inline-flex items-center justify-center" aria-controls="mobile-menu-2" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
        </svg>
        <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
        </svg>
      </button>
      <div class="hidden md:block w-full md:w-auto" id="mobile-menu">
        <ul class="flex-col md:flex-row flex md:space-x-8 mt-4 md:mt-0 md:text-sm md:font-medium">
          <li>
            <a href="#" class="nav-link bg-blue-700 md:bg-transparent text-white block pl-3 pr-4 py-2 md:text-blue-700 md:p-0 rounded focus:outline-none" aria-current="page">Beranda</a>
          </li>
          <li>
            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="nav-link text-gray-700 hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 pl-3 pr-4 py-2 md:hover:text-blue-700 md:p-0 font-medium flex items-center justify-between w-full md:w-auto">Banyumas<svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg></button>
            <!-- Dropdown menu -->
            <div id="dropdownNavbar" class="hidden bg-white text-base z-10 list-none divide-y divide-gray-100 rounded shadow my-4 w-44">
              <ul class="py-1" aria-labelledby="dropdownLargeButton">
                <li>
                  <a href="#" class="nav-link text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Dashboard</a>
                </li>
                <li>
                  <a href="#" class="nav-link text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Settings</a>
                </li>
                <li>
                  <a href="#" class="nav-link text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Earnings</a>
                </li>
              </ul>
              <div class="py-1">
                <a href="#" class="nav-link text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Sign out</a>
              </div>
            </div>
          </li>
          <li>
            <a href="#" class="nav-link text-gray-700 hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:hover:text-blue-700 md:p-0">Berita</a>
          </li>
          <li>
            <a href="#" class="nav-link text-gray-700 hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:hover:text-blue-700 md:p-0">PPID</a>
          </li>
          <li>
            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="nav-link text-gray-700 hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 pl-3 pr-4 py-2 md:hover:text-blue-700 md:p-0 font-medium flex items-center justify-between w-full md:w-auto">Pemerintah Daerah<svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg></button>
            <!-- Dropdown menu -->
            <div id="dropdownNavbar" class="hidden bg-white text-base z-10 list-none divide-y divide-gray-100 rounded shadow my-4 w-44">
              <ul class="py-1" aria-labelledby="dropdownLargeButton">
                <li>
                  <a href="#" class="nav-link text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Dashboard</a>
                </li>
                <li>
                  <a href="#" class="nav-link text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Settings</a>
                </li>
                <li>
                  <a href="#" class="nav-link text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Earnings</a>
                </li>
              </ul>
              <div class="py-1">
                <a href="#" class="nav-link text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Sign out</a>
              </div>
            </div>
          </li>
          <li>
            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="nav-link text-gray-700 hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 pl-3 pr-4 py-2 md:hover:text-blue-700 md:p-0 font-medium flex items-center justify-between w-full md:w-auto">Menu Publik<svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg></button>
            <!-- Dropdown menu -->
            <div id="dropdownNavbar" class="hidden bg-white text-base z-10 list-none divide-y divide-gray-100 rounded shadow my-4 w-44">
              <ul class="py-1" aria-labelledby="dropdownLargeButton">
                <li>
                  <a href="#" class="nav-link text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Dashboard</a>
                </li>
                <li>
                  <a href="#" class="nav-link text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Settings</a>
                </li>
                <li>
                  <a href="#" class="nav-link text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Earnings</a>
                </li>
              </ul>
              <div class="py-1">
                <a href="#" class="nav-link text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Sign out</a>
              </div>
            </div>
          </li>
          <li>
            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="nav-link text-gray-700 hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 pl-3 pr-4 py-2 md:hover:text-blue-700 md:p-0 font-medium flex items-center justify-between w-full md:w-auto">Penting<svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg></button>
            <!-- Dropdown menu -->
            <div id="dropdownNavbar" class="hidden bg-white text-base z-10 list-none divide-y divide-gray-100 rounded shadow my-4 w-44">
              <ul class="py-1" aria-labelledby="dropdownLargeButton">
                <li>
                  <a href="#" class="nav-link text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Dashboard</a>
                </li>
                <li>
                  <a href="#" class="nav-link text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Settings</a>
                </li>
                <li>
                  <a href="#" class="nav-link text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Earnings</a>
                </li>
              </ul>
              <div class="py-1">
                <a href="#" class="nav-link text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Sign out</a>
              </div>
            </div>
          </li>
          <li>
            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="nav-link text-gray-700 hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 pl-3 pr-4 py-2 md:hover:text-blue-700 md:p-0 font-medium flex items-center justify-between w-full md:w-auto">LHKPN<svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg></button>
            <!-- Dropdown menu -->
            <div id="dropdownNavbar" class="hidden bg-white text-base z-10 list-none divide-y divide-gray-100 rounded shadow my-4 w-44">
              <ul class="py-1" aria-labelledby="dropdownLargeButton">
                <li>
                  <a href="#" class="nav-link text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Dashboard</a>
                </li>
                <li>
                  <a href="#" class="nav-link text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Settings</a>
                </li>
                <li>
                  <a href="#" class="nav-link text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Earnings</a>
                </li>
              </ul>
              <div class="py-1">
                <a href="#" class="nav-link text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Sign out</a>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>

<script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.bundle.js"></script>
</body>
</html>
