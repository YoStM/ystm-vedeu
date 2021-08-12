<form action="contact.php" method="POST" class="container">
    <div class="mx-auto col-lg-8 col-md-10 col-sm-12">
        <div class="row justify-content-around">
            <label for="name" class="col-lg-6 col-md-6 col-sm-11 d-sm-block">
                <p>Nom :</p>
                <input type="text" name="name" id="name" class="form-control form-control-lg" required />
            </label>
            <label for="name" class="col-lg-6 col-md-6 col-sm-11 d-sm-block">
                <p>eMail :</p>
                <input type="text" name="name" id="name" class="form-control form-control-lg" required />
            </label>
        </div>
        <label for="name" class="mx-auto d-block col-lg-12 col-md-12 col-sm-11 my-5">
            <p>Message :</p>
            <textarea name="message" id="message" class="form-control form-control-lg" rows="5" required></textarea>
        </label>
        <button type="submit" class="mx-auto d-block btn btn-lg btn-success">Envoyer !</button>
    </div>
</form>