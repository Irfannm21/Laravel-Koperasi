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
        <option value="Engineering" {{ (old('departemen') || isset($anggota) ? $anggota->departemen : '') == "Engineering" ? 'selected' : ''}}>Engineering</option>
        <option value="Weaving" {{ (old('departemen') || isset($anggota) ? $anggota->departemen : '') == "Weaving" ? 'selected' : ''}}>Weaving</option>
        <option value="Personalia" {{ (old('departemen') || isset($anggota) ? $anggota->departemen : '') == "Umum & Personalia" ? 'selected' : ''}}>Umum & Personalia</option>
        <option value="Akunting" {{ (old('departemen') || isset($anggota) ? $anggota->departemen : '') == "Akunting" ? 'selected' : ''}}>Akunting</option>
        <option value="Marketing" {{ (old('departemen') || isset($anggota) ? $anggota->departemen : '') == "Marketing" ? 'selected' : ''}}>Marketing</option>
        <option value="Logistik" {{ (old('departemen') || isset($anggota) ? $anggota->departemen : '') == "Logistik" ? 'selected' : ''}}>Logistik</option>
        <option value="Dyeing Finishing" {{ (old('departemen') || isset($anggota) ? $anggota->departemen : '') == "Dyeing Finishing" ? 'selected' : ''}}>Dyeing Finishing</option>
    </select>
</div>

<div class="form-group">
    <label for="">Bagian</label>
    <select name="bagian" id="bagian" class="form-control">
        <option value="">-- Pilih --</option>
        <option value="Administrasi" {{ (old('departemen') || isset($anggota) ? $anggota->bagian : '') == "Administrasi" ? 'selected' : ''}}>Administrasi</option>
        <option value="Pengupahan" {{ (old('departemen') || isset($anggota) ? $anggota->bagian : '') == "Pengupahan" ? 'selected' : ''}}>Pengupahan</option>
        <option value="WWT" {{ (old('departemen') || isset($anggota) ? $anggota->bagian : '') == "WWT" ? 'selected' : ''}}>WWT</option>
        <option value="Perijinan" {{ (old('departemen') || isset($anggota) ? $anggota->bagian : '') == "Personalia" ? 'selected' : ''}}>Perijinan</option>
        <option value="Workshop" {{ (old('departemen') || isset($anggota) ? $anggota->bagian : '') == "Workshop" ? 'selected' : ''}}>Workshop</option>
        <option value="Absensi" {{ (old('departemen') || isset($anggota) ? $anggota->bagian : '') == "Absensi" ? 'selected' : ''}}>Absensi</option>
        <option value="Sopir" {{ (old('departemen') || isset($anggota) ? $anggota->bagian : '') == "Sopir" ? 'selected' : ''}}>Sopir</option>
    </select>
</div>
