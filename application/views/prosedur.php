<div class="container" class="prosedur">
    <h2><?php echo $title ?></h2>
    <hr>
    <ol>
        <li>
            <strong>Pendaftaran.</strong> Siswa Baru melakukan pendaftaran pada website Sistem Akademik SMK PTIK, melalui halaman
            <?php echo anchor('pendaftaran', 'Pendaftaran'); ?>.
            Siswa yang sudah mendaftar akan mendapatkan username dan password yang akan digunakan untuk mengisi biodata.
        </li>
        <li><strong>Mengisi biodata.</strong> Melengkapi biodata dengan sebelumnya melakukan login dengan username dan password yang sudah diberikan.</li>
        <li>
            <strong>Mencetak Biodata dan Nilai</strong>. Biodata dan data nilai yang sudah dapat dicetak di kertas A4. Untuk mencetak, masuk ke menu cetak. Menu ini akan tampil jika Anda sudah login.
            Biodata yang sudah dicetak diberikan kepada wali kelas masing masing dan dibawa saat pendaftaran ulang
        </li>
        <li>
            <strong>Verifikasi data.</strong> Setelah melengkapi biodata, siswa haruslah melakukan pendaftaran ulang agar akun yang telah tedaftar bisa dipakai
        </li>
        <li><strong>Jadwal Akademik.</strong> Jadwal Akademik bisa diakses melalui web . jadwal akademik bisa berubah sesuai keadaan. (Lihat <?php echo anchor('jadwal', 'jadwal'); ?>).</li>
    </ol>
</div>