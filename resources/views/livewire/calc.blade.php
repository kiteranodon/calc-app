<?php

use function Livewire\Volt\{state, mount};

state(['number1', 'operator', 'number2', 'calcs']);

mount(function () {
    //足し算
    if ($this->operator == 'addition') {
        $this->operator = '+';
        $this->calcs = $this->number1 + $this->number2;
        //引き算
    } elseif ($this->operator == 'subtraction') {
        $this->operator = '-';
        $this->calcs = $this->number1 - $this->number2;
        //掛け算
    } elseif ($this->operator == 'multiplication') {
        $this->operator = '✕';
        $this->calcs = $this->number1 * $this->number2;
        //割り算
    } elseif ($this->operator == 'division') {
        $this->operator = '÷';
        $this->calcs = $this->number1 / $this->number2;
        //その他不明瞭な演算子
    } else {
        $this->operator = '？';
        $this->calcs = '無効な演算子です';
    }
});

?>

<div>
    <h1>計算結果</h1>
    <p>{{ $number1 }} {{ $operator }} {{ $number2 }} = {{ $calcs }}</p>
</div>
