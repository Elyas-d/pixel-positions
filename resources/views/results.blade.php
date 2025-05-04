<x-layout>
    <x-page-heading class="mt-10">Results</x-page-heading>

    <div class="space-y-6 py-5">
        @foreach ($jobs as $job)
            <x-job-wcard :$job/>
        @endforeach
    </div>
</x-layout>