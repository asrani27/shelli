<?php

Route::post('/login', 'LoginController@login');
Route::get('/', 'LoginController@checkAuth');
Route::get('/logout', 'LoginController@logout');

Route::group(['middleware' => ['auth', 'role:superadmin']], function () {
    Route::get('/beranda', 'SuperadminController@beranda');
    Route::get('/superadmin/umum/hakim', 'SuperadminController@hakim');
    Route::get('/superadmin/umum/hakim/create', 'SuperadminController@hakimcreate');
    Route::post('/superadmin/umum/hakim/create', 'SuperadminController@hakimstore');
    Route::get('/superadmin/umum/hakim/edit/{id}', 'SuperadminController@hakimedit');
    Route::post('/superadmin/umum/hakim/edit/{id}', 'SuperadminController@hakimupdate');
    Route::get('/superadmin/umum/hakim/delete/{id}', 'SuperadminController@hakimdelete');

    Route::get('/superadmin/umum/jaksa', 'SuperadminController@jaksa');
    Route::get('/superadmin/umum/jaksa/create', 'SuperadminController@jaksacreate');
    Route::post('/superadmin/umum/jaksa/create', 'SuperadminController@jaksastore');
    Route::get('/superadmin/umum/jaksa/edit/{id}', 'SuperadminController@jaksaedit');
    Route::post('/superadmin/umum/jaksa/edit/{id}', 'SuperadminController@jaksaupdate');
    Route::get('/superadmin/umum/jaksa/delete/{id}', 'SuperadminController@jaksadelete');

    Route::get('/superadmin/umum/golongan', 'SuperadminController@golongan');
    Route::get('/superadmin/umum/golongan/create', 'SuperadminController@golongancreate');
    Route::post('/superadmin/umum/golongan/create', 'SuperadminController@golonganstore');
    Route::get('/superadmin/umum/golongan/edit/{id}', 'SuperadminController@golonganedit');
    Route::post('/superadmin/umum/golongan/edit/{id}', 'SuperadminController@golonganupdate');
    Route::get('/superadmin/umum/golongan/delete/{id}', 'SuperadminController@golongandelete');

    Route::get('/superadmin/umum/jabatan', 'SuperadminController@jabatan');
    Route::get('/superadmin/umum/jabatan/create', 'SuperadminController@jabatancreate');
    Route::post('/superadmin/umum/jabatan/create', 'SuperadminController@jabatanstore');
    Route::get('/superadmin/umum/jabatan/edit/{id}', 'SuperadminController@jabatanedit');
    Route::post('/superadmin/umum/jabatan/edit/{id}', 'SuperadminController@jabatanupdate');
    Route::get('/superadmin/umum/jabatan/delete/{id}', 'SuperadminController@jabatandelete');

    Route::get('/superadmin/umum/panitera', 'SuperadminController@panitera');
    Route::get('/superadmin/umum/panitera/create', 'SuperadminController@paniteracreate');
    Route::post('/superadmin/umum/panitera/create', 'SuperadminController@paniterastore');
    Route::get('/superadmin/umum/panitera/edit/{id}', 'SuperadminController@paniteraedit');
    Route::post('/superadmin/umum/panitera/edit/{id}', 'SuperadminController@paniteraupdate');
    Route::get('/superadmin/umum/panitera/delete/{id}', 'SuperadminController@paniteradelete');

    Route::get('/superadmin/daftar/jadwal', 'SuperadminController@daftarPerkara');
    Route::post('/superadmin/daftar/jadwal', 'SuperadminController@storeDaftarPerkara');

    Route::get('/superadmin/perkara/pidana', 'SuperadminController@pidana');
    Route::get('/superadmin/perkara/pidana/hjp/{id}', 'SuperadminController@pidanahjp');
    Route::post('/superadmin/perkara/pidana/hjp/{id}', 'SuperadminController@updatepidanahjp');
    Route::get('/superadmin/perkara/pidana/delete/{id}', 'SuperadminController@pidanadelete');
    Route::get('/superadmin/perkara/pidana/sidang/{id}', 'SuperadminController@lanjutsidang');

    Route::get('/superadmin/perkara/perdata', 'SuperadminController@perdata');
    Route::get('/superadmin/perkara/perdata/hjp/{id}', 'SuperadminController@perdatahjp');
    Route::post('/superadmin/perkara/perdata/hjp/{id}', 'SuperadminController@updateperdatahjp');
    Route::get('/superadmin/perkara/perdata/delete/{id}', 'SuperadminController@perdatadelete');
    Route::get('/superadmin/perkara/perdata/sidang/{id}', 'SuperadminController@lanjutsidang');

    Route::get('/superadmin/perkara/tipikor', 'SuperadminController@tipikor');
    Route::get('/superadmin/perkara/tipikor/hjp/{id}', 'SuperadminController@tipikorhjp');
    Route::post('/superadmin/perkara/tipikor/hjp/{id}', 'SuperadminController@updatetipikorhjp');
    Route::get('/superadmin/perkara/tipikor/delete/{id}', 'SuperadminController@tipikordelete');
    Route::get('/superadmin/perkara/tipikor/sidang/{id}', 'SuperadminController@lanjutsidang');

    Route::get('/superadmin/perkara/phi', 'SuperadminController@phi');
    Route::get('/superadmin/perkara/phi/hjp/{id}', 'SuperadminController@phihjp');
    Route::post('/superadmin/perkara/phi/hjp/{id}', 'SuperadminController@updatephihjp');
    Route::get('/superadmin/perkara/phi/delete/{id}', 'SuperadminController@phidelete');
    Route::get('/superadmin/perkara/phi/sidang/{id}', 'SuperadminController@lanjutsidang');


    Route::get('/superadmin/sidang/pdn', 'SuperadminController@sidangpdn');
    Route::get('/superadmin/sidang/pdn/delete/{id}', 'SuperadminController@sidangpdndelete');
    Route::get('/superadmin/sidang/pdn/update_trk/{id}', 'SuperadminController@sidangpdnedit');

    Route::post('/superadmin/sidang/update_trk/{id}', 'SuperadminController@update_trk');

    Route::get('/superadmin/sidang/pdt', 'SuperadminController@sidangpdt');
    Route::get('/superadmin/sidang/pdt/delete/{id}', 'SuperadminController@sidangpdtdelete');
    Route::get('/superadmin/sidang/pdt/update_trk/{id}', 'SuperadminController@sidangpdtedit');

    Route::get('/superadmin/sidang/tpk', 'SuperadminController@sidangtpk');
    Route::get('/superadmin/sidang/tpk/delete/{id}', 'SuperadminController@sidangtpkdelete');
    Route::get('/superadmin/sidang/tpk/update_trk/{id}', 'SuperadminController@sidangtpkedit');

    Route::get('/superadmin/sidang/pehai', 'SuperadminController@sidangpehai');
    Route::get('/superadmin/sidang/pehai/delete/{id}', 'SuperadminController@sidangpehaidelete');
    Route::get('/superadmin/sidang/pehai/update_trk/{id}', 'SuperadminController@sidangpehaiedit');

    Route::get('/superadmin/cetakhakim', 'SuperadminController@cetakhakim');

    Route::get('/laporan', 'SuperadminController@laporan');
    Route::get('/laporan/hakim/cetak', 'SuperadminController@cetakHakim');
    Route::get('/laporan/jaksa/cetak', 'SuperadminController@cetakJaksa');
    Route::get('/laporan/panitera/cetak', 'SuperadminController@cetakPanitera');
    Route::get('/laporan/datapidana/cetak', 'SuperadminController@cetakDataPidana');
    Route::get('/laporan/dataperdata/cetak', 'SuperadminController@cetakDataPerdata');
    Route::get('/laporan/datatipikor/cetak', 'SuperadminController@cetakDataTipikor');
    Route::get('/laporan/dataphi/cetak', 'SuperadminController@cetakDataPhi');
    Route::get('/laporan/sidangpidana/cetak', 'SuperadminController@cetaksidangPidana');
    Route::get('/laporan/sidangperdata/cetak', 'SuperadminController@cetaksidangPerdata');
    Route::get('/laporan/sidangtipikor/cetak', 'SuperadminController@cetaksidangTipikor');
    Route::get('/laporan/sidangphi/cetak', 'SuperadminController@cetaksidangPhi');
});
