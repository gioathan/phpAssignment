<?= $this->extend('template') ?>
<?= $this->section('content') ?>
<section>

<div class="container mt-5">
    <h1 class="mb-4">Candidates</h1>
    <p><?php echo count($candidates);?> candidates were found.</p>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Date of Birth</th>
                <th scope="col">Active</th>
                <th scope="col">Cover Text</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($candidates as $cand) : ?>
            <tr>
                <td><?= $cand['firstname'] ?></td>
                <td><?= $cand['lastname'] ?></td>
                <td><?= $cand['date_of_birth'] ?></td>
                <td><?= $cand['active'] ?></td>
                <td><?= $cand['cover_text'] ?></td>
                <td>
                    <button class="btn btn-primary btn-sm" onclick="window.location.href='candidates/add/<?php echo $cand['id']; ?>'">Edit</button>
                    <button class="btn btn-danger btn-sm" onclick="window.location.href='candidates/delete/<?php echo $cand['id']; ?>'">Delete</button>
                </td>
                
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

</div>


</section>
<?= $this->endSection() ?>