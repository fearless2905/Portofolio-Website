<?php
include ("koneksi.php");

// READ
$sql_select = "SELECT * FROM kontak";
$result_select = mysqli_query($db, $sql_select);

// UPDATE
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset ($_POST["update"])) {
    // Handle update operation here
}

// DELETE
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset ($_POST["delete"])) {
    // Handle delete operation here
}

?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alif Bayu Website</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>

    <header class="header">
        <a href="#" class="logo">Alif Bayu A</a>
        <div class="bx bx-menu" id="menu-icon"></div>
        <nav class="navbar">
            <a href="#home" class="active">Beranda</a>
            <a href="#about">Tentang</a>
            <a href="#education">Riwayat</a>
            <a href="#skills">Skills</a>
            <a href="#contact">Kontak</a>
        </nav>
    </header>

    <section class="home" id="home">
        <div class="home-content">
            <h1>Halo, Saya <span>Alif Bayu </span></h1>
            <div class="text-animate">
                <h3> Mahasiswa</h3>
            </div>
            <p>Perkenalkan nama saya Alif Bayu Ammarizky, biasa dipanggil bayu.
                Saya adalah seorang mahasiswa UPN"Veteran" Jawa Timur Prodi Informatika
                angkatan 2022 semester 4 dengan NPM 22081010216
            </p>

            <div class="btn-box">
                <a href="#" class="btn">Berdoa</a>
                <a href="#" class="btn">Ikhtiar</a>
            </div>
        </div>

        <div class="home-sci">
            <a href="https://facebook.com/bayu.alif.961/" target="_blank"><i class='bx bxl-facebook'></i></a>
            <a href="https://www.instagram.com/bayuskaka/" target="_blank"><i class='bx bxl-instagram'></i></a>
            <a href="https://twitter.com/AlifAmmarizky" target="_blank"><i class='bx bxl-twitter'></i></a>
        </div>
        <div class="home-imgHover"></div>
    </section>

    <section class="about" id="about">
        <h2 class="heading">Tentang <span>Saya</span></h2>

        <div class="about-img">
            <img src="WhatsApp_Image_2022-09-09_at_10.11.47-removebg-preview.png" alt="">
            <span class="circle-spin"></span>
        </div>

        <div class="about-content">
            <h3>Mahasiswa </h3>
            <p> Nama lengkap Alif Bayu Ammarizky biasa dipanggil Bayu,
                lahir pada tanggal 29 Mei 2004 di Surabaya,
                adalah seorang mahasiswa berusia 20 tahun yang sedang menempuh program studi S1 Informatika di UPN
                Veteran Jatim.</p>

            <div class="btn-box btns">
                <a href="#" class="btn">Read More</a>
            </div>
        </div>
    </section>

    <section class="education" id="education">
        <h2 class="heading">Riwayat <span>Saya</span></h2>

        <div class="education row">
            <?php
            // Data riwayat sekolah dalam bentuk array multidimensional
            $riwayat_sekolah = array(
                array(
                    "tahun" => "2010 - 2016",
                    "nama_sekolah" => "Sekolah Dasar - SDI Raudlatul Jannah Wage",
                    "lokasi" => "Jl. Jatisari Permai X No. 2 Pepelegi, Kecamatan Waru, Kabupaten Sidoarjo, Jawa Timur",
                    "deskripsi" => "Sekolah Raudlatul Jannah adalah sebuah perguruan Islam yang berlokasi di Jl. Jatisari Permai X No. 2 Pepelegi,
                     Kecamatan Waru, Kabupaten Sidoarjo, Jawa Timur. Sekolah ini didirikan pada tahun 1986 dan memiliki visi untuk menyiapkan generasi Islam yang beraqidah,
                      berakhlak karimah, dan berprestasi optimal."
                ),
                array(
                    "tahun" => "2016 - 2019",
                    "nama_sekolah" => "Sekolah Menengah Pertama - SMPN 1 Taman Sidoarjo",
                    "lokasi" => "Jl. Satria No. 1 Ketegan, Kecamatan Taman, Kabupaten Sidoarjo, Jawa Timur",
                    "deskripsi" => "SMPN 1 Taman adalah sebuah sekolah menengah pertama negeri yang berlokasi di Jl. Satria No. 1 Ketegan, Kecamatan Taman, Kabupaten Sidoarjo, Jawa Timur.
                     Sekolah ini didirikan pada tahun 1962 dan memiliki visi untuk menyiapkan generasi muda yang beraqidah, berakhlak karimah, dan berprestasi optimal."
                ),
                array(
                    "tahun" => "2019 - 2022",
                    "nama_sekolah" => "Sekolah Menengah Atas - SMAN 1 Taman Sidoarjo",
                    "lokasi" => "Kecamatan Taman, Kabupaten Sidoarjo, Jawa Timur",
                    "deskripsi" => "SMA Negeri 1 Taman adalah sebuah sekolah menengah atas negeri yang berlokasi di Kecamatan Taman, Kabupaten Sidoarjo, Jawa Timur. 
                    Sekolah ini didirikan pada tahun 1984.
                    Sekolah ini menyelenggarakan program tiga jurusan: IPA, IPS, dan Bahasa, dimana terdapat satu kelas dengan program akselerasi di jurusan IPA. 
                    Sekolah ini merupakan SMA Negeri satu-satunya yang terletak di wilayah Kecamatan Taman."
                )
            );

            // Menampilkan data riwayat sekolah
            foreach ($riwayat_sekolah as $sekolah) {
                echo "<div class='education-column'>";
                echo "<h3 class='title'>Pendidikan</h3>";
                echo "<div class='education-box'>";
                echo "<div class='education-content'>";
                echo "<div class='content'>";
                echo "<div class='year'><i class='bx bxs-calendar'></i>" . $sekolah['tahun'] . "</div>";
                echo "<h3>" . $sekolah['nama_sekolah'] . "</h3>";
                echo "<p>" . $sekolah['deskripsi'] . "</p>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
            ?>
        </div>
    </section>

    <section class="skills" id="skills">
        <h2 class="heading">Skills <span>Saya</span></h2>

        <div class="skills-row">
            <div class="skills-column">
                <h3 class="title">Coding Skills</h3>

                <div class="skills-box">
                    <div class="skills-content">
                        <div class="progress">
                            <h3>C## <span>80%</span></h3>
                            <div class="bar"><span></span></div>
                        </div>

                        <div class="progress">
                            <h3>C <span>70%</span></h3>
                            <div class="bar"><span></span></div>
                        </div>

                        <div class="progress">
                            <h3>JavaScript <span>50%</span></h3>
                            <div class="bar"><span></span></div>
                        </div>

                        <div class="progress">
                            <h3>Python <span>70%</span></h3>
                            <div class="bar"><span></span></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="skills-column">
                <h3 class="title">Professional Skills</h3>

                <div class="skills-box">
                    <div class="skills-content">
                        <div class="progress">
                            <h3>Web Designer <span>60%</span></h3>
                            <div class="bar"><span></span></div>
                        </div>

                        <div class="progress">
                            <h3>Web Development<span>65%</span></h3>
                            <div class="bar"><span></span></div>
                        </div>

                        <div class="progress">
                            <h3>Game Development <span>40%</span></h3>
                            <div class="bar"><span></span></div>
                        </div>

                        <div class="progress">
                            <h3>UI/UX <span>50%</span></h3>
                            <div class="bar"><span></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="contact">
        <h2 class="heading">Hubungi <span>Saya</span></h2>

        <form action="proses_kontak.php" method="post">
            <div class="input-box">
                <div class="input-field">
                    <input type="text" name="nama" placeholder="Nama Lengkap" required>
                    <span class="focus"></span>
                </div>
                <div class="input-field">
                    <input type="email" name="email" placeholder="Email" required>
                    <span class="focus"></span>
                </div>
            </div>

            <div class="input-box">
                <div class="input-field">
                    <input type="tel" name="telepon" placeholder="Nomor Telepon" required>
                    <span class="focus"></span>
                </div>
                <div class="input-field">
                    <input type="text" name="subjek" placeholder="Subjek Email" required>
                    <span class="focus"></span>
                </div>
            </div>

            <div class="textarea-field">
                <textarea name="pesan" cols="30" rows="10" placeholder="Pesan Anda" required></textarea>
                <span class="focus"></span>
            </div>

            <div class="btn-box btns">
                <button type="submit" name="submit" class="btn">Submit</button>
            </div>
        </form>

    </section>

    <footer class="footer">
        <div class="footer-text">
            <p>Website CV | 2024 by Alif Bayu A | Informatika | 22081010216 </p>
        </div>

        <div class="footer-iconTop">
            <a href="#"><i class='bx bx-chevron-up'></i></a>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="script.js"></script>
</body>

</html>