// konfirmasi hapus data
function konfirmasiHapus() {
    return confirm("Yakin mau hapus data ini?");
}

// alert setelah simpan / update
function suksesPesan(pesan) {
    alert(pesan);
}

// efek hover tabel (JS, bukan CSS)
document.addEventListener("DOMContentLoaded", function () {
    const rows = document.querySelectorAll("table tbody tr");

    rows.forEach(row => {
        row.addEventListener("mouseenter", () => {
            row.style.backgroundColor = "#cfe2ff";
        });
        row.addEventListener("mouseleave", () => {
            row.style.backgroundColor = "";
        });
    });
});
