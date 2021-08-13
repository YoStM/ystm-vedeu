<?php
?>
<?php if (!empty($errors)) : ?>
    <p class="alert alert-warning text-center">Formulaire invalide !</p>
<?php endif ?>
<?php if ($success) : ?>
    <p class="alert alert-success text-center">Votre message a bien été transmis, merci !</p>
<?php endif ?>
<form action="" method="POST" class="container p-5">
    <div class="mx-auto col-lg-8 col-md-10 col-sm-12">
        <div class="row justify-content-around">
            <label for="name" class="col-lg-6 col-md-6 col-sm-11 d-sm-block">
                <p>Nom :</p>
                <input value="<?= $_POST['name'] ?? '' ?>" type="text" name="name" id="name" class="form-control form-control-lg <?= isset($errors['name']) ? 'is-invalid' : '' ?>" required />
                <?php if (isset($errors['name'])) : ?>
                    <p class="invalid-feedback"><?= $errors['name'] ?></p>
                <?php endif ?>
            </label>
            <label for="email" class="col-lg-6 col-md-6 col-sm-11 d-sm-block">
                <p>eMail :</p>
                <input value="<?= $_POST['email'] ?? '' ?>" type="text" name="email" id="email" class="form-control form-control-lg <?= isset($errors['email']) ? 'is-invalid' : '' ?>" required />
                <?php if (isset($errors['email'])) : ?>
                    <p class="invalid-feedback"><?= $errors['email'] ?></p>
                <?php endif ?>
            </label>
        </div>
        <label for="message" class="mx-auto d-block col-lg-12 col-md-12 col-sm-11 my-5">
            <p>Message :</p>
            <textarea name="message" id="message" class="form-control form-control-lg <?= isset($errors['message']) ? 'is-invalid' : '' ?>" rows="5" required><?= $_POST['message'] ?? '' ?></textarea>
            <?php if (isset($errors['message'])) : ?>
                <p class="invalid-feedback"><?= $errors['message'] ?></p>
            <?php endif ?>
        </label>
        <button type="submit" class="mx-auto d-block btn btn-lg btn-success">Envoyer !</button>
    </div>
</form>