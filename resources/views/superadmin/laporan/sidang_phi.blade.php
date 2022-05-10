<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta content="en-us" http-equiv="Content-Language" />
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>Untitled 1</title>
    {{-- <style type="text/css">
        .auto-style1 {
            font-family: Arial, Helvetica, sans-serif;
            font-size: x-small;
        }
    </style> --}}
    <style>
        @page {
            margin-top: 80px;
            margin-left: 50px;
        }

        header {
            position: fixed;
            top: -60px;
            left: 0px;
            right: 0px;
            height: 0px;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 12px;
            /** Extra personal styles **/
            /* background-color: #03a9f4;
            color: white;
            text-align: center; 
            line-height: 35px;*/
        }

        tr,
        th,
            {
            border: 2px solid #000;
            font-size: 10px;
            font-family: Arial, Helvetica, sans-serif;
        }

        td {
            font-weight: bold;
            border: 2px solid #000;
            font-size: 10px;
        }

        footer {
            position: fixed;
            bottom: -60px;
            left: 0px;
            right: 0px;
            height: 50px;
            font-size: 8px;
            font-family: Arial, Helvetica, sans-serif;
            /** Extra personal styles **/
            /* background-color: #03a9f4;
            color: white;
            text-align: center;
            line-height: 35px; */
        }
    </style>
</head>

<body>
    <header>
        <table border="0" width="100%">
            <tr>
                <td style="border: 0px;" align="right" width="30%">
                    <img src="http://evakip.pt-banjarmasin.go.id/dist/img/logo.png" width="40px" height="50px">
                </td>
                <td style="border: 0px;" valign="top" align="left" width="80%">
                    <span style="font-size: 18px;"><strong>PENGADILAN NEGERI BANJARMASIN I A</strong></span><br />
                    <span style="font-size: 12px;"><strong>Jl. Mayor Jenderal D.I Panjaitan no 27
                            Banjarmasin, Telp : 0511-3352859</strong></span>
                </td>
            </tr>
        </table>
        <hr>
        <p><span class="auto-style1"><strong>LAPORAN SIDANG PHI </strong></span></p>
    </header>
    <footer>
        <hr>
        <p>Tanggal Cetak : {{\Carbon\Carbon::now()->format('d-m-Y H:i:s')}}
        </p>
    </footer>
    <br />
    <br />
    <br />
    <main>
        <table cellpadding="5" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal <br />Sidang</th>
                    <th>Nomor <br />Perkara</th>
                    <th>Nama <br />Penggugat</th>
                    <th>Nama <br />Tergugat</th>
                    <th>Judul <br /> Perkara</th>
                    <th>Hakim</th>
                    <th>Jaksa</th>
                    <th>Panitera</th>
                    <th>Ruangan</th>
                    <th>Putusan</th>
                </tr>
            </thead>
            <tbody>
                @php
                $no = 1;
                @endphp
                @foreach ($data as $item)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$item->tanggal_sidang}}</td>
                    <td>PDN0.{{$item->perkara->id}}</td>
                    <td>{{$item->perkara->nama_penggugat}}</td>
                    <td>{{$item->perkara->nama_tergugat}}</td>
                    <td>{{$item->perkara->judul_perkara}}</td>
                    <td>{{$item->perkara->hakim == null ? '' :$item->perkara->hakim->nama}}</td>
                    <td>{{$item->perkara->jaksa == null ? '' :$item->perkara->jaksa->nama}}</td>
                    <td>{{$item->perkara->panitera == null ? '' :$item->perkara->panitera->nama}}</td>
                    <td>{{$item->ruangan}}</td>
                    <td>{{$item->keputusan}}</td>
                </tr>
                @endforeach

            </tbody>
        </table>
        <br />
        <table width="100%" border="0">
            <tr style="border: 0px;">
                <td width="70%" style="border: 0px;"></td>
                <td width="30%" style="border: 0px;">
                    <font size="12px">
                        Banjarmasin,.................<br />
                        Pengadilan Negeri Banjarmasin
                        <br /><br /><br /><br /><br />
                        .............................
                    </font>
                </td>
            </tr>
        </table>

    </main>
</body>

</html>