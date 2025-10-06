<x-layout>
    <x-page-heading>Post a Job</x-page-heading>

    <x-forms.form method="POST" action="/jobs">
        <x-forms.input name="title" label="Job Title" placeholder="Software Engineer" />
        <x-forms.input name="salary" label="Salary" placeholder="100000" />
        <x-forms.input name="location" label="Location" placeholder="Philippines" />

        <x-forms.select name="schedule" label="Schedule">
            <option value="full-time" class="text-black">Full Time</option>
            <option value="part-time" class="text-black">Part Time</option>
            <option value="contract" class="text-black">Contract</option>
        </x-forms.select>

        <x-forms.input name="url" label="URL" placeholder="https://your-company-website.com" />


        <x-forms.textarea name="description" label="Job Description" placeholder="Describe the job..." />

        <x-forms.checkbox :label="false" name="featured" checkLabel="Feature this job" />

        <x-forms.divider />
        <x-forms.input name="tags" label="Tags (comma separated)" placeholder="Laravel, Backend, Postgres" />

        <x-forms.button>Publish</x-forms.button>
    </x-forms.form>
</x-layout>