<div class="col-lg-4 col-md-10">
<section id="halamanNavigation">
    <div class="about-extra">
        <label>Nama</label>
        <input class="form-control search" placeholder="Cari Nama" /><br>
        <label>Tingkat Studi</label>
            <select id="inputStudi" class="form-control">
                <option class="filter" value="semua" selected>Pilih Tingkat Studi</option>
                <option class="filter" value="SD">SD</option>
                <option class="filter" value="SMP">SMP</option>
                <option class="filter" value="SMA">SMA</option>
            </select>
        <br/>
        <label>Bidang Studi</label>
        <select id="mataPelajaran" class="form-control">
                <option class="filter" value="semua" selected>Pilih Mata Pelajaran</option>
        </select>
        <br/>
        <label>Kota</label>
        <select id="inputKota" class="form-control">
                <option class="filter" value="semua" selected>Semua...</option>
                <option class="filter" value="Semarang">Semarang</option>
                <option class="filter" value="Jakarta">Jakarta</option>
                <option class="filter" value="Bandung">Bandung</option>
        </select>
        <br/>
        <form>
        <div class="form-group">
            <label for="rangeHarga">Range Harga</label><br>
            <input type="text" id="inputHarga" class="filter" name="my_range" value="0" /><br>
        </div>
        </form>
</section>
</div>
