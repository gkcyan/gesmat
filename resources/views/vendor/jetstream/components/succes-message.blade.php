@if (session()->has('message'))
<div class="px-4 py-3 my-3 text-teal-900 bg-teal-100 border-t-4 border-teal-500 rounded-b shadow-md" role="alert">
    <div class="flex">
        <div>
            <p class="text-sm">{{ session('message') }}</p>
        </div>
    </div>
</div>                        
@endif