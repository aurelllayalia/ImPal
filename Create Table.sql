CREATE TABLE manager (
    id_manager CHAR(5) PRIMARY KEY,
    user_manager VARCHAR2(10),
    pass_manager VARCHAR2(10),
    nama_manager VARCHAR2(30),
    kontak_manager NUMBER
);

CREATE TABLE barang (
    id_barang CHAR(5) PRIMARY KEY,
    nama_barang VARCHAR2(30),
    harga_barang VARCHAR2(15),
    jenis_barang VARCHAR2(30),
    jumlah_barang VARCHAR2(15)
);

CREATE TABLE laporan (
    no_laporan CHAR(5) PRIMARY KEY,
    tanggal DATE,
    pengirim VARCHAR2(30),
    penerima VARCHAR2(30),
    id_manager CHAR(5) REFERENCES manager(id_manager)
);

CREATE TABLE staff (
    id_staff CHAR(5) PRIMARY KEY,
    user_staff VARCHAR2(10),
    pass_staff VARCHAR2(10),
    nama_staff VARCHAR2(30),
    kontak_staff NUMBER,
    id_manager CHAR(5) REFERENCES manager(id_manager)
);

CREATE TABLE supplier (
    id_supplier CHAR(5) PRIMARY KEY,
    user_supplier VARCHAR2(10),
    pass_supplier VARCHAR2(10),
    nama_supplier VARCHAR2(30),
    kontak_supplier NUMBER,
    id_staff CHAR(5) REFERENCES staff(id_staff)
);

CREATE TABLE meminta (
    id_request CHAR(5),
    keterangan VARCHAR2(50),
    konfirmasi VARCHAR2(10),
    id_supplier CHAR(5) REFERENCES supplier(id_supplier),
    id_barang CHAR(5) REFERENCES barang(id_barang),
    PRIMARY KEY (id_request, id_supplier, id_barang)
);