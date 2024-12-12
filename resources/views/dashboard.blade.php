<x-app-layout>
    <x-slot name="header">
        

        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard Admin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-xl font-semibold text-gray-800">Jumlah Buku</h3>
                    <p class="mt-4 text-gray-600">1 Buku</p>
                </div>

                <!-- Card 2 -->
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-xl font-semibold text-gray-800">Jumlah Anggota</h3>
                    <p class="mt-4 text-gray-600">1 Anggota</p>
                </div>

                <!-- Card 3 -->
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-xl font-semibold text-gray-800">Jumlah Peminjaman</h3>
                    <p class="mt-4 text-gray-600">0 Buku</p>
                </div>
            </div>
        </main>
    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
