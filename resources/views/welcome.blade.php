<x-layout>
    <div class="space-y-10">
        <section class="w-full mt-10">
            <x-s-heading>Featured Jobs</x-s-heading>
            <div class="grid lg:grid-cols-3 gap-8 w-full mt-6">
                <x-job-card></x-job-card>
                <x-job-card></x-job-card>
                <x-job-card></x-job-card>
            </div>
        </section>
        <section class="flex flex-col">
            <x-s-heading>Tags</x-s-heading>
            <div class="justify-center mt-6 space-x-1">
                <x-tag class="px-4 py-1">Tag</x-tag>
                <x-tag class="px-4 py-1">Tag</x-tag>
                <x-tag class="px-4 py-1">Tag</x-tag>
                <x-tag class="px-4 py-1">Tag</x-tag>
                <x-tag class="px-4 py-1">Tag</x-tag>
                <x-tag class="px-4 py-1">Tag</x-tag>
                <x-tag class="px-4 py-1">Tag</x-tag>
                <x-tag class="px-4 py-1">Tag</x-tag>
                <x-tag class="px-4 py-1">Tag</x-tag>
            </div>
        </section>
        <section class="flex flex-col space-y-6">
            <x-s-heading>Recent-Jobs</x-s-heading>
            <div class="space-y-6">
                <x-job-wcard></x-job-wcard>
                <x-job-wcard></x-job-wcard>
                <x-job-wcard></x-job-wcard>
            </div>
        </section>
    </div>
</x-layout>
