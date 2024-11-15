<?= $this->extend('template') ?>
<?= $this->section('content') ?>
<section>

<div class="container mt-5"> 
    <h1 class="mb-4"><?= $title ?></h1>
    <?php if (isset($validation)) : ?>
            <div class="text-danger">
                <?= $validation->listErrors() ?>
            </div>
    <?php endif; ?>
    <form action="/candidates/add" method="post">
        <div class="form-group">
            <label for="firstname">First Name:</label>
            <input type="text" id="firstname" name="firstname" class="form-control small-input" value=<?= $firstname ?>>
        </div>
        
        <div class="form-group">
            <label for="lastname">Last Name:</label>
            <input type="text" id="lastname" name="lastname" class="form-control small-input" value=<?= $lastname ?>>
        </div>
        
        <div class="form-group">
            <label for="date_of_birth">Date of Birth:</label>
            <input type="date" id="date_of_birth" name="date_of_birth" class="form-control small-input" value=<?= $date_of_birth ?>>
        </div>
        
        <div class="form-group">
            <label for="active">Active:</label>
            <select id="active" name="active" class="form-control small-input">
                <?php if ($active == 1) : ?>
                    <option value="1" selected>Yes</option>
                    <option value="0">No</option>
                <?php elseif ($active == 0) : ?>
                    <option value="1">Yes</option>
                    <option value="0" selected>No</option>
                <?php else : ?>
                    <option value="" disabled selected>Select an option</option>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                <?php endif ; ?>
            </select>
        </div>
        
        <div class="form-group">
            <label for="cover_text">Cover Text:</label>
            <textarea id="cover_text" name="cover_text" class="form-control" rows="4"><?= $cover_text ?></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary mt-1 mb-1">Submit</button>
    </form>
</div>
    

</section>
<?= $this->endSection() ?>