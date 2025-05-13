@props(['job'])
<x-panel class="flex flex-col">
    <div class="self-start text-sm text-gray-400">{{ $job->employer->name }}</div>
    <div class="py-8 font-bold justify-center text-center">
        <h2 class="group-hover:text-blue-600 text-lg font-bold transition-colors duration-300"><a href="{{ $job->url }}" target="_blank">{{ $job->title }}</a></h2>
        <p class="text-sm mt-4 font-medium">{{ $job->salary }}</p>
    </div>
    <div class="flex justify-between items-center mt-auto">
        <span class="flex flex-wrap space-y-1">
            @foreach ($job->tags as $tag)
                <x-tag size="small" :$tag />
            @endforeach
        </span>
        <x-company-logo :employer="$job->employer"></x-company-logo>
    </div>
</x-panel>
