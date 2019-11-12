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
 * Strings for component 'quiz', language 'id', branch 'MOODLE_37_STABLE'
 *
 * @package   quiz
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addingquestions'] = 'Bagian dari halaman ini adalah tempat di mana Anda mengatur database pertanyaan Anda. Pertanyaan disimpan didalam kategori untuk membantu Anda mengorganisirnya, dan dapat digunakan oleh  kuis apapun di dalam kursus Anda atau bahkan kursus yang lain jika Anda memilih untuk mem-publikasikannya.<br /><br />Setelah Anda memilih atau membuat suatu kategori, Anda akan dapat membuat atau mengedit pertanyaan. Anda dapat memilih yang manapun dari pertanyaan ini untuk dinambahkan pada kuis di bagian lain dari halaman ini.';
$string['addquestions'] = 'Tambah pertanyaan';
$string['addquestionstoquiz'] = 'Tambahkan pertanyaan ke kuis saat ini';
$string['addselectedtoquiz'] = 'Tambahkan pilihan ke kuis';
$string['allowreview'] = 'Bolehkan ulasan';
$string['alreadysubmitted'] = 'Sepertinya Anda telah mencoba mengirim tugas ini';
$string['alwaysavailable'] = 'Selalu tersedia';
$string['answer'] = 'Jawab';
$string['answerhowmany'] = 'Satu atau lebih jawaban?';
$string['answersingleno'] = 'Banyak jawaban diperbolehkan';
$string['answersingleyes'] = 'Hanya satu jawaban';
$string['answertoolong'] = 'Jawaban terlalu panjang setelah bari {$a} (maks. 255 karakter)';
$string['aon'] = 'Format AON';
$string['attempt'] = 'kali percobaan menjawab {$a}';
$string['attemptfirst'] = 'Nilai Pertama';
$string['attemptincomplete'] = 'Percobaan (oleh {$a}) belum diselesaikan.';
$string['attemptlast'] = 'Nilai Terakhir';
$string['attemptquiznow'] = 'Mencoba kuis sekarang';
$string['attempts'] = 'kali percobaan menjawab';
$string['attemptsallowed'] = 'Percobaan menjawab diperbolehkan';
$string['attemptsunlimited'] = 'Percobaan menjawab tidak dibatasi';
$string['backtoquiz'] = 'Kembali ke edit kuis';
$string['bestgrade'] = 'Tingkat terbaik';
$string['calculatedquestion'] = 'Kalkulasi pertanyaan pada baris {$a} tidak didukung. Pertanyaan akan diabaikan';
$string['caseno'] = 'Tidak, huruf besar/kecil tidak masalah';
$string['casesensitive'] = 'Penulisan huruf besar/kecil berpengaruh';
$string['caseyes'] = 'Ya, huruf besar/kecil harus cocok';
$string['correctanswer'] = 'Jawaban benar';
$string['correctanswers'] = 'Jawaban benar';
$string['corrresp'] = 'Respon Benar';
$string['countdown'] = 'Hitung Mundur';
$string['countdownfinished'] = 'Kuis telah ditutup, Anda harus mengirimkan jawaban Anda sekarang.';
$string['countdowntenminutes'] = 'Kuis akan ditutup dalam 10 menit.';
$string['coursetestmanager'] = 'Format Pengaturan Test Kursus';
$string['createmultiple'] = 'Membuat Banyak Pertanyaan';
$string['createnewquestion'] = 'Buat pertanyaan baru';
$string['custom'] = 'Format buatan sendiri';
$string['daysavailable'] = 'Hari tersedia';
$string['default'] = 'Default';
$string['defaultgrade'] = 'Nilai pertanyaan default';
$string['defaultinfo'] = 'Kategori default untuk pertanyaan.';
$string['deleteattemptcheck'] = 'Anda yakin ingin mengahapus secara permanen percobaan ini?';
$string['description'] = 'Keterangan';
$string['eachattemptbuildsonthelast'] = 'Tiap percobaan dibangun pada saat terakhir';
$string['editcategories'] = 'Ubah kategori';
$string['editingquestion'] = 'Edit pertanyaan';
$string['editingquiz'] = 'Edit kuis';
$string['editquestions'] = 'Mengubah pertanyaan';
$string['false'] = 'Salah';
$string['feedback'] = 'Saran';
$string['fileformat'] = 'Format file';
$string['filloutoneanswer'] = 'Anda harus memilih paling tidak satu kemungkinan jawaban.  Jawaban yang dikosongkan tidak akan dinilai.';
$string['filloutthreequestions'] = 'Anda harus mengisi paling sedikit 3 pertanyaan.
Pertanyaan yang dikosongkan tidak akan digunakan.';
$string['fillouttwochoices'] = 'Anda harus memilih paling tidak dua pilihan.  Pilihan yang dikosongkan tidak akan dinilai.';
$string['fractionsaddwrong'] = 'Jumlah nilai tingkat yang Anda pilih tidak cukup 100%
<br />Tetapi, jumlah nilainya {$a}%
<br />Anda ingin kembali untuk memperbaiki pertanyaan ini?';
$string['fractionsnomax'] = 'Satu dari jawaban harus bernilai 100%, jadi
<br />memungkinkan untuk mendapat tingkatan tertinggi pada pertanyaan ini.
<br />Anda ingin kembali untuk memperbaiki pertanyaan ini?';
$string['gradeaverage'] = 'Nilai Rata-rata';
$string['gradehighest'] = 'Nilai Tertinggi';
$string['grademethod'] = 'Metode penilaian';
$string['grademethod_help'] = '<P ALIGN=CENTER><B>Metode Penilaian</B></P>

<P>Jika metode penilaian diperbolehkan, ada beberapa cara yang berbeda yang
dapat Anda gunakan bagi penilaian untuk melakukan perhitungan pada nilai akhir
siswa untuk kuis tersebut.

<P><B>Nilai Tertinggi</B><P>
<UL>
<P>Nilai akhir diambil dari nilai yang tertinggi (terbaik) untuk setiap usaha
menjawab.
</UL>

<P><B>Nilai Rata-Rata</B><P>
<UL>
<P>Nilai akhir diambil dari nilai rata-rata (secara sederhana) dari semua usaha
menjawab.
</UL>

<P><B>Nilai Pertama</B><P>
<UL>
<P>Nilai akhir diambil dari nilai pada usaha menjawab yang pertama (usaha
menjawab lainnya akan diabaikan).
</UL>

<P><B>Nilai Terakhir</B><P>
<UL>
<P>Nilai akhir diambil dari hanya dari nilai yang didapatkan paling terakhir.
</UL>';
$string['guestsno'] = 'Maaf, pengunjung tamu tidak diperbolehkan menjawab kuis';
$string['howquestionsbehave_desc'] = 'Setelan bawaan untuk bagaimana perilaku pertanyaan dalam kuis.';
$string['imagedisplay'] = 'Gambar untuk ditampilkan';
$string['importquestions'] = 'Impor pertanyaan dari file';
$string['indivresp'] = 'tanggapan perorangan untuk masing-masing item';
$string['introduction'] = 'Perkenalan';
$string['listitems'] = 'Daftar dari item pada kuis';
$string['marks'] = 'Tanda';
$string['match'] = 'Cocok';
$string['matchanswer'] = 'Jawaban Cocok';
$string['missingcorrectanswer'] = 'Jawaban yang benar harus ditetapkan';
$string['modulename'] = 'Kuis';
$string['modulenameplural'] = 'Kuis';
$string['multichoice'] = 'Pilihan Ganda';
$string['name'] = 'Nama';
$string['noanswers'] = 'Tidak ada jawaban terpilih!';
$string['noattempts'] = 'Tidak ada yang mencoba kuis ini';
$string['nomoreattempts'] = 'Tidak ada lagi kesempatan untuk menjawab kuis ini';
$string['noquestions'] = 'Belum ada pertanyaan yang dimasukkan';
$string['noresponse'] = 'Tidak ada tanggapan';
$string['noreview'] = 'Anda tidak diperbolehkan memberi ulasan pada kuis ini';
$string['noreviewuntil'] = 'Anda tidak diperbolehkan memberi ulasan pada kuis ini sampai {$a}';
$string['notenoughsubquestions'] = 'Sub=Pertanyaan yang ditetapkan tidak cukup!br>Anda ingin kembali untuk memperbaiki pertanyaan ini?';
$string['numerical'] = 'Numerik';
$string['percentcorrect'] = 'persen benar';
$string['pluginname'] = 'Kuis';
$string['publish'] = 'Publikasi';
$string['qti'] = 'Format IMS QTI';
$string['question'] = 'Pertanyaan';
$string['questionbankmanagement'] = 'Pengelolaan bank soal';
$string['questioninuse'] = 'Pertanyaan \'{$a}\' sedang digunakan:';
$string['questionname'] = 'Nama pertanyaan';
$string['questions'] = 'Pertanyaan';
$string['quizavailable'] = 'Kuis tersedia sampai: {$a}';
$string['quizclose'] = 'Kuis diakhiri';
$string['quizclosed'] = 'Kuis ditutup pada {$a}';
$string['quizcloses'] = 'Kuis ditutup';
$string['quizopen'] = 'Kuis dimulai';
$string['random'] = 'Aturan Random';
$string['randomcreate'] = 'Buat Pertanyaan Acak';
$string['readytosend'] = 'Anda akan mengirimkan keseluruhan kuis Anda untuk dinilai. Anda yakin akan melanjutkannya?';
$string['recentlyaddedquestion'] = 'Pertanyaan yang terakhir ditambahkan!';
$string['regrade'] = 'Nilai ulang semua usaha menjawab test';
$string['regradecomplete'] = 'Semua usaha menjawab test telah dinilai ulang';
$string['regradecount'] = '{$a->changed} diganti dari {$a->attempt} usaha menjawab telah diganti';
$string['rename'] = 'Ganti nama';
$string['report'] = 'Laporan';
$string['reportfullstat'] = 'Rincian Statistik';
$string['reportmulti_percent'] = 'Multi-Persen';
$string['reportmulti_q_x_student'] = 'Pilihan Multi-Siswa';
$string['reportmulti_resp'] = 'Respon Individu';
$string['reportoverview'] = 'Tinjauan';
$string['reportregrade'] = 'Percobaan Penilaian Ulang';
$string['reportsimplestat'] = 'Statistik sederhana';
$string['review'] = 'Ulasan';
$string['save'] = 'Simpan';
$string['savegrades'] = 'Simpan Nilai';
$string['savemyanswers'] = 'Simpan jawaban saya';
$string['savequiz'] = 'Simpan keseluruhan kuis ini';
$string['score'] = 'Nilai mentah';
$string['select'] = 'Pilih';
$string['selectall'] = 'Pilih semua';
$string['shortanswer'] = 'Isian';
$string['show'] = 'Tampilkan';
$string['showcorrectanswer'] = 'Pada masukan, tampilkan jawaban yang benar?';
$string['showfeedback'] = 'Setelah menjawab, tampilkan masukan?';
$string['shuffleanswers'] = 'Kocok jawaban';
$string['shufflequestions'] = 'Kocok pertanyaan';
$string['time'] = 'Waktu';
$string['timecompleted'] = 'Selesai';
$string['timeleft'] = 'Waktu tersisa';
$string['timetaken'] = 'Waktu yang digunakan';
$string['toomanyrandom'] = 'Jumlah pertanyaan acak yang diperlukan lebih banyak dari isi kategori ini! ({$a})';
$string['true'] = 'Benar';
$string['truefalse'] = 'Benar/Salah';
$string['type'] = 'Jenis';
$string['unknowntype'] = 'Jenis pertanyaan tidak didukung pada baris {$a}. Pertanyaan ini akan diabaikan';
$string['viewallanswers'] = 'Tampilkan {$a} kuis yang selesai';
$string['viewallreports'] = 'Tampilkan laporan untuk {$a} percobaan';
$string['withsummary'] = 'dengan Ringkasan';
$string['yourfinalgradeis'] = 'Nilai akhir Anda untuk kuis ini adalah {$a}';
