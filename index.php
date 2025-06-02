<?php
include 'koneksi.php';

// Ambil data dari database
$query = "SELECT * FROM tb_kegiatan";
$result = mysqli_query($koneksi, $query);

$no = 1;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PORTOFOLIO</title>
    <script src="https://unpkg.com/feather-icons"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
    <link rel="stylesheet" href="style.css" />
    <script src="https://unpkg.com/feather-icons"></script>
  </head>
  <body>

    <!-- Navbar -->
    <header class="bar">
      <nav class="hero">
          <a href="#beranda">Beranda <span></span></a>
          <a href="#tentang saya">Tentang Saya <span></span></a>
          <a href="#portofolio">Portofolio <span></span></a>
          <a href="#opini">Opini <span></span></a>
        <div class="dropdown">
          <!-- <button class="dropdown-btn">Pilih Menu</button>
          <div class="dropdown-content">
              <a href="https://wa.me/qr/IXFHHM2702DJP1">WhatsApp</a>
              <a href="https://www.facebook.com/share/18yGekpMPf/">Facebook</a>
              <a href="https://www.instagram.com/ryfaiii_sky/profilecard/?igsh=MTcwbnRrcnllbm5pMQ==">Instagram</a> -->
      </nav>
            <button class="menu-toggle" onclick="toggleMenu()">
        <i data-feather="menu"></i>
      </button>
    </header>

    <!-- Beranda -->
    <main class="rumah" id="beranda">
      <div class="awal">
        <img src="aku.jpg" alt="" />
        <div class="hallo">
          <div class="bungkus">
            <h1>Hi, My<span> Name Is</span></h1>
            <p>AHMAD RIFA'I</p>
          </div>
          <div class="link">
            <a href="#contact">Contact</a>
          </div>
        </div>
      </div>
    </main>

    <!-- Tentang Saya -->
    <section class="tentang" id="tentang saya">
      <div class="saya">
        <h2>Tentang Saya</h2>
        <div class="aku">
          <div class="paragraf">
            <h1>Saya Rifa'i</h1>
            <p>
              Saya mahasiswa aktif Program Studi Teknik Informatika di
              Universitas Nahdlatul Ulama Sunan Giri, saat ini berada di
              semester 2 (Dua). Saya memiliki minat besar dalam pengembangan
              perangkat lunak, kecerdasan buatan, dan keamanan siber. Selama
              kuliah, saya aktif mengikuti organisasi kemahasiswaan dan berbagai
              proyek teknologi untuk mengasah kemampuan praktis di bidang
              pemrograman, pengelolaan basis data, dan pengembangan aplikasi.
              Saya juga berusaha mempertahankan prestasi akademik dengan terus
              belajar dan mengikuti berbagai pelatihan tambahan seperti coding
              bootcamp dan seminar teknologi. Dengan bekal pengetahuan dan
              keterampilan ini, saya bertekad untuk berkontribusi dalam dunia
              industri teknologi serta terus mengembangkan inovasi yang
              bermanfaat bagi masyarakat.
            </p>
          </div>
          <div class="rifai">
            <img src="rifai.jpg" alt="" />
          </div>
        </div>
      </div>
    </section>

    <!-- Portofolio -->
    <section class="portofolio" id="portofolio">
       <h2 style="color: white;">DAFTAR KEGIATAN</h2>
        <!-- Form Tambah Data -->
  <a href="tambah.php" class="btn btn-success"> + Tambah Data Kegiatan Baru</a>
      <table>
        <tr>
            <th>NO</th>
            <th>NAMA KEGIATAN</th>
            <th>WAKTU KEGIATAN</th>
            <th>AKSI</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
        <tr>
            <!-- <td><?php echo $no++; ?></td> -->
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['nama_kegiatan']; ?></td>
            <td><?php echo $row['waktu_kegiatan']; ?></td>
            <td>
                <a href="hapus.php?id=<?php echo $row['id']; ?>" 
                   class="btn btn-primary">
                   <i data-feather="trash-2"></i>
                </a>
               <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary"><i data-feather="edit"></i></a>
            </td>
        </tr>
        <?php endwhile; ?>
      </table>
    </section>

    <!-- Opini -->
    <section class="lengkap" id="opini">
      <div class="lebih">
        <section class="Opini" id="Opini">
          <h1>Opini</h1>
          <div class="grid-container">
            <div class="card">
              <video autoplay loop muted><source src="ling.mp4"></video>
              <div class="judul-overlay">"Night Shade"</div>
            </div>
            <div class="card">
              <video autoplay loop muted><source src="ling.mp4"></video>
              <div class="judul-overlay">"Night Shade"</div>
            </div>
            <div class="card">
              <video autoplay loop muted><source src="ling.mp4"></video>
              <div class="judul-overlay">"Night Shade"</div>
            </div>
            <div class="card">
              <video autoplay loop muted><source src="ling.mp4"></video>
              <div class="judul-overlay">"Night Shade"</div>
            </div>
            <div class="card">
              <video autoplay loop muted><source src="ling.mp4"></video>
              <div class="judul-overlay">"Night Shade"</div>
            </div>
            <div class="card">
              <video autoplay loop muted><source src="ling.mp4"></video>
              <div class="judul-overlay">"Night Shade"</div>
            </div>
          </div>
        </section>
      </div>
    </section>

    <!-- Contact -->
    <main class="panggil" id="contact">
      <section class="contact">
        <div class="container">
          <div class="section-title">
            <h2>Contact</h2>
          </div>
          <di class="contact-content">
            <div class="contact-info">
              <h3>Hubungi Kami</h3>

              <div class="info">
                <div class="formasi">
                  <div class="contact-details">
                    <div class="contact-item">
                      <div class="contact-icon">
                        <i class="fas fa-phone"></i>
                      </div>
                      <div>
                        <h4>Phone</h4>
                        <p>+62 81 358 374 136</p>
                      </div>
                    </div>
                  </div>
    
                  <div class="contact-item">
                    <div class="contact-icon">
                      <i class="fas fa-envelope"></i>
                    </div>
                    <div>
                      <h4>Email</h4>
                      <p>skykarlytzy@gmail.com</p>
                    </div>
                  </div>
    
                  <div class="contact-item">
                    <div class="contact-icon">
                      <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div>
                      <h4>Location</h4>
                      <p>Bojonegoro, Jawa Timur, Indonesia</p>
                    </div>
                  <!-- </div>
                </div>
  
                <div class="maps">
                  <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15833.40346625614!2d112.04859382361538!3d-7.200749834393453!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e778872af9566f7%3A0x217c98fca6a7d91f!2sTeleng%2C%20Sumberejo%2C%20Bojonegoro%20Regency%2C%20East%20Java!5e0!3m2!1sen!2sid!4v1745934016078!5m2!1sen!2sid"
                    width="100%"
                    height="300"
                    style="border: 0"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                  ></iframe>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    <!-- Fother -->
    <main class="copy">
      <footer>
        <div class="read">
          <div class="social-links">
            <a
              href="https://www.facebook.com/share/18yGekpMPf/"
              class="social-link"
              ><i class="fab fa-facebook-f"></i
            ></a>
            <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
            <a
              href="https://www.instagram.com/ryfaiii_sky/profilecard/?igsh=MTcwbnRrcnllbm5pMQ=="
              class="social-link"
              ><i class="fab fa-instagram"></i
            ></a>
            <a href="#" class="social-link"
              ><i class="fab fa-linkedin-in"></i
            ></a>
            <a href="#" class="social-link"><i class="fab fa-github"></i></a>
          </div>
          <p class="copyright">
            &copy; ryfaii.copyright 
          </p>
        </div>
      </footer>
    </main>

        <script>
      feather.replace();

      function toggleMenu() {
        const navi = document.querySelector(".hero");
        navi.classList.toggle("show");
      }
    </script>
  </body>
</html>
