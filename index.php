<?php
include 'koneksi.php';

if(isset($_POST['kirim'])) {
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pesan = mysqli_real_escape_string($conn, $_POST['pesan']);
    
    $query = "INSERT INTO inkaaa (nama, email, pesan) VALUES ('$nama', '$email', '$pesan')";
    
    if(mysqli_query($conn, $query)) {
        echo "<script>alert('Pesan berhasil dikirim!');</script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Farah's Portfolio showcasing skills and experience">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Portfolio Farah</title>
    <style>
        .social-icons a {
            font-size: 28px; /* Adjust size according to the reference image */
            margin: 0 15px;
        }
        .home-img img {
            box-shadow: 10px 10px 30px rgba(0, 0, 0, 0.2); /* Added shadow effect */
            border-radius: 10px; /* Adjust for a smoother look */
        }
    </style>
</head>
<body>
    <header>
      <a href="#about" class="logo" title="About Me">Farah</a>
      <nav>
        <a href="#home" class="active" title="Home">Home</a>
        <a href="#about" title="About Me">About Me</a>
        <a href="#education" title="Education">Education</a>
        <a href="#skills" title="Skills">Skills</a>
        <a href="#project" title="Project">Project</a>
        <a href="#contact" title="Contact">Contact</a>
      </nav>
    </header>
    <section class="home" id="home">
        <div class="home-img">
            <img src="images/farah 2.jpg" alt="Farah" loading="lazy"> 
        </div>
        <div class="home-content">
            <h1>Hi, It's <span>Farah</span></h1>
            <h3>I'm a <span class="typing-text"></span></h3>
            <p>Saya Farah Naila Sakhi, saya seorang siswa yang sedang menempuh pendidikan di smk telkom purwokerto. Saya memiliki minat yang besar terhadap dunia teknologi dan ingin menjadi seorang proggaming serta mampu bekerja sama dalam tim yang solid dan dapat menejemen waktu dengan baik.</p>
            <div style="margin-bottom: 20px;"></div>
            <div class="social-icons" style="margin-bottom: 40px;">
              <a href="https://www.linkedin.com/in/farahhsham-sh-7b495b347/" aria-label="LinkedIn"><i class="fa-brands fa-linkedin"></i></a>
              <a href="https://github.com/farahhsham" aria-label="GitHub"><i class="fa-brands fa-github"></i></a>
              <a href="https://x.com/home" aria-label="Twitter/X"><i class="fa-brands fa-x-twitter"></i></a>
              <a href="https://www.instagram.com/farahhnsh0_0?igsh=M2p1YXRtNWpvcHpm" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
              <a href="https://www.tiktok.com/@0_0qraeh" aria-label="tiktok"><i class="fa-brands fa-tiktok"></i></a>
            </div>
            <a href="https://wa.me/085103682009" class="btn">Hire Me</a>
        </div>
    </section>

    <script>
        const typingText = document.querySelector(".typing-text");
        const words = ["UI/UX DESIGNER", "FRONT END DEVELOPER", "ENTREPRENEUR", "BUSINESSWOMAN", "DOCTOR"];
        let wordIndex = 0;
        let charIndex = 0;
        let isDeleting = false;

        function typeEffect() {
            let currentWord = words[wordIndex];
            let displayedText = isDeleting ? currentWord.substring(0, charIndex--) : currentWord.substring(0, charIndex++);
            typingText.textContent = displayedText;

            let speed = isDeleting ? 100 : 200;
            if (!isDeleting && charIndex === currentWord.length + 1) {
                isDeleting = true;
                setTimeout(typeEffect, 1000);
            } else if (isDeleting && charIndex === 0) {
                isDeleting = false;
                wordIndex = (wordIndex + 1) % words.length;
                setTimeout(typeEffect, 500);
            } else {
                setTimeout(typeEffect, speed);
            }
        }

        document.addEventListener("DOMContentLoaded", () => {
            setTimeout(typeEffect, 500);
        });
    </script>

    <!--effect jarak-->
    <div class="glowing-grid">
        <h2>Welcome to My Portfolio</h2>
    </div>

    <!-- Abbout Section Start-->
    <section class="about" id="about">
        <div class="container">
            <div class="image">
                <div class="image-inner">
                    <!-- Tampilan Depan -->
                    <div class="image-front">
                        <img src="images/frahhhhhhhh.jpg" alt="Profile Image">
                    </div>
                    <!-- Tampilan Belakang -->
                    <div class="image-back">
                        <h3>Farah Naila Sakhi</h3>
                        <p>
                        Saya biasa dipanggil Farah atau Naila, lahir di Banyumas pada 24 Januari 2009. Saya anak bungsu dari dua bersaudara dan tinggal di Bobosan. Saat ini, saya bersekolah di SMK Telkom Purwokerto dan punya minat besar di bidang teknologi dan pengetahuan. Saya bercita-cita menjadi dokter sekaligus programmer, serta ingin meneruskan usaha keluarga. Tujuan hidup saya adalah sukses dan bisa membahagiakan orang tua, baik di dunia maupun di akhirat.
                        </p>
                    </div>
                </div>
            </div>
            <div class="content">
                <h2>About Me</h2>
                <h3>UI/UX DESIGNER</h3>
                <p>Saya seorang siswi dari dari SMK Telkom Purwokerto yang memiliki antusias dalam dunia teknologi dan ingin menjadi programming, memiliki motivasi diri, dapat diandalkan, bertanggung jawab dan pekerja keras </p>
                <a href="CV FARAHHH.pdf" download class="download-btn">Download CV</a>
            </div>
        </div>
    </section>
    <section class="education" id="education"> 
        <h2>My Education Journey</h2>
        <div class="education-list">
            <div class="education-card">
                <div class="education-front">
                    <img src="images/tk.jpg" alt="TK Al Irsyad Purwokerto" class="education-image">
                    <h6 class="education-name">TK Al Irsyad Purwokerto</h6>
                </div>
                <div class="education-back">
                    <p>2013-2015</p>
                    <p>Experience : belajar menjadi generasi yang saleh, sehat, cerdas, dan bermanfaat</p>
                </div>
            </div>    
            <div class="education-card">
                <div class="education-front">
                    <img src="images/soka.JPG" alt="SD Negeri 3 Sokanegara" class="education-image">
                    <h6 class="education-name">SD Negeri 3 Sokanegara</h6>
                </div>
                <div class="education-back">
                    <p>2015-2021</p>
                    <p>Experience : belajar menjadi generasi yang berani, cerdas, aktif dan kreatif</p>
                </div>
            </div>
            <div class="education-card">
                <div class="education-front">
                    <img src="images/smp telkom.jpg" alt="SMP Telkom Purwokerto" class="education-image">
                    <h6 class="education-name">SMP Telkom Purwokerto</h6>
                </div>
                <div class="education-back">
                    <p>2021-2024</p>
                    <p>Experience : belajar menjadi generasi yang berani, cerdas dan IT unggulan </p>
                </div>
            </div>
            <div class="education-card">
                <div class="education-front">
                    <img src="images/smk-telkom.jpeg" alt="SMK Telkom Purwokerto" class="education-image">
                    <h6 class="education-name">SMK Telkom Purwokerto</h6>
                </div>
                <div class="education-back">
                    <p>2024-2027</p>
                    <p>Experience : belajar menjadi generasi kejurusan IT yang  cerdas dan kreatif</p>
                </div>
            </div>    
            
        </div>
    </section>

  <!--My Skill Setion Start-->
        <!-- Bagian Kanan: Skill List -->
              <!-- Skills -->
              <section class="skills" id="skills">
                <div class="max-width">
                    <h2 class="skill-name">My Skills 🎨</h2>
                    <p class="skills-description">Kemampuan saya dalam desain dan teknologi</p>
                    <div class="skills-content">
                        <div class="skill">
                            <img src="images/htmll.png" alt="HTML">
                            <h3>HTML</h3>
                            <p>Struktur dasar web</p>
                        </div>
                        <div class="skill">
                            <img src="images/css (2).png" alt="CSS">
                            <h3>CSS</h3>
                            <p>Gaya tampilan dari desain web</p>
                        </div>
                        <div class="skill">
                            <img src="images/canva (2).png" alt="Canva">
                            <h3>Canva</h3>
                            <p>Desain grafis mudah dan kreatif</p>
                        </div>
                        <div class="skill">
                            <img src="images/figma (2).png" alt="Figma">
                            <h3>Figma</h3>
                            <p>Desain UI/UX modern</p>
                        </div>
                        <div class="skill">
                            <img src="images/ai.png" alt="Adobe Illustrator">
                            <h3>Adobe Illustrator</h3>
                            <p>Vektor dan ilustrasi</p>
                        </div>
                        <div class="skill">
                            <img src="images/WORD (2).png" alt="Microsoft Word">
                            <h3>Microsoft Word</h3>
                            <p>Pembuatan Dokumen dan laporan</p>
                        </div>
                    </div>
                </div>
            </section>
            
<section class="project" id="project">
     <h2>Project Saya</h2>
     <div class="project-list">
        <div class="project-card">
            <img src="images/Projrct  1 (1).png" alt="p1" class="project-image">
            <h4 class="project-name">Project Website</h4>
            <p class="project-description">Ini adalah project website pertama saya tentang fashion yang sudah pernah dibuat dan digunakan</p>
        </div>
        <div class="project-card">
            <img src="images/Project 2.png" alt="p2" class="project-image">
            <h4 class="project-name">Project Website</h4>
            <p class="project-description">Ini adalah project website kedua saya tentang salah satu fashion kekinian yang sudah pernah dibuat dan digunakan</p>
        </div>
        <div class="project-card">
            <img src="images/Project 3.png" alt="p3" class="project-image">
            <h4 class="project-name">Project desain</h4>
            <p class="project-description">Ini adalah project Desain saya menggunakan aplikasi Adobe Illustator</p>
        </div>
        
     </div>
</section>

  <!-- Contact Section -->
<section class="contact" id="contact">
    <div class="contact-container">
        <h2>Contact Me</h2>
        <p>Silakan tinggalkan pesan, saya akan segera membalas!</p>
        <form class="contact-form" action="message.php" method="POST">
            <div class="input-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Masukkan nama Anda" required>
            </div>

            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Masukkan email Anda" required>
            </div>

            <div class="input-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" rows="4" placeholder="Tulis pesan Anda..." required></textarea>
            </div>

            <button type="submit">Send Message</button>
        </form>
    </div>
</section>


 <!--Footer Section-->
     <footer class="footer">
        <nav class="footer-nav">
            <a href="#home">Home</a>
            <a href="#about">About Me</a>
            <a href="#education">Education</a>
            <a href="#skills">Skills</a>
            <a href="#project">Project</a>
            <a href="#contact">Contact</a>
        </nav>

        <div class="footer-icons">
            <a href="#https://www.behance.net/farahnaila"><img src="images/behance.png" alt="Behance"></a>
            <a href="#https://x.com/home"><img src="images/twitter.jpeg" alt="Twitter"></a>
            <a href="#https://www.instagram.com/farahhnsh0_0?igsh=M2p1YXRtNWpvcHpm"><img src="images/IG.png" alt="Instagram"></a>
            <a href="#https://www.linkedin.com/in/farahhsham-sh-7b495b347/"><img src="images/LINKEDIN.png" alt="LinkedIn"></a>
        </div>

        <div class="footer-info">
            <p><a href ="https://maps.app.goo.gl/RohYZf4sEukbDec39">New York City<a</p>
            <p>240.109.0817</p>
            <p><a href="https://myaccount.google.com/?hl=in&utm_source=OGB&utm_medium=act&gar=WzJd">farahsh@gmail.com</a></p>
        </div>

        <div class="footer-line"></div>

        <div class="footer-bottom">
            <p>Copyright © 2025 MaybeFor.You, Inc. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
