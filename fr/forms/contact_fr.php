<?php
?>
<?php if (!empty($errors)) : ?>
    <div class="alert alert-warning alert-dismissible text-center" role="alert" id="liveAlert">
        Formulaire invalide !
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif ?>
<?php if ($success) : ?>
    <div class="alert alert-success alert-dismissible text-center" role="alert" id="liveAlert">
        Votre message a bien été transmis !
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <section class="bg-light p-5 text-center">
        <p class="fs-3">Je vais y répondre au plus tôt.</p>
        <div class="container">
            <p>En attendant, je vous invite à visiter mon profil<br /> <?= linkTo("https://www.linkedin.com/in/yohan-saint-martin-b7068151/", "LinkedIn", "fs-3 link-primary", true) ?><br /> ou à explorer le code source de ce site, sur mon profil <br /><?= linkTo("https://github.com/YoStM/ystm-vedeu", "Github", "fs-3 link-primary", true) ?>.</p>
            <?= linkTo("/", "Revenir à la page d'accueil", "btn btn-outline-secondary") ?>
        </div>
    </section>
<?php else : ?>
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
<?php endif ?>