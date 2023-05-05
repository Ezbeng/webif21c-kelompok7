// Menunggu dokumen selesai dimuat sebelum menjalankan kode
document.addEventListener("DOMContentLoaded", function (event) {

    // Menampilkan dan menyembunyikan navbar ketika tombol toggle diklik
    const toggle = document.getElementById('header-toggle');
    const nav = document.getElementById('nav-bar');
    const bodypd = document.getElementById('body-pd');
    const headerpd = document.getElementById('header');

    if (toggle && nav && bodypd && headerpd) {
        toggle.addEventListener('click', function () {
            nav.classList.toggle('show');
            toggle.classList.toggle('bx-x');
            bodypd.classList.toggle('body-pd');
            headerpd.classList.toggle('body-pd');

            

        });
    }

    // Menandai tautan yang aktif dalam navbar
    const links = document.querySelectorAll('.nav_link');
    const subitemdash = document.getElementsByClassName('subitem-dashbtn');
    let isSubitemOpen = false;

    links.forEach(link => {
    link.addEventListener('click', function(event) {
        
        if (link.classList.contains('nav_link') && link.getAttribute('id') === 'dashboard') {
        isSubitemOpen = !isSubitemOpen; // toggle status subitem
        for (let i = 0; i < subitemdash.length; i++) {
            subitemdash[i].style.display = isSubitemOpen ? 'block' : 'none';
        }
        } else if (!link.classList.contains('subitem') && !link.classList.contains('subitem-dashbtn')) {
        isSubitemOpen = false;
        for (let i = 0; i < subitemdash.length; i++) {
            subitemdash[i].style.display = 'none';
        }
        }
        
        links.forEach(link => link.classList.remove('active'));
        this.classList.add('active');
    });
    });

    // const preventLinks = document.querySelectorAll('a[href="#"]');
    // preventLinks.forEach(link => {
    // link.addEventListener('click', function(event) {
    //     event.preventDefault();
    // });
    // });




});
