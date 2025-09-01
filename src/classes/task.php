<?php

class Task
{
    // Création des attributs privés, titre en string et isDone en booleen (true ou false)
    private string $title;
    private bool $isDone;

    // SETTER TITLE

    public function setTitle($title)
    {
        $this->title = $title;
    }

    // GETTER TITLE
    public function getTitle()
    {
        return $this->title; // ça retourne la valeur de title
    }


    // SETTER ISDONE

    public function setisDone($isDone)
    {
        $this->isDone = $isDone;
    }

    // GETTER ISDONE
    public function getisDone()
    {
        return $this->isDone;
    }



    // Toggle pour inverser la valeur de isDone (si c'est true => false et l'inverse)
    public function toggle()
    {
        if ($this->isDone == true) {
            $this->isDone = false;
        } else {
            $this->isDone = true;
        }
    }


    // Condition état visuel tâche
    public function __toString()
    {
        if ($this->isDone == true) {
            return "✅ " . $this->title;
        } else {
            return "❌ " . $this->title;
        }
    }


    // CONSTRUCT
    public function __construct(string $title)
    {
        $this->setTitle($title);
        $this->isDone = false;
    }
}
