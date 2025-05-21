<?php
require_once 'views/template/header.php';
?>

<h2 class="text-xl mb-4"><?php echo isset($jadwal) ? 'Edit Jadwal' : 'Add Jadwal'; ?></h2>
<form action="index.php?entity=jadwal&action=<?php echo isset($jadwal) ? 'update&id=' . $jadwal['id'] : 'save'; ?>" method="POST" class="space-y-4">
    <div>
        <label class="block">Jadwal Name:</label>
        <input type="text" name="jam_jadwal" value="<?php echo isset($jadwal) ? $jadwal['jam_jadwal'] : ''; ?>" class="border p-2 w-full" required>
    </div>
    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Save</button>
</form>

<?php
require_once 'views/template/footer.php';
?>