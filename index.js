// Inisialisasi variabel permainan
let skorPengguna = 0; // Menyimpan skor pengguna
let skorBot = 0; // Menyimpan skor bot
let nyawa = 3; // Jumlah nyawa pengguna
let botLevel = 1; // Level awal bot
const maxBotLevel = 5; // Level maksimum bot
const skorPerLevel = 2; // Skor yang dibutuhkan untuk naik level

// Objek berisi path gambar untuk setiap pilihan
const gambar = {
    batu: "asset/batu.png",
    kertas: "asset/kertas.png",
    gunting: "asset/gunting.png"
};

// Memperbarui tampilan awal permainan
updateTampilan();

/**
 * Fungsi utama yang dijalankan saat pengguna memilih batu, kertas, atau gunting.
 * @param {string} pilihanPengguna - Pilihan yang dipilih pengguna (batu, kertas, atau gunting)
 */
function main(pilihanPengguna) {
    if (nyawa <= 0) {
        alert("Game Over! Coba lagi.");
        return;
    }

    const pilihan = ['batu', 'kertas', 'gunting'];

    // Menghitung probabilitas bot untuk memilih counter pilihan pengguna berdasarkan level bot
    let probabilitasCounter = Math.min((botLevel - 1) * 0.2, 0.95);
    
    // Menentukan pilihan bot berdasarkan probabilitas
    let pilihanBot = (Math.random() < probabilitasCounter) 
        ? counterPilihan(pilihanPengguna) 
        : pilihan[Math.floor(Math.random() * pilihan.length)];

    // Mengatur gambar sesuai pilihan pengguna dan bot
    setGambar(pilihanPengguna, pilihanBot);

    // Menentukan hasil ronde
    let hasil = cekPemenang(pilihanPengguna, pilihanBot);
    alert(hasil);
    
    // Memperbarui tampilan dan mengecek apakah ada perubahan level atau nyawa
    updateTampilan();
    cekLevelAtauNyawa();
    resetGambar();
}

/**
 * Mengembalikan pilihan yang dapat mengalahkan pilihan pengguna.
 * @param {string} pilihan - Pilihan pengguna
 * @returns {string} - Pilihan yang mengalahkan pengguna
 */
function counterPilihan(pilihan) {
    const counter = { batu: 'kertas', kertas: 'gunting', gunting: 'batu' };
    return counter[pilihan];
}

/**
 * Menentukan pemenang ronde berdasarkan pilihan pengguna dan bot.
 * @param {string} pengguna - Pilihan pengguna
 * @param {string} bot - Pilihan bot
 * @returns {string} - Pesan hasil pertandingan
 */
function cekPemenang(pengguna, bot) {
    if (pengguna === bot) return "Hasil seri! Coba lagi.";

    if (
        (pengguna === 'batu' && bot === 'gunting') ||
        (pengguna === 'kertas' && bot === 'batu') ||
        (pengguna === 'gunting' && bot === 'kertas')
    ) {
        skorPengguna++; // Tambah skor pengguna
        return `Kamu menang ronde ini! 🎉\nSkor Pengguna: ${skorPengguna} | Skor Bot: ${skorBot}`;
    } else {
        skorBot++; // Tambah skor bot
        return `Bot menang ronde ini! 🤖\nSkor Pengguna: ${skorPengguna} | Skor Bot: ${skorBot}`;
    }
}

/**
 * Mengecek apakah pengguna naik level atau kehilangan nyawa berdasarkan skor.
 */
function cekLevelAtauNyawa() {
    if (skorPengguna >= skorPerLevel) {
        if (botLevel < maxBotLevel) {
            botLevel++;
            alert(`Level Up! 🚀\nSekarang kamu berada di Level ${botLevel}`);
        } else {
            alert("Selamat! 🎉 Kamu mengalahkan semua bot!");
            resetGame();
            return;
        }
        resetSkor();
    } else if (skorBot >= skorPerLevel) {
        nyawa--;
        alert(`Kamu kalah ronde ini! 😢\nSisa nyawa: ${nyawa}`);

        if (nyawa <= 0) {
            alert("Game Over! Kamu kalah.");
            resetGame();
        }

        resetSkor();
    }
}

/**
 * Mengubah gambar berdasarkan pilihan pengguna dan bot.
 * @param {string} pilihanPengguna - Pilihan pengguna
 * @param {string} pilihanBot - Pilihan bot
 */
function setGambar(pilihanPengguna, pilihanBot) {
    document.getElementById('pilihanPengguna').src = gambar[pilihanPengguna];
    document.getElementById('pilihanBot').src = gambar[pilihanBot];
}

/**
 * Mereset gambar pilihan kembali ke batu setelah jeda waktu.
 */
function resetGambar() {
    setTimeout(() => {
        document.getElementById('pilihanPengguna').src = gambar.batu;
        document.getElementById('pilihanBot').src = gambar.batu;
    }, 500);
}

/**
 * Mengatur ulang skor pengguna dan bot ke nol.
 */
function resetSkor() {
    skorPengguna = 0;
    skorBot = 0;
    updateTampilan();
}

/**
 * Mengatur ulang seluruh permainan ke kondisi awal.
 */
function resetGame() {
    nyawa = 3;
    botLevel = 1;
    resetSkor();
    resetGambar();
    updateTampilan();
}

/**
 * Memperbarui tampilan skor, nyawa, dan level bot di UI.
 */
function updateTampilan() {
    document.getElementById('skorPengguna').innerText = `Skor Pengguna: ${skorPengguna}`;
    document.getElementById('skorBot').innerText = `Skor Bot: ${skorBot}`;
    document.getElementById('nyawaPengguna').innerText = `Nyawa: ${nyawa}`;
    document.getElementById('levelBot').innerText = `Level Bot: ${botLevel}`;
}
