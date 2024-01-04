<x-app-layout>
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 flex flex-wrap gap-6 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
            <a href="{{route('artikel.index')}}" class="p-12 w-[45%] flex flex-col items-center rounded-xl bg-white">
                <h1 class="text-6xl">{{$artikelCount ? $artikelCount : 0}}</h1>
                <p>Total Artikel</p>
            </a>
            <a href="{{route('galeri.index')}}" class="p-12 w-[45%] flex flex-col items-center rounded-xl bg-white">
                <h1 class="text-6xl">{{$galeriCount ? $galeriCount : 0}}</h1>
                <p>Total Galeri</p>
            </a>
            <a href="{{route('kontak.index')}}" class="p-12 w-[45%] flex flex-col items-center rounded-xl bg-white">
                <h1 class="text-6xl">{{$pesanCount ? $pesanCount : 0}}</h1>
                <p>Total Pojok Curhat</p>
            </a>
            <a href="{{route('calonanggota.index')}}" class="p-12 w-[45%] flex flex-col items-center rounded-xl bg-white">
                <h1 class="text-6xl">{{$calonanggotaCount ? $calonanggotaCount : 0}}</h1>
                <p>Total Calon Anggota</p>
            </a>
        </div>
    </div>
</x-app-layout>