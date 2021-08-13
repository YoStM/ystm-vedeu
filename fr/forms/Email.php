<?php
class Email
{
    const NAME_LIMIT = 3;
    const MESSAGE_LIMIT = 10;
    private $name;
    private $email;
    private $message;

    public function __construct(string $name, string $email, string $message)
    {
        $this->name = $name;
        $this->email = $email;
        $this->message = $message;
    }

    public function getErrors()
    {
        $errors = [];
        if (strlen($this->name) < self::NAME_LIMIT) {
            $errors['name'] = "Votre nom doit contenir un minimun de 3 caractères.";
        }
        if (strlen($this->message) < self::MESSAGE_LIMIT) {
            $errors['message'] = "Votre message doit contenir un minimun de 10 caractères.";
        }
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "Merci d'entrée une adresse email valide.";
        }
        return $errors;
    }

    public function isValid()
    {
        return empty($this->getErrors());
    }
}
