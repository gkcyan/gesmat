<span class="relative cursor-pointer group">
    <span class="items-center inline-block">{{ Str::limit($slot, $length) }}</span>
    <span class="absolute z-10 hidden p-2 mt-2 text-xs text-left text-gray-700 whitespace-pre-wrap bg-gray-100 border border-gray-300 rounded-lg shadow-xl group-hover:block -ml-28 w-96">{{ $slot }}</span>
</span>