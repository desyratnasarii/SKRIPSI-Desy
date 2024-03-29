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
 * Strings for component 'auth_ldap', language 'id', branch 'MOODLE_37_STABLE'
 *
 * @package   auth_ldap
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_ldap_bind_dn'] = 'Jika Anda ingin menggunakan bind-user untuk mencari pengguna, tentukanlah disini. Misalnya \'cn=ldapuser,ou=public,o=org\'';
$string['auth_ldap_bind_pw'] = 'Password untuk bind-user.';
$string['auth_ldap_contexts'] = 'Daftar dari konteks dimana pengguna dilokasikan. Pisahkan konteks lainnya dengan \';\'. Sebagai contoh: \'ou=users,o=org; ou=others,o=org\'';
$string['auth_ldap_create_context'] = 'Jika Anda mengaktifkan pembuatan pengguna dengan konfirmasi email, tentukan keadaan bagaimana pengguna akan dibuat. Keadaan ini harus berbeda dengan pengguna lainnya untuk menanggulangi bahaya keamanan. Anda tidak perlu menambahkan keadaan ini pada pemakaian variabel ldap_context, Moodle akan mencari pengguna secara otomatis dari keadaan ini.';
$string['auth_ldap_creators'] = 'daftar grup dari anggota yang diperbolehkan untuk membuat kursus baru. Pisahkan grup-grup dengan \';\'. Biasanya sesuatu seperti \'cn=guru,ou=staf,o=orgsaya\'';
$string['auth_ldapdescription'] = 'Metode ini melakukan otentikasi melalui server LDAP eksternal.
                                  Jika nama pengguna dan password yang dimasukkan adalah sah, Moodle akan membuat pengguna baru
                                  dimasukkan pada databasenya. Modul ini dapat membaca atribut pengguna dari LDAP dan memasukkan lebih dulu
                                  field-field yang dibutuhkan pada Moodle.  Untuk login selanjutnya hanya nama pengguna dan
                                  password yang diperiksa.';
$string['auth_ldapextrafields'] = 'Field-field ini adalah pilihan.  Anda dapat memilih untuk memasukkan lebih dulu beberapa field-field pengguna dari Moodle dengan informasi dari <b>field-field LDAP</b> yang Anda tentukan disini. <br />Jika Anda mengosongkan field-field ini, maka tidak ada yang ditransfer dari LDAP dan default Moodle yang akan digunakan.<br />Pada kasus lain, pengguna akan dapat mengedit semua field-field ini setelah mereka login.';
$string['auth_ldap_host_url'] = 'Tentukan host LDAP pada form-URL  seperti \'ldap://ldap.myorg.com/\' or \'ldaps://ldap.myorg.com/\'';
$string['auth_ldap_memberattribute'] = 'Tentukan atribut keanggotaan anggota, jika pengguna adalah anggota grup. Biasanya \'anggota\'';
$string['auth_ldap_search_sub'] = 'Masukkan nilai &lt;&gt; 0 jika Anda ingin untuk mencari pengguna dari sub-konteks.';
$string['auth_ldap_update_userinfo'] = 'Perbaharui informasi pengguna (nama depan, namaakhir, alamat..) dari LDAP ke Moodle. Lihat pada /auth/ldap/attr_mappings.php untuk informasi pemetaannya';
$string['auth_ldap_user_attribute'] = 'Attribut yang dugunakan untuk nama/cari pengguna. Biasanya \'cn\'.';
$string['pluginname'] = 'Gunakan server LDAP';
