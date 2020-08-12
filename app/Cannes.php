<?php

namespace app;

class Cannes
{

    public function showAward()
    {
        return "Guldpalmen för bästa film";
    }

    public function getAwards()
    // Vår facade-funktion...
    {
        return "Best movie, Best director";
    }
}
