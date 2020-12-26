<form class="col s12" action="<?= base_url('home/survey') ?>" method="POST">
    <?= csrf_field(); ?>
    <div class="row">
        <div class="input-field col s12">
            <input id="NIM" name="nim" type="text" class="validate" required>
            <label for="NIM">NIM</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <input id="nama" name="nama" type="text" class="validate" required>
            <label for="nama">Nama</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <select name="gender" required>
                <option value="" disabled selected>Silakan Pilih Jenis Kelaminmu</option>
                <option value="laki-laki">Laki-laki</option>
                <option value="perempuan">Perempuan</option>
            </select>
            <label>Jenis Kelamin</label>
        </div>
    </div>
    <div class="row">
        <p>Tahukah anda tentang bahasa pemogramanan PHP ?</p>
        <p>
            <label>
                <input name="p1" value="ya" type="radio" checked />
                <span>ya</span>
            </label>
        </p>
        <p>
            <label>
                <input name="p1" value="tidak" type="radio" />
                <span>tidak</span>
            </label>
        </p>
    </div>
    <div class="row">
        <p>Pernahkan anda membuat aplikasi menggunakan PHP ?</p>
        <p>
            <label>
                <input name="p2" value="ya" type="radio" checked />
                <span>ya</span>
            </label>
        </p>
        <p>
            <label>
                <input name="p2" value="tidak" type="radio" />
                <span>tidak</span>
            </label>
        </p>
    </div>
    <div class="row">
        <p>Tahukah anda PHP terdiri dari banyak framework ?</p>
        <p>
            <label>
                <input name="p3" value="ya" type="radio" checked />
                <span>ya</span>
            </label>
        </p>
        <p>
            <label>
                <input name="p3" value="tidak" type="radio" />
                <span>tidak</span>
            </label>
        </p>
    </div>
    <div class="row">
        <p>Sebutkan framework yang pernah anda kenali ?</p>
        <p>
            <label>
                <input name="p4" value="tidak pernah" type="radio" checked />
                <span>Tidak Pernah</span>
            </label>
        </p>
        <p>
            <label>
                <input name="p4" value="CodeIgniter" type="radio" />
                <span>Code Igniter</span>
            </label>
        </p>
        <p>
            <label>
                <input name="p4" value="Laravel" type="radio" />
                <span>Laravel</span>
            </label>
        </p>
        <p>
            <label>
                <input name="p4" value="Keduanya" type="radio" />
                <span>Keduanya</span>
            </label>
        </p>
    </div>

    <button type="submit" class="waves-effect waves-light btn">Ikut Survey</button>
</form>