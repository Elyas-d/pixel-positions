<div {{ $attributes->merge(['class' => 'flex flex-row bg-white/10 rounded-lg p-3 gap-x-3 border border-trasparent hover:border-blue-700 group1']) }}>
    <div>
        <x-company-logo :width="90"></x-company-logo>
    </div>
    <div class="flex-1 flex flex-col">
        <a class="text-sm text-gray-400">laracasts</a>

        <h3 class="mt-auto">Full Stack Laravel Developer</h3>
        <p class="text-sm text-gray-400 mt-auto">Full Time - from $60,000</p>
    </div>
    <div>
        <x-tag>Tag</x-tag>
        <x-tag>Tag</x-tag>
        <x-tag>Tag</x-tag>
    </div>
</div>
