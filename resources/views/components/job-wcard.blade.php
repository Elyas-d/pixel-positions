@props(['job'])
<x-panel class="flex flex-row gap-x-3">
    <div>
        <x-company-logo :employer="$job->employer"></x-company-logo>
    </div>
    <div class="flex-1 flex flex-col">
        <a class="text-sm text-gray-400">{{ $job->employer->name }}</a>

        <h3 class="mt-auto group-hover:text-blue-600 transition-colors duration-300"><a href="{{ $job->url }}" target="_blank">{{ $job->title }}</a></h3>
        <p class="text-sm text-gray-400 mt-auto">{{ $job->salary }}</p>
    </div>
    <div>
        @foreach ($job->tags as $tag)
            <x-tag size="small" :$tag />
        @endforeach
    </div>
</x-panel>
