<?php

class Task
{
    // Création des attributs privés, titre en string et isDone en booleen (true ou false)
    private string $title;
    private bool $isDone;

    // GETTER TITLE
    public function getTitle()
    {
        return $this->title; // ça retourne la valeur de title
    }


    // GETTER ISDONE
    public function isDone()
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
        $this->getTitle($title);
        $this->isDone = false;
    }
}
