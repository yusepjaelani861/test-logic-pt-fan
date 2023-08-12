<?php

function countSellKaosKaki($socks)
{
    $socksCount = [];
    $pairs = 0;
    $details = [];

    foreach ($socks as $sock) {
        if (!isset($socksCount[$sock])) {
            $socksCount[$sock] = 1;
        } else {
            $socksCount[$sock]++;
        }

        if ($socksCount[$sock] % 2 == 0) {
            $pairs++;

            $details[] = $sock;
        }
    }

    return [
        'pairs' => $pairs,
        'details' => $details
    ];
}

function countWords($sentence)
{
    $sentence = str_replace(['.', ',', '?', '-'], '', $sentence);
    $words = explode(' ', $sentence);
    $wordCount = count($words);

    $details = [];
    foreach ($words as $word) {
        if (preg_match('/[^A-Za-z\s]/', $word)) {
            $wordCount--;
            $details[] = $word;
        }
    }

    return [
        'wordCount' => $wordCount,
        'details' => $details
    ];
}