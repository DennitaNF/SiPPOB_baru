<template>
  <div>
    <navbar />
    <hero />

    <div class="landing">
      <div class="container">
        <h1 class="display-4 mb-4">Selamat Datang di TOP-UP IN!</h1>
        <!-- Tambahkan mb-4 untuk memberi jarak bawah -->
        <p class="lead mb-5">
          <!-- Tambahkan mb-4 untuk memberi jarak bawah -->
          Kami menyediakan layanan top-up untuk berbagai game populer. Silakan
          pilih game favorit Anda dan mulai top-up sekarang!
        </p>
        <div class="row">
          <div
            v-for="game in games"
            :key="game.id"
            class="col-lg-4 col-md-6 col-sm-12"
          >
            <div class="card mb-4 shadow-sm game-card">
              <img :src="game.image" class="card-img-top" :alt="game.name" />
              <div class="card-body">
                <h2 class="card-title">{{ game.name }}</h2>
                <button
                  @click="redirectToTopUp(game.id)"
                  class="btn btn-primary btn-block"
                >
                  Top-Up Sekarang
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <layout-footer /> <!-- Tambahkan footer -->
  </div>
</template>

<script>
import Hero from "./partials/Hero.vue";

export default {
  components: { Hero },

  data() {
    return {
      games: [ // Daftar game yang akan ditampilkan
        { id: 1, name: "Mobile Legends", image: "/assets/img/ml.png" }, // Tambahkan game lain sesuai kebutuhan Anda
        { id: 2, name: "Free Fire", image: "/assets/img/ff.png" },
        { id: 3, name: "PUBG Mobile", image: "/assets/img/pubg.png" },
        { id: 4, name: "Call of Duty: Mobile", image: "/assets/img/cod.png" },
        { id: 5, name: "Arena of Valor", image: "/assets/img/aov.png" },
        { id: 6, name: "League of Legends", image: "/assets/img/lol.png" },
        { id: 7, name: "Honor of Kings", image: "/assets/img/hok.png" },
        { id: 8, name: "Pokemon Unite", image: "/assets/img/pu.png" },
        { id: 9, name: "Farlight 84", image: "/assets/img/f8.png" },
        // Tambahkan game lain sesuai kebutuhan Anda
      ],
    };
  },
  methods: {
    redirectToTopUp(gameId) {
      // Ganti URL ini dengan URL yang sesuai untuk halaman top-up game
      this.$router.push({ path: `/example` });
    },
  },
};
</script>

<style scoped> /* Gaya CSS untuk komponen LandingPage */
.landing {
  padding: auto;
  background-color: rgb(30 32 34); /* Warna ungu */
  font-family: "Poppins", sans-serif; /* Mengubah font menjadi Poppins */
}

.display-4 {
  font-size: 2.5rem; /* Ukuran judul yang lebih besar */
  font-weight: 700; /* Ketebalan judul */
  color: #fff; /* Warna teks putih */
}

.lead {
  font-size: 1.25rem; /* Ukuran teks yang sedikit lebih besar */
  color: #fff; /* Warna teks putih */
  padding: ; /* Berikan jarak antara teks dan batas */
}

.game-card {;
  height: auto; /* Set tinggi kartu */
  margin-bottom: 20px; /* Tambahkan jarak antara kartu */
}

.card {
  transition: transform 0.2s;
  border: none; /* Hapus garis tepi kartu */
  border-radius: 10px; /* Tambahkan sudut melengkung */
  overflow: hidden; /* Hindari overflow konten */
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Tambahkan bayangan */
}

.card:hover {
  transform: translateY(-5px);
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1); /* Efek bayangan saat digulir */
}

.card-img-top {
  border-radius: 10px 10px 0 0; /* Tambahkan sudut melengkung hanya pada sudut atas */
  object-fit: cover; /* Sesuaikan gambar agar ukurannya sama */
  height: 200px; /* Tentukan tinggi gambar untuk setiap kartu */
  width: 100; /* Tentukan lebar gambar agar sesuai dengan kartu */
}

.card-body {
  padding: auto; /* Berikan jarak antara isi dan batas kartu */
}

.card-title {
  font-size: 1.25rem; /* Ukuran judul yang sedikit lebih besar */
}

.btn-block {
  border-radius: 10; /* Hapus sudut melengkung tombol */
}

.btn-primary {
  background-color: rgb(255, 202, 44); /* Warna latar belakang yang sesuai */
  border-color: rgb(255, 202, 44); /* Warna tepi yang sesuai */
}

.btn-primary:hover {
  background-color: #357ae8; /* Warna latar belakang yang sedikit lebih gelap saat digulir */
  border-color: #357ae8; /* Warna tepi yang sesuai saat digulir */
}

.btn-primary:focus {
  box-shadow: 0 0 0 0.2rem rgba(74, 144, 226, 0.5); /* Efek bayangan saat fokus */
}

@media (max-width: 992px) { /* Atur kartu untuk layar berukuran kecil */
  .card-img-top {
    height: 150px; /* Atur tinggi gambar untuk layar berukuran kecil */
  }
}

@media (max-width: 768px) { /* Atur kartu untuk layar berukuran sangat kecil */
  .card {
    margin-bottom: 10px; /* Atur margin bawah kartu untuk layar berukuran kecil */
  }
}
</style>
