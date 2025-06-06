<x-layout>
    <div class="space-y-10">
        <section class="text-center">
            <h1 class="font-bold text-4xl mt-10">Let's Find You A Great Job</h1>
            <x-forms.form action="/search" class="mt-6">
                <x-forms.input :label="false" name="q" placeholder="Web Developer..." />
            </x-forms.form>
        </section>
        <section class="w-full mt-10">
            <x-s-heading>Featured Jobs</x-s-heading>
            <div class="grid lg:grid-cols-3 gap-8 w-full mt-6">
                @foreach ($featuredJobs as $job)
                    <x-job-card :$job></x-job-card>
                @endforeach
            </div>
        </section>
        <section class="flex flex-col">
            <x-s-heading>Tags</x-s-heading>
            <div class="justify-start mt-6 flex flex-wrap gap-2 w-full">
                @foreach ($tags as $tag)
                    <x-tag size="base" :$tag />
                @endforeach
            </div>
        </section>
        <section class="flex flex-col space-y-6">
            <x-s-heading>Recent-Jobs</x-s-heading>
            <div class="space-y-6">
                @foreach ($jobs as $job)
                    {{-- the:$job is short-hand for :job="$job" because they have the same name --}}
                    <x-job-wcard :$job></x-job-wcard>
                @endforeach
            </div>
        </section>
    </div>
</x-layout>
