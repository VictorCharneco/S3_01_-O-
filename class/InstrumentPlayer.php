<?php

class InstrumentPlayer
{
    public function play(InstrumentInterface $instrument): void
    {
        $instrument->play();
    }
}
?>