window.addEventListener("load", function () {
    var nav_items = document.querySelectorAll(".nav-items");
    const url_terkini = window.location.href[1];
    nav_items.forEach(function (items) {
        items.onclick = function () {
            nav_items.forEach(function (item) {
                item.classList.remove("aktif");
            });
            var subItemsCase = this.nextElementSibling;
            if (subItemsCase && subItemsCase.classList.contains('sub-items-case')) {
                var isHidden = subItemsCase.style.display === 'none';

                // Menutup semua sub-items-case
                document.querySelectorAll('.sub-items-case').forEach(function (subItem) {
                    subItem.style.display = 'none';
                });

                // Membuka sub-items-case yang sesuai dengan kelas CSS
                if (isHidden && items.classList.contains('dashboard')) {
                    subItemsCase.style.display = 'block';
                } else if (isHidden && items.classList.contains('tabledata')) {
                    subItemsCase.style.display = 'block';
                }
                
                

            } else {
                // Menutup sub-items-case saat elemen selain dashboard dan tabledata diklik
                document.querySelectorAll('.sub-items-case').forEach(function (subItem) {
                    subItem.style.display = 'none';
                });

                
            }
            

            if (items.getAttribute('id') == 'KELUAR') {
                window.location.href = "/";
            }
            
            items.classList += ' aktif';

        };
    });



    const toggle_nav = document.getElementsByClassName('toggle-nav')[0];
    toggle_nav.onclick = function () {
        if (toggle_nav.classList.contains('on')) {
            toggle_nav.classList.remove("on");
            toggle_nav.classList += ' off';
            for (var i = 0; i < document.getElementsByClassName('nav-items').length; i++) {
                // document.getElementsByClassName('nav-items')[i].style.display = 'block';
            }
            // document.querySelector('.navbar-title span').style.display = 'block';
            document.getElementsByClassName('navbar')[0].style.width = '250px';
        } else if (toggle_nav.classList.contains('off')) {
            toggle_nav.classList.remove("off");
            toggle_nav.classList += ' on';
            for (var i = 0; i < document.getElementsByClassName('nav-items').length; i++) {
                // document.getElementsByClassName('nav-items')[i].style.display = 'none';
            }
            // document.querySelector('.navbar-title span').style.display = 'none';
            document.getElementsByClassName('navbar')[0].style.width = '70px';
        }
    }

    document.addEventListener("click", function (event) {
        var target = event.target;

        // Memeriksa apakah elemen yang diklik bukan nav-top-logo atau anak elemennya
        if (!target.closest('.nav-top-logo')) {
            // Menonaktifkan opsi logo navigasi
            document.getElementsByClassName('nav-top-logo-opsi')[0].style.display = "none";

        }

    });

    const navtoplogo = document.getElementsByClassName('nav-top-logo')[0];
    navtoplogo.onclick = function () {
        if (document.getElementsByClassName('nav-top-logo-opsi')[0].style.display == "none") {
            document.getElementsByClassName('nav-top-logo-opsi')[0].style.display = "flex";
        } else {
            document.getElementsByClassName('nav-top-logo-opsi')[0].style.display = "none";
        }
    };

});



/*table */

function isitable() {
    // Mendapatkan referensi elemen tabel
    var table = document.querySelector('.table-users table');

    // Array data untuk ditambahkan ke tabel
    var data = [
        [1, 'Komputer', 'Rp.5.500.000', '120 Pcs', 'Aset'],
        [2, 'Laptop', 'Rp.7.000.000', '50 Pcs', 'Aset'],
        [3, 'Printer', 'Rp.2.000.000', '30 Pcs', 'Aset'],
        [4, 'Printer', 'Rp.2.000.000', '30 Pcs', 'Aset'],
        [5, 'Printer', 'Rp.2.000.000', '30 Pcs', 'Aset'],
        [6, 'Printer', 'Rp.2.000.000', '30 Pcs', 'Aset'],
        [7, 'Printer', 'Rp.2.000.000', '30 Pcs', 'Aset'],
        [8, 'Printer', 'Rp.2.000.000', '30 Pcs', 'Aset'],
        [9, 'Printer', 'Rp.2.000.000', '30 Pcs', 'Aset'],
        [10, 'Printer', 'Rp.2.000.000', '30 Pcs', 'Aset'],
        [11, 'Printer', 'Rp.2.000.000', '30 Pcs', 'Aset'],
        // Tambahkan data lainnya di sini
    ];

    // Loop untuk menambahkan data ke tabel
    data.forEach(function (rowData) {
        // Membuat elemen <tr> baru
        var row = document.createElement('tr');

        // Loop untuk membuat elemen <td> dan mengisi nilainya
        rowData.forEach(function (cellData) {
            var cell = document.createElement('td');
            cell.textContent = cellData;
            row.appendChild(cell);
        });

        // Menambahkan elemen <tr> ke dalam tabel
        table.appendChild(row);
    });

}
isitable();