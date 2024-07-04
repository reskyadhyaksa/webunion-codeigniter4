<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Union</title>
  <link rel="icon" href="<?= base_url('img/favicon.png') ?>" />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
  <!-- animate CSS -->
  <link rel="stylesheet" href="<?= base_url('css/animate.css') ?>" />
  <!-- owl carousel CSS -->
  <link rel="stylesheet" href="<?= base_url('css/owl.carousel.min.css') ?>" />
  <!-- font awesome CSS -->
  <link rel="stylesheet" href="<?= base_url('css/all.css') ?>" />
  <!-- flaticon CSS -->
  <link rel="stylesheet" href="<?= base_url('css/flaticon.css') ?>" />
  <link rel="stylesheet" href="<?= base_url('css/themify-icons.css') ?>" />
  <!-- font awesome CSS -->
  <link rel="stylesheet" href="<?= base_url('css/magnific-popup.css') ?>" />
  <!-- swiper CSS -->
  <link rel="stylesheet" href="<?= base_url('css/slick.css') ?>" />
  <!-- style CSS -->
  <link rel="stylesheet" href="<?= base_url('css/style.css') ?>" />
  <link rel="stylesheet" href="<?= base_url('css/responsive.css') ?>" />
  <link rel="stylesheet" href="<?= base_url('css/profile.css') ?>" />
  <link rel="stylesheet" href="<?= base_url('css/navigation.css') ?>" />

</head>

<body>
  <?= $this->include('header') ?>

  <div class="container-fluid">
    <div class="row flex-wrap">
      <div class="bg-dark col-auto col-md-2 col-lg-2 min-vh-100 d-flex flex-column justify-content-between">
        <ul class="nav nav-pills flex-column mt-4">
          <li class="nav-item py-2 py-sm-0 my-3 my-sm-4 my-lg-4">
            <a href="<?= base_url('mahasiswa/profile') ?>" class="nav-link text-center text-white">
              <img src="<?= base_url('sidebar/assets/Customer.svg') ?>" alt="" class="icon img-fluid" width="70" height="70"><br>
              <span class="fs-4 d-none d-sm-inline">PROFIL</span>
            </a>
          </li>
          <li class="nav-item py-2 py-sm-0 my-4 my-sm-4 my-lg-3">
            <a href="<?= base_url('mahasiswa/profile_info_lomba') ?>" class="nav-link text-center text-white">
              <img src="<?= base_url('sidebar/assets/Edit Property.svg') ?>" alt="" class="icon img-fluid" width="70" height="70"><br>
              <span class="fs-4 d-none d-sm-inline">PENGAJUAN<br>LOMBA</span>
            </a>
          </li>
          <li class="nav-item py-2 py-sm-0 my-4 my-sm-4 my-lg-3">
            <a href="<?= base_url('mahasiswa/profile_tim_lomba') ?>" class="nav-link text-center text-white">
              <img src="<?= base_url('sidebar/assets/People.svg') ?>" alt="" class="icon img-fluid" width="70" height="70"><br>
              <span class="fs-4 d-none d-sm-inline">TIM</span>
            </a>
          </li>
          <li class="nav-item py-2 py-sm-0 my-4 my-sm-4 my-lg-3">
            <a href="<?= base_url('auth/mahasiswa/logout') ?>" class="nav-link text-center text-white">
              <img src="<?= base_url('sidebar/assets/Logout.svg') ?>" alt="" class="icon img-fluid" width="70" height="70"><br>
              <span class="fs-4 d-none d-sm-inline">KELUAR</span>
            </a>
          </li>
        </ul>
      </div>

      <div class="main-content col-auto min-vh-100 d-flex flex-column p-4 p-sm-4 p-md-5 p">
        <div class="container">
          <h1 class="py-5">Informasi Tim</h1>
          <table class="info-tim">
            <thead>
              <tr>
                <th>Nama Lomba</th>
                <th>Nama Tim</th>
                <th>Nama Ketua Tim</th>
                <th>Nama Anggota Tim</th>
                <th>Dibuat Pada</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($timLomba as $row) : ?>
                <tr>
                  <td><?= esc($row['nama_lomba']) ?></td>
                  <td><?= esc($row['nama_tim']) ?></td>
                  <td><?= esc($row['nama_ketua']) ?></td>
                  <td>
                      <?php
                      // Display the names of anggota_tim
                      if (is_array($row['anggota_nama'])) {
                          echo implode(', ', $row['anggota_nama']);
                      }
                      ?>
                  </td>
                  <td><?= esc($row['created_at']->toLocalizedString('dd-MM-yyyy')) ?></td>
                  
                  <?php
                  switch (esc($row['status'])) {
                    case 0:
                      $style = 'color:orange; font-weight:bold';
                      $text = 'Pending';
                      break;
                    case 1:
                      $style = 'color:green; font-weight:bold';
                      $text = 'Disetujui';
                      break;
                    case 2:
                      $style = 'color:red; font-weight:bold';
                      $text = 'Ditolak';
                      break;
                  }
                  ?>
                  <td style="<?= $style ?>"><?= $text ?></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>
  </div>
  </div>

  <!--::footer_part start::-->
  <footer class="footer_part">
    <div class="container">
      <div class="row justify-content-around">
        <div class="col-sm-6 col-lg-2">
          <div class="single_footer_part">
            <ul class="list-unstyled">
              <li>
                <h4>Kami Membantu Anda dalam meraih prestasi.</h4>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-lg-2">
          <div class="single_footer_part">
            <h4>Informasi</h4>
            <ul class="list-unstyled">
              <li><a href="">Akademik</a></li>
              <li><a href="">Non-Akademik</a></li>
              <li><a href="">Berita</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="single_footer_part">
            <h4>Feedback</h4>
            <p>
              Heaven fruitful doesn't over lesser in days. Appear creeping
            </p>
            <div id="mc_embed_signup">
              <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative mail_part">
                <input type="email" name="email" id="newsletter-form-email" placeholder="Masukkan Feedback" class="placeholder hide-on-focus" onfocus="this.placeholder = ''" onblur="this.placeholder = ' Email Address '" />
                <button type="submit" name="submit" id="newsletter-submit" class="email_icon newsletter-submit button-contactForm">
                  Kirim
                </button>
                <div class="mt-10 info"></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="copyright_part">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="copyright_text">
              <p>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;
                <script>
                  document.write(new Date().getFullYear());
                </script>
                All Rights Reserved Term of use Union.
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="footer_icon social_icon">
              <ul class="list-unstyled">
                <li>
                  <a href="#" class="single_social_icon"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li>
                  <a href="#" class="single_social_icon"><i class="fab fa-twitter"></i></a>
                </li>
                <li>
                  <a href="#" class="single_social_icon"><i class="fas fa-globe"></i></a>
                </li>
                <li>
                  <a href="#" class="single_social_icon"><i class="fab fa-behance"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--::footer_part end::-->


  <!-- jquery plugins here-->
  <script src="<?= base_url('js/jquery-1.12.1.min.js') ?>"></script>
  <!-- popper js -->
  <script src="<?= base_url('js/popper.min.js') ?>"></script>
  <!-- bootstrap js -->
  <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
  <!-- easing js -->
  <script src="<?= base_url('js/jquery.magnific-popup.js') ?>"></script>
  <!-- swiper js -->
  <script src="<?= base_url('js/swiper.min.js') ?>"></script>
  <!-- swiper js -->
  <script src="<?= base_url('js/masonry.pkgd.js') ?>"></script>
  <!-- particles js -->
  <script src="<?= base_url('js/owl.carousel.min.js') ?>"></script>
  <script src="<?= base_url('js/jquery.nice-select.min.js') ?>"></script>
  <!-- slick js -->
  <script src="<?= base_url('js/slick.min.js') ?>"></script>
  <script src="<?= base_url('js/jquery.counterup.min.js') ?>"></script>
  <script src="<?= base_url('js/waypoints.min.js') ?>"></script>
  <script src="<?= base_url('js/contact.js') ?>"></script>
  <script src="<?= base_url('js/jquery.ajaxchimp.min.js') ?>"></script>
  <script src="<?= base_url('js/jquery.form.js') ?>"></script>
  <script src="<?= base_url('js/jquery.validate.min.js') ?>"></script>
  <script src="<?= base_url('js/mail-script.js') ?>"></script>
  <!-- custom js -->
  <script src="<?= base_url('js/custom.js') ?>"></script>
  <script>
    $(document).ready(function() {
        $('#notification-toggle').click(function(event) {
          event.preventDefault(); // Mencegah tindakan default dari tag <a>

          $.ajax({
            url: '<?= base_url('notifikasi/get_notif') ?>',
            method: 'GET',
            dataType: 'json',
            success: function(response) {
                var notificationContent = $('#notification-content');
                notificationContent.empty(); // Kosongkan konten notifikasi

                if (response.notifications && response.notifications.length > 0) {
                    // Loop melalui notifikasi dan tambahkan ke konten notifikasi
                    response.notifications.forEach(function(notif, index) {
                        var containerClass = (index % 2 === 0) ? 'container-notif even' : 'container-notif odd';
                        var notifHTML = `
                            <div class="${containerClass}">
                                <section class="header-title">
                                    <section class="text-title">${notif.title_notif}</section>
                                    <section class="date-title">${notif.created_at}</section>
                                </section>
                                <p class="isi-notif">${notif.deskripsi_notif}</p>
                                <form action="<?= base_url('notifikasi/mark_read_akademik') ?>" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="mark_readed" value="1">
                                    <input type="hidden" name="notif_id" value="${notif.notif_id}">
                                    <button type="submit" class="mark-readed">Mark as Read</button>
                                </form>
                            </div>
                        `;
                        notificationContent.append(notifHTML);
                    });
                } else {
                    var emptyHTML = `
                        <div class="container-notif">
                            <p class="notif-kosong">Tidak ada notifikasi terbaru.</p>
                        </div>
                    `;
                    notificationContent.append(emptyHTML);
                }

                $('#notification-popup').fadeToggle(); // Mengubah visibilitas elemen dengan animasi fade
            },
            error: function() {
                var notificationContent = $('#notification-content');
                notificationContent.empty(); // Kosongkan konten notifikasi

                var errorHTML = `
                    <div class="container-notif">
                        <p class="isi-notif">Terjadi kesalahan saat mengambil notifikasi.</p>
                    </div>
                `;
                notificationContent.append(errorHTML);

                $('#notification-popup').fadeToggle(); // Mengubah visibilitas elemen dengan animasi fade
            }
          });
        });

        // Menyembunyikan notifikasi saat klik di luar elemen
        $(document).click(function(event) {
            var target = $(event.target);
            if (!target.closest('#notification-popup').length && !target.closest('#notification-toggle').length) {
                $('#notification-popup').fadeOut('slow'); // Menggunakan animasi fadeOut
            }
        });

        // Menyembunyikan notifikasi saat mouse keluar dari elemen
        $('#notification-popup').mouseleave(function() {
            $(this).fadeOut('slow'); // Menggunakan animasi fadeOut
        });
    });
  </script>
</body>

</html>