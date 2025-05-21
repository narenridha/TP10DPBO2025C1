<?php
require_once 'views/template/header.php';
?>

<h2 class="text-xl mb-4">Jadwal List</h2>
<a href="index.php?entity=jadwal&action=add" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Add Jadwal</a>
<table class="w-full border">
    <tr class="bg-gray-200">
        <th class="border p-2">Jadwal Name</th>
        <th class="border p-2">Actions</th>
    </tr>
    <?php foreach ($jadwalList as $jadwal): ?>
    <tr>
        <td class="border p-2"><?php echo $jadwal['jam_jadwal']; ?></td>
        <td class="border p-2">
            <a href="index.php?entity=jadwal&action=edit&id=<?php echo $jadwal['id']; ?>" class="text-blue-500">Edit</a>
            <a href="index.php?entity=jadwal&action=delete&id=<?php echo $jadwal['id']; ?>" class="text-red-500 ml-2" onclick="return confirm('Are you sure?');">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<?php
require_once 'views/template/footer.php';
?>