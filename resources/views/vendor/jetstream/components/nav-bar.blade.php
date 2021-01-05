<div>
    <nav x-data="{ open: false }" @keydown.window.escape="open = false" class="bg-gray-600" >
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
          <div class="flex items-center justify-between h-16">
            <div class="flex items-center">
              <div class="flex-shrink-0">
                <svg class="w-8 h-8" viewBox="0 0 512 512" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0)">
                    <path d="M213.765 308.934V344.535L102.4 289.682V259.241L213.765 204.393V240.244L136.167 274.217L213.765 308.934ZM282.624 203.636L251.623 348.684C250.829 352.491 249.926 356.267 248.914 360.006C248.141 362.775 246.958 364.946 245.376 366.476C243.789 368.035 241.48 368.803 238.454 368.803C230.928 368.803 227.159 365.103 227.159 357.737C227.159 355.805 227.902 350.988 229.376 343.273L260.265 198.226C261.888 190.511 263.435 185.228 264.909 182.377C266.389 179.526 269.266 178.1 273.552 178.1C277.243 178.1 280.059 179.107 282.015 181.12C283.971 183.133 284.949 185.903 284.949 189.423C284.949 192.023 284.171 196.759 282.624 203.636ZM409.6 289.682L298.235 344.786V309.184L376.059 274.467L298.235 240.244V204.893L409.6 259.491V289.682Z" fill="white" />
                    <path d="M481.28 0H30.72C22.5725 0 14.7588 3.67791 8.99768 10.2246C3.23656 16.7714 0 25.6506 0 34.9091L0 477.091C0 486.349 3.23656 495.229 8.99768 501.775C14.7588 508.322 22.5725 512 30.72 512H481.28C489.427 512 497.241 508.322 503.002 501.775C508.763 495.229 512 486.349 512 477.091V34.9091C512 25.6506 508.763 16.7714 503.002 10.2246C497.241 3.67791 489.427 0 481.28 0ZM404.48 23.2727C415.77 23.2727 424.96 33.7105 424.96 46.5455C424.96 59.3804 415.77 69.8182 404.48 69.8182C393.19 69.8182 384 59.3804 384 46.5455C384 33.7105 393.19 23.2727 404.48 23.2727ZM348.16 23.2727C359.45 23.2727 368.64 33.7105 368.64 46.5455C368.64 59.3804 359.45 69.8182 348.16 69.8182C336.87 69.8182 327.68 59.3804 327.68 46.5455C327.68 33.7105 336.87 23.2727 348.16 23.2727ZM481.28 477.091H30.72V93.0909H481.28V477.091ZM460.8 69.8182C449.51 69.8182 440.32 59.3804 440.32 46.5455C440.32 33.7105 449.51 23.2727 460.8 23.2727C472.09 23.2727 481.28 33.7105 481.28 46.5455C481.28 59.3804 472.09 69.8182 460.8 69.8182Z" fill="green" />
                  </g>
                  <defs>
                    <clipPath id="clip0">
                      <rect width="512" height="512" fill="white" />
                    </clipPath>
                  </defs>
                </svg>
              </div>
              <div class="hidden md:block">
                <div class="flex items-baseline ml-10">
                    
                    @livewire('menu')
                  
                </div>
              </div>
            </div>
            <div class="hidden md:block">
              <div class="flex items-center ml-2 md:ml-3">            
                @livewire('profil-menu')
              </div>
            </div>
            <div class="flex -mr-2 md:hidden">
              <button @click="open = !open" class="inline-flex items-center justify-center p-2 text-gray-400 rounded-md hover:text-white hover:bg-gray-700 focus:outline-none focus:bg-gray-700 focus:text-white" x-bind:aria-label="open ? 'Close main menu' : 'Main menu'" x-bind:aria-expanded="open">
                <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                  <path x-bind:class="{'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                  <path x-bind:class="{'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
          </div>
        </div>
    
    <!-- version mobile-->
    
    
        <div x-bind:class="{'block': open, 'hidden': !open}" class="hidden md:hidden">
            <div class="px-2 pt-2 pb-3 sm:px-3">
                @livewire('menu')
            </div>
            <div class="pt-2 pb-3 border-t border-gray-700">
                @livewire('profil-menu')
            </div>
        </div>
      </nav>
      
    </div>