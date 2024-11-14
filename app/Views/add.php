<?= $this->extend('template') ?>
<?= $this->section('content') ?>
<section>

<div class="container mt-5"> 
    <h1 class="mb-4">Add a New Candidate</h1>
    <?php if (isset($validation)) : ?>
            <div class="text-danger">
                <?= $validation->listErrors() ?>
            </div>
    <?php endif; ?>
    <form action="/candidates/add" method="post">
        <div class="form-group">
            <label for="firstname">First Name:</label>
            <input type="text" id="firstname" name="firstname" class="form-control small-input">
        </div>
        
        <div class="form-group">
            <label for="lastname">Last Name:</label>
            <input type="text" id="lastname" name="lastname" class="form-control small-input">
        </div>
        
        <div class="form-group">
            <label for="date_of_birth">Date of Birth:</label>
            <input type="date" id="date_of_birth" name="date_of_birth" class="form-control small-input">
        </div>
        
        <div class="form-group">
            <label for="active">Active:</label>
            <select id="active" name="active" class="form-control small-input" required>
                <option value="" disabled selected>Select an option</option>
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="cover_text">Cover Text:</label>
            <textarea id="cover_text" name="cover_text" class="form-control" rows="4"></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary mt-1 mb-1">Submit</button>
    </form>
</div>
    

</section>
<?= $this->endSection() ?>