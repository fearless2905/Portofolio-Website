$(document).ready(function () {
    // 1. Toggle menu saat ikon menu diklik
    $('#menu-icon').click(function () {
        $('.navbar').toggleClass('active');
    });

    // 2. Ganti warna teks saat menu navigasi dihover
    $('.navbar a').hover(function () {
        $(this).css('color', '#00abf0');
    }, function () {
        $(this).css('color', '#ededed');
    });

    // 3. Atur efek slide untuk halaman beranda saat dimuat
    $('.home-content').slideDown('slow');

    // 4. Tambahkan efek hover pada tombol Berdoa dan Ikhtiar
    $('.btn').hover(function () {
        $(this).css({
            'background-color': '#00abf0',
            'color': '#081b29'
        });
    }, function () {
        $(this).css({
            'background-color': '#081b29',
            'color': '#00abf0'
        });
    });

    // 5. Animasi pada ikon media sosial saat dihover
    $('.home-sci a').hover(function () {
        $(this).css('transform', 'scale(1.2)');
    }, function () {
        $(this).css('transform', 'scale(1)');
    });

    // 6. Tambahkan efek fade pada gambar pada bagian Tentang
    $('.about-img img').fadeIn('slow');

    // 7. Animasi pada tombol Read More saat dihover
    $('.btn-box .btn').hover(function () {
        $(this).css('transform', 'scale(1.1)');
    }, function () {
        $(this).css('transform', 'scale(1)');
    });

    // 8. Atur efek scroll smooth saat navigasi di klik
    $('.navbar a').click(function (event) {
        event.preventDefault();
        var target = $(this).attr('href');
        $('html, body').animate({
            scrollTop: $(target).offset().top
        }, 800);
    });

    // 9. Tambahkan efek shadow saat input field di-focus
    $('input[type="text"], input[type="number"], textarea').focus(function () {
        $(this).css('box-shadow', '0 0 10px rgba(0, 0, 0, 0.2)');
    }).blur(function () {
        $(this).css('box-shadow', 'none');
    });

    // 10. Atur efek submit form
    $('form').submit(function (event) {
        event.preventDefault();
        alert('Form berhasil dikirim!');
    });
});

