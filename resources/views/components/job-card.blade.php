<div
    {{ $attributes->merge(['class' => 'flex flex-col bg-white/5 p-3 rounded-lg h-full border border-trasparent hover:border-blue-700 group']) }}>

    <div class="self-start text-sm text-gray-400">laracasts</div>
    <div class="py-8 font-bold">
        <h2 class="group-hover:text-blue-600">video editor</h2>
        <p>lskdjfksjdlkj</p>
    </div>
    <div class="flex justify-between items-center mt-auto">
        <span>
            <x-tag>tag</x-tag>
            <x-tag>tag</x-tag>
            <x-tag>tag</x-tag>
        </span>
        <x-company-logo :width="42"></x-company-logo>
    </div>
</div>
