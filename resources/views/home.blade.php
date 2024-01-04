<x-landing-page-layout :artikel=$artikel :galeri=$galeri>
    <x-landing-page.sections.hero />
    <x-landing-page.sections.about />
    <x-landing-page.sections.article :artikel=$artikel />
    <x-landing-page.sections.gallery :galeri=$galeri />
    <x-landing-page.sections.contact />
</x-landing-page-layout>
