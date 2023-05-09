<section class="casing-table-data">
    <table class="table-data">
        <tr>
            <th class="field-aksi" colspan="6">
                <i class="bi bi-plus-square" onclick="TambahData()"></i>
                <i class="bi bi-pencil-square" onclick="EditData()"></i>
                <i class="bi bi-trash" onclick="HapusData()"></i>
                <i class="bi bi-download"></i>
                <i class="bi bi-upload"></i>
                <i class="bi bi-clipboard"></i>
                <i class="bi bi-clipboard-check"></i>
                <i class="bi bi-window"></i>
                <i class="bi bi-arrow-clockwise"></i>
                <select name="list-table" class="list-table" id="">
                    <option value="">Barang</option>
                    <option value="">Tanah</option>
                    <option value="">Bangunan</option>
                    <option value="">Surat Tanah</option>
                </select>
            </th>
        </tr>
        <tr></tr>
        <tr>
            <th class="field-title" id="pilih-semua"><input type="checkbox" class="pilih-semua"></th>
            <th class="field-title">No <i class="bi bi-caret-right"></i></th>
            <th class="field-title">Nama <i class="bi bi-caret-right"></i></th>
            <th class="field-title">harga <i class="bi bi-caret-right"></i></th>
            <th class="field-title">Jumlah <i class="bi bi-caret-right"></i></th>
            <th class="field-title">Keterangan <i class="bi bi-caret-right"></i></th>
        </tr>
        <?php foreach ($barang as $item) : ?>
        <tr>
            <td class="pilih-data"><input type="checkbox" class="pilih"></td>
            <td class="field-data">
                <?= $item['no']; ?>
            </td>
            <td class="field-data" id="barang-nama">
                <?= $item['nama']; ?>
            </td>
            <td class="field-data">
                <?= $item['harga']; ?>
            </td>
            <td class="field-data">
                <?= $item['jumlah']; ?>
            </td>
            <td class="field-data">
                <?= $item['keterangan']; ?>
            </td>
        </tr>
        <?php endforeach; ?>
        <tr>
            <form action="" method="POST" class="form-barang">
                <td></td>
                <td class="field-input">
                    <input type="text" name="no" id="field-input" placeholder="No" class="barang-no">
                </td>
                <td class="field-input">
                    <input type="text" name="nama" id="field-input" placeholder="Nama" class="barang-nama">
                </td>
                <td class="field-input">
                    <input type="email" name="harga" id="field-input" placeholder="harga">
                </td>
                <td class="field-input">
                    <input type="text" name="jumlah" id="field-input" placeholder="jumlah">
                </td>
                <td class="field-input">
                    <input type="text" name="keterangan" id="field-input" placeholder="keterangan">
                </td>
            </form>
        </tr>
    </table>
</section>