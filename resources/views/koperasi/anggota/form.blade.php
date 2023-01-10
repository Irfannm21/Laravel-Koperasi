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
        <option value="Engineering"  {{ (isset($anggota->departemen) || old('departemen')=='Engineering') ? "selected"  : ''}}>Engineering</option>
        <option value="Weaving" {{ (isset($anggota->departemen) || old('departemen')=='Weaving') ? "selected"  : ''}}>Weaving</option>
        {{-- <option value="Personalia" {{(isset($anggota->departemen)||old('departemen')=='Umum & Personalia') ? 'selected' : '' }}>Umum & Personalia</option>
        <option value="Akunting" {{old('departemen')=='Akunting' ? 'selected' : ''}}>Akunting</option>
        <option value="Marketing" {{old('departemen')=='Marketing' ? 'selected' : ''}}>Marketing</option>
        <option value="Logistik" {{old('departemen')=='Logistik' ? 'selected' : ''}}>Logistik</option>
        <option value="Dyeing Finishing" {{old('departemen')=='Dyeing Finishing' ? 'selected' : ''}}>Dyeing Finishing</option> --}}
    </select>
</div>

<div class="form-group">
    <label for="">Bagian</label>
    <select name="bagian" id="bagian" class="form-control">
        <option value="">-- Pilih --</option>
        <option value="Administrasi" {{old('departemen')=='Administrasi' ? 'selected' : ''}}>Administrasi</option>
        <option value="Pengupahan" {{old('departemen')=='Pengupahan' ? 'selected' : ''}}>Pengupahan</option>
        <option value="WWT" {{old('departemen')=='WWT' ? 'selected' : ''}}>WWT</option>
        <option value="Perijinan" {{old('departemen')=='Perijinan' ? 'selected' : ''}}>Perijinan</option>
        <option value="Workshop" {{old('departemen')=='Workshop' ? 'selected' : ''}}>Workshop</option>
        <option value="Absensi" {{old('departemen')=='Absensi' ? 'selected' : ''}}>Absensi</option>
        <option value="Sopir" {{old('departemen')=='Sopir' ? 'selected' : ''}}>Sopir</option>
    </select>
</div>
