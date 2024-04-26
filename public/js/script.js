document.addEventListener("DOMContentLoaded", function() {
    // Ambil semua elemen dropdown toggle
    var dropdownToggles = document.querySelectorAll('.dropdown-toggle');

    // Loop melalui setiap elemen dropdown toggle
    dropdownToggles.forEach(function(toggle) {
        // Tambahkan event listener untuk setiap elemen dropdown toggle
        toggle.addEventListener('click', function() {
            // Ambil target dropdown menu
            var dropdownMenu = this.nextElementSibling;

            // Periksa apakah dropdown menu sedang ditampilkan atau tidak
            var isDisplayed = dropdownMenu.style.display === 'block';

            // Sembunyikan semua dropdown menu yang ditampilkan sebelumnya
            hideAllDropdownMenus();

            // Jika dropdown menu tidak ditampilkan, tampilkan
            if (!isDisplayed) {
                dropdownMenu.style.display = 'block';
            }
        });
    });

    // Sembunyikan semua dropdown menu
    function hideAllDropdownMenus() {
        var dropdownMenus = document.querySelectorAll('.dropdown-menu');

        // Loop melalui setiap dropdown menu
        dropdownMenus.forEach(function(menu) {
            // Sembunyikan dropdown menu
            menu.style.display = 'none';
        });
    }

    // Sembunyikan dropdown menu saat mengklik di luar dropdown
    document.addEventListener('click', function(event) {
        var isDropdown = event.target.classList.contains('dropdown-toggle');
        if (!isDropdown) {
            hideAllDropdownMenus();
        }
    });
});
