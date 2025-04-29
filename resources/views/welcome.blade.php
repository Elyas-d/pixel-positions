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
            <div class="justify-start mt-6 flex flex-wrap gap-2 w-full">
                <x-tag size="base">API Tester</x-tag>
                <x-tag size="base">Web Developer</x-tag>
                <x-tag size="base">Front-end Developer</x-tag>
                <x-tag size="base">Back-end Developer</x-tag>
                <x-tag size="base">Full-stack Developer</x-tag>
                <x-tag size="base">System Engineer</x-tag>
                <x-tag size="base">SOC Analyst</x-tag>
                <x-tag size="base">Cloud Engineer</x-tag>
                <x-tag size="base">It Support Specialist</x-tag>
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
