<?php
require_once 'views/template/header.php';
?>

<h2 class="text-xl mb-4"><?php echo isset($dokter) ? 'Edit Dokter' : 'Add Dokter'; ?></h2>
<form action="index.php?entity=dokter&action=<?php echo isset($dokter) ? 'update&id=' . $dokter['id'] : 'save'; ?>" method="POST" class="space-y-4">
    <div>
        <label class="block">Name:</label>
        <input type="text" name="name" value="<?php echo isset($dokter) ? $dokter['nama'] : ''; ?>" class="border p-2 w-full" required>
    </div>
    <div>
        <label class="block">Poli:</label>
        <select name="poli_id" class="border p-2 w-full" required>
            <?php foreach ($polis as $poli): ?>
            <option value="<?php echo $poli['id']; ?>" <?php echo isset($dokter) && $dokter['poli_id'] == $poli['id'] ? 'selected' : ''; ?>><?php echo $poli['nama_poli']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div>
        <label class="block">Jadwal:</label>
        <select name="jadwal_id" class="border p-2 w-full" required>
            <?php foreach ($jadwals as $jadwal): ?>
            <option value="<?php echo $jadwal['id']; ?>" <?php echo isset($dokter) && $dokter['jadwal_id'] == $jadwal['id'] ? 'selected' : ''; ?>><?php echo $jadwal['jam_jadwal']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Save</button>
</form>

<?php
require_once 'views/template/footer.php';
?>