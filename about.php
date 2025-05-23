<?php 
include 'layout/header.php'; 
include 'layout/nav.php'; 
?>

<main class="flex-grow p-8 max-w-4xl mx-auto">
    <!-- Tentang Game -->
    <section class="mb-16 bg-gradient-to-br from-purple-900/50 to-blue-900/50 rounded-xl p-8 shadow-lg backdrop-blur-sm">
        <h1 class="text-4xl font-bold text-center mb-6 text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-purple-400">
            Tentang Game Ini
        </h1>
        <div class="text-lg text-gray-200 leading-relaxed space-y-4">
            <p>
                "Gunting Batu Kertas RPG" adalah permainan klasik yang memberikan pengalaman bermain seru antara pemain dan bot dengan sentuhan RPG modern.
            </p>
            
            <div class="bg-gray-800/60 p-4 rounded-lg border-l-4 border-cyan-400">
                <h3 class="font-semibold text-cyan-300 mb-2">Cara Bermain:</h3>
                <ul class="list-disc pl-5 space-y-2">
                    <li>Pemain memilih antara <span class="text-amber-300">batu</span>, <span class="text-emerald-300">kertas</span>, atau <span class="text-red-300">gunting</span></li>
                    <li>Bot akan memilih secara acak atau berdasarkan probabilitas</li>
                    <li>Setiap pertandingan memiliki aturan klasik:</li>
                </ul>
                <div class="grid grid-cols-3 gap-4 mt-4 text-center">
                    <div class="bg-gray-700/50 p-3 rounded-lg">
                        <span class="block text-amber-300 font-bold">Batu</span>
                        <span class="text-sm">mengalahkan</span>
                        <span class="block text-red-300 font-bold">Gunting</span>
                    </div>
                    <div class="bg-gray-700/50 p-3 rounded-lg">
                        <span class="block text-red-300 font-bold">Gunting</span>
                        <span class="text-sm">mengalahkan</span>
                        <span class="block text-emerald-300 font-bold">Kertas</span>
                    </div>
                    <div class="bg-gray-700/50 p-3 rounded-lg">
                        <span class="block text-emerald-300 font-bold">Kertas</span>
                        <span class="text-sm">mengalahkan</span>
                        <span class="block text-amber-300 font-bold">Batu</span>
                    </div>
                </div>
            </div>
            
            <p>
                Pemain berusaha mengalahkan bot dengan strategi tepat sambil mengumpulkan skor dan mempertahankan nyawa. 
                Setiap level bot menjadi semakin menantang, dengan tujuan akhir mencapai level tertinggi!
            </p>
        </div>
    </section>

    <!-- Tentang Developer -->
    <section class="bg-gradient-to-br from-amber-900/50 to-rose-900/50 rounded-xl p-8 shadow-lg backdrop-blur-sm">
        <h1 class="text-4xl font-bold text-center mb-6 text-transparent bg-clip-text bg-gradient-to-r from-amber-300 to-rose-400">
            Tentang Developer
        </h1>
        
        <div class="flex flex-col md:flex-row gap-8 items-center">
            <!-- Gambar Developer -->
            <div class="flex-shrink-0 relative w-48 h-48">
                <img src="../../../../public/img/developer/husni_mubarak.jpg" 
                     alt="Husni Mubarak"
                     class="absolute w-full h-full object-cover rounded-full border-4 border-amber-400/50 shadow-lg hover:border-amber-300 transition-all duration-300">
            </div>
            
            <!-- Teks dan Kontak -->
            <div class="text-lg text-gray-200 leading-relaxed space-y-4">
                <p>
                    Game ini dikembangkan oleh <span class="font-bold text-amber-300">Husni Mubarak</span>, seorang pengembang perangkat lunak dengan passion di bidang pengembangan aplikasi web interaktif.
                </p>
                
                <p>
                    Dibangun dengan teknologi modern seperti <span class="bg-gray-800 px-2 py-1 rounded text-cyan-300">HTML 5</span>, 
                    <span class="bg-gray-800 px-2 py-1 rounded text-blue-300">TailwindCSS</span>, dan 
                    <span class="bg-gray-800 px-2 py-1 rounded text-yellow-300">JavaScript</span>, 
                    game ini menawarkan pengalaman bermain yang responsif dan imersif.
                </p>
                
                <!-- Kontak Developer -->
                <div class="mt-6 pt-4 border-t border-amber-400/30">
                    <h3 class="text-xl font-semibold text-amber-300 mb-3">Hubungi Developer:</h3>
                    <div class="flex flex-wrap gap-3">
                        <a href="https://www.instagram.com/husniaja211/" 
                        class="flex items-center gap-2 bg-gradient-to-r from-purple-600 via-pink-600 to-orange-500 hover:from-purple-500 hover:via-pink-500 hover:to-orange-400 px-4 py-2 rounded-lg transition-colors text-white">
                            <i class="fab fa-instagram text-xl"></i>
                            Instagram
                        </a>
                        <a href="https://github.com/HusniAja211" 
                           class="flex items-center gap-2 bg-gray-800 hover:bg-gray-700 px-4 py-2 rounded-lg transition-colors">
                            <i class="fab fa-github text-xl"></i>
                            GitHub
                        </a>
                        <a href="https://linkedin.com/in/husnimubarak1" 
                           class="flex items-center gap-2 bg-blue-600 hover:bg-blue-500 px-4 py-2 rounded-lg transition-colors">
                            <i class="fab fa-linkedin text-xl"></i>
                            LinkedIn
                        </a>
                        <p 
                           class="flex items-center gap-2 bg-rose-600 hover:bg-rose-500 px-4 py-2 rounded-lg transition-colors">
                            <i class="fas fa-envelope text-xl"></i>
                            husnimubarakportofolio@gmail.com
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'layout/footer.php'; ?>