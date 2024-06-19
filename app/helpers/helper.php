<?php

if (!function_exists('formatRupiah')) {
    function formatRupiah($number)
    {
        return 'Rp. ' . number_format($number, 0, ',', '.');
    }
}

if (!function_exists('eventStatus')) {
    function eventStatus($eventDateTime, $forWhat)
    {
        // Ambil waktu sekarang
        $currentTime = now();

        // Hitung selisih waktu antara waktu sekarang dan waktu acara dalam jam
        $hoursDiff = $currentTime->diffInHours($eventDateTime, false); // false untuk mendapatkan selisih dalam jam

        if($forWhat === 'status'){
            // Tentukan status berdasarkan perbandingan waktu
            if ($hoursDiff >= 24) {
                return 'Akan Datang';
            } elseif ($hoursDiff >= 0 && $hoursDiff <= 12) {
                return 'Sedang Berlangsung';
            } else {
                return 'Selesai';
            }
        } elseif($forWhat === 'event'){
            //status berdasarkan perbandingan waktu
            if ($hoursDiff >= 24 || $hoursDiff >= 0 && $hoursDiff <= 12) {
                return '';
            } else {
                return 'disabled';
            }
        } else {
            // Tentukan status berdasarkan perbandingan waktu
            if ($hoursDiff >= 24 || $hoursDiff >= 0 && $hoursDiff <= 12) {
                return 'disabled';
            } else {
                return '';
            }
        }
    }
}
