<div class="form-group">
    <label for="kode">Kode</label>
    <input type="text" name="kode" class="form-control" value="{{old('kode') ?? $anggota->kode ?? '' }}" id="kode">
</div>

<div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" name="nama" class="form-control" value="{{old('nama') ?? $anggota->nama ?? '' }}" id="nama">
</div>
<div class="form-group">
    <label for="">Departemen</label>
    <select name="departemen" id="departemen" class="form-control">
        <option value="">-- Pilih --</option>
        <option value="Personalia">Umum & Personalia</option>
        <option value="Akunting">Akunting</option>
        <option value="Marketing">Marketing</option>
        <option value="Engineering">Engineering</option>
        <option value="Logistik">Logistik</option>
        <option value="Dyeing Finishing">Dyeing Finishing</option>
        <option value="Weaving">Weaving</option>
    </select>
</div>

<div class="form-group">
    <label for="">Bagian</label>
    <select name="bagian" id="bagian" class="form-control">
        <option value="">-- Pilih --</option>
        <option value="Operator">Operator</option>
        <option value="Staff">Staff</option>
        <option value="Karu">Karu</option>
        <option value="Kasi">Kasi</option>
    </select>
</div>
