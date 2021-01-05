<div class="flex items-center justify-center h-screen p-8">
    <div
      x-data="{ open: false }"
      class="relative"
    >
      <button
        x-on:click="open = true"
        class="flex items-center px-4 py-2 font-semibold text-gray-700 bg-white rounded focus:bg-gray-400 focus:text-gray-900 focus:outline-none focus:shadow-inner"
        type="button"
      >
         <span class="mr-1">Dropdown</span>
         <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"  style="margin-top:3px">
            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
         </svg>
      </button>
      <ul
        x-show="open"
        x-on:click.away="open = false"
        class="absolute py-2 mt-1 text-gray-700 bg-white rounded shadow-lg"
        style="min-width:15rem"
       >
        <li>
          <a href="#" class="block px-4 py-2 whitespace-no-wrap hover:bg-gray-200">
            Mont Blanc
          </a>
        </li>
        <li>
          <a href="#" class="block px-4 py-2 whitespace-no-wrap hover:bg-gray-200">
            Monte Rosa
          </a>
        </li>
        <li>
          <a href="#" class="block px-4 py-2 whitespace-no-wrap hover:bg-gray-200">
            Dom <span class="text-gray-400">(no good)</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
  
 