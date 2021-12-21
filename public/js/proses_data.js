var loading = `<div class="text-center"> 
                    <div class="pace-demo">
                        <div class="theme_squares"><div class="pace-progress" data-progress-text="60%" data-progress="60"></div><div class="pace_activity"></div></div>
                    </div> 
                </div>`;

function tambah_modal_indeks(token, modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Tambah Master Data Indeks');
    $(modal + 'Isi').html(loading);
    var act = '/admin/indeks/tambah_modal_indeks';
    $.post(act, {
            _token: token
        },
        function(data) {
            $(modal + 'Isi').html(data);
        });
}

function edit_modal_indeks(token, id, modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Edit Indeks');
    var act = '/admin/indeks/ubah';
    $.post(act, {
            _token: token,
            id: id
        },
        function(data) {
            // alert(data);
            $(modal + 'Isi').html(data);
        });
}

function hapus_data_indeks(token, id) {
    swal({
            title: "Yakin Untuk Menghapus Data Indeks?",
            text: "",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#FF5722",
            confirmButtonText: "Ya, Hapus!",
            cancelButtonText: "Tidak!",
            closeOnConfirm: false,
            closeOnCancel: true,
            showLoaderOnConfirm: true
        },
        function(isConfirm) {
            if (isConfirm) {
                var act = '/indeks/' + id + '/hapus';
                $.post(act, {
                        _token: token
                    },
                    function(data) {
                        swal({
                                title: "Data Terhapus!",
                                text: "",
                                confirmButtonColor: "#4CAF50",
                                type: "success"
                            },
                            function(isConfirm) {
                                if (isConfirm) {
                                    location.reload();
                                }
                            });
                    });
            }
        });
}

function tambah_modal_pemilik(token, modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Tambah Master Data Divisi / Bidang');
    $(modal + 'Isi').html(loading);
    var act = '/admin/pemilik/tambah_modal_pemilik';
    $.post(act, {
            _token: token
        },
        function(data) {
            $(modal + 'Isi').html(data);
        });
}

function edit_modal_pemilik(token, id, modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Edit Divisi / Bidang');
    var act = '/admin/pemilik/ubah';
    $.post(act, {
            _token: token,
            id: id
        },
        function(data) {
            // alert(data);
            $(modal + 'Isi').html(data);
        });
}

function hapus_data_pemilik(token, id) {
    swal({
            title: "Yakin Untuk Menghapus Data Divisi / Bidang?",
            text: "",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#FF5722",
            confirmButtonText: "Ya, Hapus!",
            cancelButtonText: "Tidak!",
            closeOnConfirm: false,
            closeOnCancel: true,
            showLoaderOnConfirm: true
        },
        function(isConfirm) {
            if (isConfirm) {
                var act = '/pemilik/' + id + '/hapus';
                $.post(act, {
                        _token: token
                    },
                    function(data) {
                        swal({
                                title: "Data Terhapus!",
                                text: "",
                                confirmButtonColor: "#4CAF50",
                                type: "success"
                            },
                            function(isConfirm) {
                                if (isConfirm) {
                                    location.reload();
                                }
                            });
                    });
            }
        });
}


function tambah_modal_jenis(token, modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Tambah Master Data Jenis Divisi / Bidang');
    $(modal + 'Isi').html(loading);
    var act = '/admin/jenis/tambah_modal_jenis';
    $.post(act, {
            _token: token
        },
        function(data) {
            $(modal + 'Isi').html(data);
        });
}

function edit_modal_jenis(token, id, modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Edit Jenis Divisi / Bidang');
    var act = '/admin/jenis/ubah';
    $.post(act, {
            _token: token,
            id: id
        },
        function(data) {
            // alert(data);
            $(modal + 'Isi').html(data);
        });
}

function hapus_data_jenis(token, id) {
    swal({
            title: "Yakin Untuk Menghapus Data Jenis Divisi / Bidang?",
            text: "",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#FF5722",
            confirmButtonText: "Ya, Hapus!",
            cancelButtonText: "Tidak!",
            closeOnConfirm: false,
            closeOnCancel: true,
            showLoaderOnConfirm: true
        },
        function(isConfirm) {
            if (isConfirm) {
                var act = '/jenis/' + id + '/hapus';
                $.post(act, {
                        _token: token
                    },
                    function(data) {
                        swal({
                                title: "Data Terhapus!",
                                text: "",
                                confirmButtonColor: "#4CAF50",
                                type: "success"
                            },
                            function(isConfirm) {
                                if (isConfirm) {
                                    location.reload();
                                }
                            });
                    });
            }
        });
}

function tambah_modal_lokasi(token, modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Tambah Master Data Lokasi Arsip');
    $(modal + 'Isi').html(loading);
    var act = '/admin/lokasi/tambah_modal_lokasi';
    $.post(act, {
            _token: token
        },
        function(data) {
            $(modal + 'Isi').html(data);
        });
}

function edit_modal_lokasi(token, id, modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Edit Lokasi Arsip');
    var act = '/admin/lokasi/ubah';
    $.post(act, {
            _token: token,
            id: id
        },
        function(data) {
            // alert(data);
            $(modal + 'Isi').html(data);
        });
}

function hapus_data_lokasi(token, id) {
    swal({
            title: "Yakin Untuk Menghapus Data Lokasi Arsip?",
            text: "",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#FF5722",
            confirmButtonText: "Ya, Hapus!",
            cancelButtonText: "Tidak!",
            closeOnConfirm: false,
            closeOnCancel: true,
            showLoaderOnConfirm: true
        },
        function(isConfirm) {
            if (isConfirm) {
                var act = '/lokasi/' + id + '/hapus';
                $.post(act, {
                        _token: token
                    },
                    function(data) {
                        swal({
                                title: "Data Terhapus!",
                                text: "",
                                confirmButtonColor: "#4CAF50",
                                type: "success"
                            },
                            function(isConfirm) {
                                if (isConfirm) {
                                    location.reload();
                                }
                            });
                    });
            }
        });
}


function tambah_modal_kondisi(token, modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Tambah Master Data Kondisi Arsip');
    $(modal + 'Isi').html(loading);
    var act = '/admin/kondisi/tambah_modal_kondisi';
    $.post(act, {
            _token: token
        },
        function(data) {
            $(modal + 'Isi').html(data);
        });
}

function edit_modal_kondisi(token, id, modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Edit Kondisi Arsip');
    var act = '/admin/kondisi/ubah';
    $.post(act, {
            _token: token,
            id: id
        },
        function(data) {
            // alert(data);
            $(modal + 'Isi').html(data);
        });
}

function hapus_data_kondisi(token, id) {
    swal({
            title: "Yakin Untuk Menghapus Data Kondisi Arsip?",
            text: "",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#FF5722",
            confirmButtonText: "Ya, Hapus!",
            cancelButtonText: "Tidak!",
            closeOnConfirm: false,
            closeOnCancel: true,
            showLoaderOnConfirm: true
        },
        function(isConfirm) {
            if (isConfirm) {
                var act = '/kondisi/' + id + '/hapus';
                $.post(act, {
                        _token: token
                    },
                    function(data) {
                        swal({
                                title: "Data Terhapus!",
                                text: "",
                                confirmButtonColor: "#4CAF50",
                                type: "success"
                            },
                            function(isConfirm) {
                                if (isConfirm) {
                                    location.reload();
                                }
                            });
                    });
            }
        });
}


function div_tabel_data_arsip(token, target) {

    var data_indeks = $('#data_indeks').val();
    var data_lokasi = $('#data_lokasi').val();
    var data_kondisi = $('#data_kondisi').val();

    $(target).html(loading);
    var act = '/admin/div_tabel_data_arsip';
    $.post(act, {
            _token: token,
            data_indeks: data_indeks,
            data_lokasi: data_lokasi,
            data_kondisi: data_kondisi
        },
        function(data) {
            // alert(data);
            $(target).html(data);
        })
}

function tambah_modal_kategori(token, modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Tambah Master Data Kategori');
    $(modal + 'Isi').html(loading);
    var act = '/admin/kategori/tambah_modal_kategori';
    $.post(act, {
            _token: token
        },
        function(data) {
            $(modal + 'Isi').html(data);
        });
}

function edit_modal_kategori(token, id, modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Edit Kategori');
    var act = '/admin/kategori/ubah';
    $.post(act, {
            _token: token,
            id: id
        },
        function(data) {
            // alert(data);
            $(modal + 'Isi').html(data);
        });
}

function hapus_data_kategori(token, id) {
    swal({
            title: "Yakin Untuk Menghapus Data Kategori?",
            text: "",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#FF5722",
            confirmButtonText: "Ya, Hapus!",
            cancelButtonText: "Tidak!",
            closeOnConfirm: false,
            closeOnCancel: true,
            showLoaderOnConfirm: true
        },
        function(isConfirm) {
            if (isConfirm) {
                var act = '/kategori/' + id + '/hapus';
                $.post(act, {
                        _token: token
                    },
                    function(data) {
                        swal({
                                title: "Data Terhapus!",
                                text: "",
                                confirmButtonColor: "#4CAF50",
                                type: "success"
                            },
                            function(isConfirm) {
                                if (isConfirm) {
                                    location.reload();
                                }
                            });
                    });
            }
        });
}

function tambah_data_arsip_inactive(token, modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Tambah Master Data Arsip Inactive');
    $(modal + 'Isi').html(loading);
    var act = '/admin/data_arsip_inactive/tambah_modal_data_arsip_inactive';
    $.post(act, {
            _token: token
        },
        function(data) {
            $(modal + 'Isi').html(data);
        });
}

function div_tabel_data_arsip_inactive(token, target, id) {

    var no_akta = $('#no_akta').val();
    var nama_bayi = $('#nama_bayi').val();
    var kelurahan = $('#nama_kelurahan').val();
    var kecamatan = $('#nama_kecamatan').val();
    var tahun_mulai = $('#tahun_mulai').val();
    var tahun_selesai = $('#tahun_selesai').val();


    $(target).html(loading);
    var act = '/admin/div_tabel_data_arsip_inactive';
    $.post(act, {
            _token: token,
            no_akta: no_akta,
            nama_bayi: nama_bayi,
            kelurahan: kelurahan,
            kelurahan: kelurahan,
            tahun_mulai: tahun_mulai,
            tahun_selesai: tahun_selesai
        },
        function(data) {
            // alert(data);
            $(target).html(data);
        })
}

function delete_data_arsip_inactive_tabel(token, target) {

    var no_akta = $('#no_akta').val();
    var nama_bayi = $('#nama_bayi').val();
    var kelurahan = $('#nama_keluarahan').val();
    var kecamatan = $('#nama_kecamatan').val();

    $(target).html(loading);

    swal({
            title: "Anda yakin menghapus data ini ?",
            text: "",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#FF5722",
            confirmButtonText: "Ya, Hapus!",
            cancelButtonText: "Tidak!",
            closeOnConfirm: false,
            closeOnCancel: true,
            showLoaderOnConfirm: true
        },
        function(isConfirm) {
            if (isConfirm) {
                var act = '/admin/delete_data_arsip_inactive_tabel';
                $.post(act, {
                        _token: token,
                        no_akta: no_akta,
                        nama_bayi: nama_bayi,
                        kelurahan: kelurahan,
                        kecamatan: kecamatan
                    },
                    function(data) {
                        swal({
                                title: "Data Terhapus!",
                                text: "",
                                confirmButtonColor: "#4CAF50",
                                type: "success"
                            },
                            function(isConfirm) {
                                if (isConfirm) {
                                    div_tabel_data_arsip_inactive(token, target);
                                    $('#div_tabel_data_arsip').html(data);
                                }
                            });
                    });
            }
        })
}

function modal_upload_data_arsip_inactive(token, id, modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Upload Artikel');
    var act = '/admin/data_arsip_inactive/modal_upload_data_arsip_inactive';
    // var act = '/beli_keu/' + id + '/verif';
    $.post(act, {
            _token: token,
            id: id
        },
        function(data) {
            //alert(data);
            $(modal + 'Isi').html(data);
        });
}

function modal_upload_data_arsip_inactive_isi(token, id, target) {
    $(target).html(loading);
    var act = '/modal_upload_data_arsip_inactive_isi';
    // var act = '/beli_keu/' + id + '/verif';
    $.post(act, {
            _token: token,
            id: id
        },
        function(data) {
            //alert(data);
            $(target).html(data);
        });
}

function hapus_upload_data_arsip_inactive(token, id, id_data_arsip_inactive, target) {
    swal({
            title: "Anda yakin menghapus data ini ?",
            text: "",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#FF5722",
            confirmButtonText: "Ya, Hapus!",
            cancelButtonText: "Tidak!",
            closeOnConfirm: false,
            closeOnCancel: true,
            showLoaderOnConfirm: true
        },
        function(isConfirm) {
            if (isConfirm) {
                var act = '/admin/data_arsip_inactive_upload/hapus';
                $.post(act, {
                        _token: token,
                        id: id
                    },
                    function(data) {
                        swal({
                                title: "Data Terhapus!",
                                text: "",
                                confirmButtonColor: "#4CAF50",
                                type: "success"
                            },
                            function(isConfirm) {
                                if (isConfirm) {
                                    modal_upload_data_arsip_inactive_isi(token, id_data_arsip_inactive, target);
                                }
                            });
                    });
            }
        })
}

function edit_modal_data_arsip_inactive(token, id, modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Edit Arsip Inactive');
    var act = '/admin/data_arsip_inactive/ubah';
    $.post(act, {
            _token: token,
            id: id
        },
        function(data) {
            // alert(data);
            $(modal + 'Isi').html(data);
        });
}

function import_excel(token) {
    swal({
        title: "COMING SOON",
        text: "",
        confirmButtonColor: "#4CAF50",
        type: "warning"
    });
}

function hapus_data_arsip_inactive(token, id) {
    swal({
            title: "Yakin Untuk Menghapus Data Arsip Inaktif?",
            text: "",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#FF5722",
            confirmButtonText: "Ya, Hapus!",
            cancelButtonText: "Tidak!",
            closeOnConfirm: false,
            closeOnCancel: true,
            showLoaderOnConfirm: true
        },
        function(isConfirm) {
            if (isConfirm) {
                var act = '/data_arsip_inactive/' + id + '/hapus';
                $.post(act, {
                        _token: token
                    },
                    function(data) {
                        swal({
                                title: "Data Terhapus!",
                                text: "",
                                confirmButtonColor: "#4CAF50",
                                type: "success"
                            },
                            function(isConfirm) {
                                if (isConfirm) {
                                    $('.btn_tampilkan').click();
                                }
                            });
                    });
            }
        });
}


function div_tabel_laporan_arsip(token, target) {
    var no_akta = $('#no_akta').val();
    var nama_bayi = $('#nama_bayi').val();
    var kelurahan = $('#nama_kelurahan').val();
    var kecamatan = $('#nama_kecamatan').val();
    var tahun_mulai = $('#tahun_mulai').val();
    var tahun_selesai = $('#tahun_selesai').val();
    $(target).html(loading);
    var act = '/admin/div_tabel_laporan_arsip';
    $.post(act, {
            _token: token,
            no_akta: no_akta,
            nama_bayi: nama_bayi,
            kelurahan: kelurahan,
            tahun_mulai: tahun_mulai,
            tahun_selesai: tahun_selesai,
            kecamatan: kecamatan
        },
        function(data) {
            // alert(data);
            $(target).html(data);
        })
}

function div_grafik_barang_masuk(token, target) {
    $(target).html(loading);
    var act = '/admin/grafik_kondisi';
    $.post(act, {
            _token: token
        },
        function(data1) {
            //alert(data1);
            $(target).html(data1);
        });
}

function div_grafik_media(token, target) {
    $(target).html(loading);
    var act = '/admin/div_grafik_media';
    $.post(act, {
            _token: token
        },
        function(data1) {
            //alert(data1);
            $(target).html(data1);
        });
}

function tambah_modal_user(token, modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Tambah Master Data User');
    $(modal + 'Isi').html(loading);
    var act = '/admin/user/tambah_modal_user';
    $.post(act, {
            _token: token
        },
        function(data) {
            $(modal + 'Isi').html(data);
        });
}

function edit_modal_user(token, id, modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Edit User');
    var act = '/admin/user/ubah';
    $.post(act, {
            _token: token,
            id: id
        },
        function(data) {
            // alert(data);
            $(modal + 'Isi').html(data);
        });
}

function hapus_data_user(token, id) {
    swal({
            title: "Yakin Untuk Menghapus Data User?",
            text: "",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#FF5722",
            confirmButtonText: "Ya, Hapus!",
            cancelButtonText: "Tidak!",
            closeOnConfirm: false,
            closeOnCancel: true,
            showLoaderOnConfirm: true
        },
        function(isConfirm) {
            if (isConfirm) {
                var act = '/user/' + id + '/hapus';
                $.post(act, {
                        _token: token
                    },
                    function(data) {
                        swal({
                                title: "Data Terhapus!",
                                text: "",
                                confirmButtonColor: "#4CAF50",
                                type: "success"
                            },
                            function(isConfirm) {
                                if (isConfirm) {
                                    location.reload();
                                }
                            });
                    });
            }
        });
}

function div_kelurahan(token, target, form_id) {
    var id_kecamatan = $(form_id).find('select[name="id_kecamatan"] option:selected').val();
    var act = '/admin/data_arsip_inactive/div_kelurahan';

    $(form_id).find('#kelurahan_id').html('<option value="">Waiting Data ...</option>');
    $.post(act, {
            _token: token,
            id_kecamatan: id_kecamatan
        },
        function(data) {
            $('#kelurahan_id').prop("disabled", false);
            $(form_id).find('#kelurahan_id').html(data);
            $(form_id).find('#kelurahan_id').trigger('change');
        });
    var cur_value = $(form_id).find('select[name="id_kecamatan"] option:selected').text();
    $(form_id).find('#nama_kecamatan').val(cur_value);

}

function comment_modal_data_arsip_inactive(token, id, modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Komentar Arsip');
    var act = '/admin/data_arsip_inactive/comment';
    $.post(act, {
            _token: token,
            id: id
        },
        function(data) {
            // alert(data);
            $(modal + 'Isi').html(data);
        });
}