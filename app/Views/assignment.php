<?= $this->extend('template') ?>
<?= $this->section('content') ?>
<section>
    <h1>PHP Assignment</h1>

    <p>The goal of this assignment is to successfully create a backoffice tool for storing and retrieving information from the Mysql database. For starters, we are creating a web app that acts like a work agency. We'll begin by storing candidates. Then, we'll add more functionality.</p>

    <p>Initially, you should create a database and store the db connection info in <code>app\Config\Database.php</code>. Then, run the migrations using <code>php spark migrate</code>.</p>

    <h2>Goal #1</h2>

    <ol>
        <li>Create the "Add new candidate" page. The fields of the form can be found under <code>app\Models\User.php</code> (table columns).</li>
        <li>Update the dir page that shows all users.</li>
    </ol>

</section>
<?= $this->endSection() ?>