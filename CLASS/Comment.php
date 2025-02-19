<?php
class Comment {
    //a küldő azonosítója
    private $op;
    private $opId;
    private $text;
    private $date;

    public function __construct($op, $opId, $text, $date) {
        $this->op = $op;
        $this->opId = $opId;
        $this->text = $text;
        $this->date = $date;
    }

    public function getOp() {
        return $this->op;
    }

    public function getOpId() {
        return $this->opId;
    }

    public function getText() {
        return $this->text;
    }

    public function getDate() {
        return $this->date;
    }
}
?>