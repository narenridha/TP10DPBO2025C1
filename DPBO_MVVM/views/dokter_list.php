<?php
require_once 'views/template/header.php';
?>

<h2 class="text-xl mb-4">Dokter List</h2>
<a href="index.php?entity=dokter&action=add" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Add Dokter</a>
<table class="w-full border">
    <tr class="bg-gray-200">
        <th class="border p-2">Name</th>
        <th class="border p-2">Poli</th>
        <th class="border p-2">Jadwal</th>
        <th class="border p-2">Actions</th>
    </tr>
    <?php foreach ($dokterList as $dokter): ?>
    <tr>
        <td class="border p-2"><?php echo $dokter['nama']; ?></td>
        <td class="border p-2"><?php echo $dokter['nama_poli']; ?></td>
        <td class="border p-2"><?php echo $dokter['jam_jadwal']; ?></td>
        <td class="border p-2">
            <a href="index.php?entity=dokter&action=edit&id=<?php echo $dokter['id']; ?>" class="text-blue-500">Edit</a>
            <a href="index.php?entity=dokter&action=delete&id=<?php echo $dokter['id']; ?>" class="text-red-500 ml-2" onclick="return confirm('Are you sure?');">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<?php
require_once 'views/template/footer.php';
?>