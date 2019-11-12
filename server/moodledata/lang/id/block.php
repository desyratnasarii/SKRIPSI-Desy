<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'block', language 'id', branch 'MOODLE_37_STABLE'
 *
 * @package   block
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addtodock'] = 'Pindahkan ini ke Dok';
$string['anypagematchingtheabove'] = 'Setiap halaman yang cocok dengan di atas';
$string['appearsinsubcontexts'] = 'Muncul di sub-konteks';
$string['assignrolesinblock'] = 'Tetapkan peran di blok {$a}';
$string['blocksettings'] = 'Pengaturan blok';
$string['bracketfirst'] = '{$a} (pertama)';
$string['bracketlast'] = '{$a} (terakhir)';
$string['configureblock'] = 'Konfigurasi blok {$a}';
$string['contexts'] = 'Halaman konteks';
$string['contexts_help'] = 'Konteks adalah tipe yang lebih spesifik dari halaman dimana blok ini dapat ditampilkan dalam lokasi asli blok. Anda akan memiliki beberapa opsi berbeda disini bergantung pada lokasi asli blok dan lokasi anda sekarang. Contoh, anda dapat membatasi blok hanya untuk muncul pada halaman forum pada kursus dengan menambahkan blok ke hanya muncul pada halaman forum pada kursus dengan menambahkan blok pada kursus (membuatnya muncul pada semua subhalaman), kemudian pergi ke forum dan menyunting pengaturan blok lagi untuk membatasi tampilan menjadi hanya halaman forum saja.';
$string['createdat'] = 'Lokasi blok asli';
$string['createdat_help'] = 'Lokasi asli blok adalah dimana blok pertama kali dibuat. Pengaturan blok dapat menyebabkannya muncul pada lokasi lain (konteks) dalam lokasi asli. Contoh, sebuah blok yang dibuat pada halaman kursus dapat ditampilkan pada aktifitas dalam kursus tersebut. Blok yang dibuat pada halaman depan dapat ditampilkan diseluruh situs.';
$string['defaultregion'] = 'Wilayah default';
$string['defaultregion_help'] = 'Tema dapat mendefinisikan satu atau lebih wilayah blok yang dinamai dimana blok ditampilkan. Pengaturan ini mendefinisikan dimana anda ingin blok ini muncul sebagai pengaturan awal. Wilayah tersebut dapat ditimpa pada halaman yang spesifik apabila diperlukan.';
$string['defaultweight'] = 'Bobot pengaturan awal';
$string['defaultweight_help'] = 'Bobot pengaturan awal memungkinkan anda untuk memilih secara kasar dimana anda ingin munculkan blok pada wilayah yang dipilih, entah pada bagian atas atau bawah. Lokasi final diperhitungkan dari semua blok pada wilayah tersebut (contohnya, hanya satu blok yang dapat berada diatas). Bilangan ini dapat ditimpa pada halaman yang spesifik apabila diperlukan.';
$string['deleteblock'] = 'Hapus {$a} blok?';
$string['deleteblockcheck'] = 'Apakah anda yakin untuk menghapus blok berjudul {$a}?';
$string['deleteblockwarning'] = 'Anda akan menghapus blok yang muncul ditempat lain.
Lokasi asli blok: {$a->location}
Tipe tampilkan pada halaman: {$a->pagetype}
Anda yakin untuk melanjutkan?';
$string['deletecheck'] = 'Hapus {$a} blok?';
$string['dockblock'] = 'Dock {$a} blok';
$string['hideblock'] = 'Sembunyikan {$a} blok';
$string['hidedockpanel'] = 'Sembunyikan panel dok';
$string['hidepanel'] = 'Sembunyikan panel';
$string['moveblock'] = 'Pindahkan blok {$a}';
$string['moveblockafter'] = 'Pindahkan blok ke setelah {$a} blok';
$string['moveblockbefore'] = 'Pindahkan blok ke sebelum {$a} blok';
$string['moveblockinregion'] = 'Pindahkan blok ke daerah {$a}';
$string['movingthisblockcancel'] = 'Memindahkan blok ini ({$a})';
$string['onthispage'] = 'Pada halaman ini';
$string['pagetypes'] = 'Tipe-tipe halaman';
$string['pagetypewarning'] = 'Tipe halaman yang sebelumnya telah dispesifikasikan tidak lagi dapat dipilih. Silakan pilih tipe halaman yang paling cocok dibawah ini.';
$string['region'] = 'Wilayah';
$string['restrictpagetypes'] = 'Tampilkan pada jenis halaman';
$string['showblock'] = 'Tampilkan {$a} blok';
$string['showoncontextandsubs'] = 'Tampilkan pada \'{$a}\' dan semua halaman didalamnya';
$string['showoncontextonly'] = 'Tampilkan pada \'{$a}\'  saja';
$string['showonentiresite'] = 'Tampilkan pada seluruh situs';
$string['showonfrontpageandsubs'] = 'Tampilkan pada halaman depan dan halaman apapun yang ditambahkan ke halaman depan';
$string['showonfrontpageonly'] = 'Tampilkan pada halaman depan saja';
$string['subpages'] = 'Pilih halaman';
$string['thisspecificpage'] = 'Halaman tertentu';
$string['undockall'] = 'Undock semua';
$string['undockblock'] = 'Undock {$a} blok';
$string['undockitem'] = 'Undock butir ini';
$string['visible'] = 'Terlihat';
$string['weight'] = 'Bobot';
$string['wherethisblockappears'] = 'Dimana blok ini muncul';
