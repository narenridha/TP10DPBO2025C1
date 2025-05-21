<?php
require_once 'viewmodel/DokterViewModel.php';
require_once 'viewmodel/PoliViewModel.php';
require_once 'viewmodel/JadwalViewModel.php';

$entity = isset($_GET['entity']) ? $_GET['entity'] : 'dokter';
$action = isset($_GET['action']) ? $_GET['action'] : 'list';

if ($entity == 'dokter') {
    $viewModel = new DokterViewModel();
    if ($action == 'list') {
        $dokterList = $viewModel->getDokterList();
        require_once 'views/dokter_list.php';
    } elseif ($action == 'add') {
        $polis = $viewModel->getPolis();
        $jadwals = $viewModel->getJadwals();
        require_once 'views/dokter_form.php';
    } elseif ($action == 'edit') {
        $dokter = $viewModel->getDokterById($_GET['id']);
        $polis = $viewModel->getPolis();
        $jadwals = $viewModel->getJadwals();
        require_once 'views/dokter_form.php';
    } elseif ($action == 'save') {
        $viewModel->addDokter($_POST['name'], $_POST['poli_id'], $_POST['jadwal_id']);
        header('Location: index.php?entity=dokter');
    } elseif ($action == 'update') {
        $viewModel->updateDokter($_GET['id'], $_POST['name'], $_POST['poli_id'], $_POST['jadwal_id']);
        header('Location: index.php?entity=dokter');
    } elseif ($action == 'delete') {
        $viewModel->deleteDokter($_GET['id']);
        header('Location: index.php?entity=dokter');
    }
} elseif ($entity == 'poli') {
    $viewModel = new PoliViewModel();
    if ($action == 'list') {
        $poliList = $viewModel->getPoliList();
        require_once 'views/poli_list.php';
    } elseif ($action == 'add') {
        require_once 'views/poli_form.php';
    } elseif ($action == 'edit') {
        $poli = $viewModel->getPoliById($_GET['id']);
        require_once 'views/poli_form.php';
    } elseif ($action == 'save') {
        $viewModel->addPoli($_POST['name']);
        header('Location: index.php?entity=poli');
    } elseif ($action == 'update') {
        $viewModel->updatePoli($_GET['id'], $_POST['name']);
        header('Location: index.php?entity=poli');
    } elseif ($action == 'delete') {
        $viewModel->deletePoli($_GET['id']);
        header('Location: index.php?entity=poli');
    }
} elseif ($entity == 'jadwal') {
    $viewModel = new JadwalViewModel();
    if ($action == 'list') {
        $jadwalList = $viewModel->getJadwalList();
        require_once 'views/jadwal_list.php';
    } elseif ($action == 'add') {
        require_once 'views/jadwal_form.php';
    } elseif ($action == 'edit') {
        $jadwal = $viewModel->getJadwalById($_GET['id']);
        require_once 'views/jadwal_form.php';
    } elseif ($action == 'save') {
        $viewModel->addJadwal($_POST['jadwal_name']);
        header('Location: index.php?entity=jadwal');
    } elseif ($action == 'update') {
        $viewModel->updateJadwal($_GET['id'], $_POST['jadwal_name']);
        header('Location: index.php?entity=jadwal');
    } elseif ($action == 'delete') {
        $viewModel->deleteJadwal($_GET['id']);
        header('Location: index.php?entity=jadwal');
    }
}
?>
