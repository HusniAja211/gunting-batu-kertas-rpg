<?php 
include 'layout/header.php';
include 'layout/nav.php';
?>   

<div class="absolute inset-0 bg-black/50"></div>

<main class="flex-grow flex items-center justify-center relative">
    <section class="absolute inset-0 flex">
        <article class="w-1/2 h-full flex justify-center items-center bg-gradient-to-r from-green-900/30 to-transparent [clip-path:polygon(0_0,100%_0,80%_100%,0%_100%)]">
            <img id="pilihanPengguna" src="asset/batu.png" alt="Pilihan Pengguna" class="w-40 h-40 rotate-90">
        </article>
        <article class="w-1/2 h-full flex justify-center items-center bg-gradient-to-l from-red-900/30 to-transparent [clip-path:polygon(20%_0,100%_0,100%_100%,0_100%)]">
            <img id="pilihanBot" src="asset/batu.png" alt="Pilihan Bot" class="w-40 h-40 -rotate-90">
        </article>
    </section>
    <div class="relative text-white text-center text-4xl font-bold z-10">
        <p>VS</p>
    </div>
</main>

<section class="relative z-10 flex flex-col items-center gap-4 p-4">
    <div class="flex gap-4">
        <p id="nyawaPengguna" class="text-white px-4 py-2 rounded-lg bg-green-700">Nyawa: 3</p>
        <p id="skorPengguna" class="text-white px-4 py-2 rounded-lg bg-green-700">Skor Pengguna: 0</p>
        <p id="skorBot" class="text-white px-4 py-2 rounded-lg bg-red-700">Skor Bot: 0</p>
        <p id="levelBot" class="text-white px-4 py-2 rounded-lg bg-red-700">Level Bot: 1</p>
    </div>
    <div class="flex gap-4">
        <button onclick="main('gunting')" class="bg-gray-800 text-white px-4 py-2 rounded-lg hover:bg-gray-700">✂️ Gunting</button>
        <button onclick="main('batu')" class="bg-gray-800 text-white px-4 py-2 rounded-lg hover:bg-gray-700">🪨 Batu</button>
        <button onclick="main('kertas')" class="bg-gray-800 text-white px-4 py-2 rounded-lg hover:bg-gray-700">📄 Kertas</button>
    </div>
</section>

<?php include 'layout/footer.php' ?>
