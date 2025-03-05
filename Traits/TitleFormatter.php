<?php
trait TitleFormatter
{
    public function formatTitle(): void
    {
        $this->title = strtoupper($this->title);
    }
}
