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


INSERT INTO manager (id_manager,user_manager,pass_manager,nama_manager,kontak_manager) VALUES ('MN001','syifak','a12340','Syifa Khairunnisa',081211003970);
INSERT INTO manager (id_manager,user_manager,pass_manager,nama_manager,kontak_manager) VALUES ('MN002','labibl','a12341','Labib Lukman',085779228484);
INSERT INTO manager (id_manager,user_manager,pass_manager,nama_manager,kontak_manager) VALUES ('MN003','dimass','a12342','Dimas Setiawan',081585811233);
INSERT INTO manager (id_manager,user_manager,pass_manager,nama_manager,kontak_manager) VALUES ('MN004','diraa','a12343','Dira Afwa',082451573458);
INSERT INTO manager (id_manager,user_manager,pass_manager,nama_manager,kontak_manager) VALUES ('MN005','nauffanm','a12344','Nauffan Mufti',085634234966);
INSERT INTO manager (id_manager,user_manager,pass_manager,nama_manager,kontak_manager) VALUES ('MN006','christianh','a12345','Christian Harry',082244765733);
INSERT INTO manager (id_manager,user_manager,pass_manager,nama_manager,kontak_manager) VALUES ('MN007','asiyahp','a12346','Aisyah Putri',081635278890);
INSERT INTO manager (id_manager,user_manager,pass_manager,nama_manager,kontak_manager) VALUES ('MN008','rizalk','a12347','Rizal Kusuma',081273689099);
INSERT INTO manager (id_manager,user_manager,pass_manager,nama_manager,kontak_manager) VALUES ('MN009','davida','a12348','David Adi',089744528391);
INSERT INTO manager (id_manager,user_manager,pass_manager,nama_manager,kontak_manager) VALUES ('MN010','brigitat','a12349','Brigita Tenggehi',088567456678);

INSERT INTO barang (id_barang,nama_barang,harga_barang,jenis_barang,jumlah_barang) VALUES ('BR001','TV SAMSUNG','12000000','Elektronik','5');
INSERT INTO barang (id_barang,nama_barang,harga_barang,jenis_barang,jumlah_barang) VALUES ('BR002','Dress H&M','199000','Pakaian Wanita','12');
INSERT INTO barang (id_barang,nama_barang,harga_barang,jenis_barang,jumlah_barang) VALUES ('BR003','Kasur King Koil','8000000','Meubel','3');
INSERT INTO barang (id_barang,nama_barang,harga_barang,jenis_barang,jumlah_barang) VALUES ('BR004','Bedak Make Over','125000','Kecantikan','100');
INSERT INTO barang (id_barang,nama_barang,harga_barang,jenis_barang,jumlah_barang) VALUES ('BR005','Sepeda Polygon','1200000','Olahraga','10');
INSERT INTO barang (id_barang,nama_barang,harga_barang,jenis_barang,jumlah_barang) VALUES ('BR006','Ban Mobil Dunlop','1000000','Otomotif','4');
INSERT INTO barang (id_barang,nama_barang,harga_barang,jenis_barang,jumlah_barang) VALUES ('BR007','Cokelat Cadburry','50000','Makanan','150');
INSERT INTO barang (id_barang,nama_barang,harga_barang,jenis_barang,jumlah_barang) VALUES ('BR008','Sampoo Sunsilk','25000','Kesehatan','300');
INSERT INTO barang (id_barang,nama_barang,harga_barang,jenis_barang,jumlah_barang) VALUES ('BR009','Sepatu Crocodile','2300000','Pakaian Pria','60');
INSERT INTO barang (id_barang,nama_barang,harga_barang,jenis_barang,jumlah_barang) VALUES ('BR010','Kacamata Gucci','700000','Aksesoris Wanita','8');

INSERT INTO laporan (no_laporan,tanggal,pengirim,penerima,id_manager) VALUES ('L001','01-09-2019','Aqmarina Alifah','Syifa Khairunnisa','MN001');
INSERT INTO laporan (no_laporan,tanggal,pengirim,penerima,id_manager) VALUES ('L002','02-09-2019','Naufal Rabbani','Labib Lukman','MN002');
INSERT INTO laporan (no_laporan,tanggal,pengirim,penerima,id_manager) VALUES ('L003','03-09-2019','Rodi Akbar','Dimas Setiawan','MN003');
INSERT INTO laporan (no_laporan,tanggal,pengirim,penerima,id_manager) VALUES ('L004','04-09-2019','Esa Assalam','Dira Afwa','MN004');
INSERT INTO laporan (no_laporan,tanggal,pengirim,penerima,id_manager) VALUES ('L005','05-09-2019','Rizky Wira','Nauffan Mufti','MN005');
INSERT INTO laporan (no_laporan,tanggal,pengirim,penerima,id_manager) VALUES ('L006','06-09-2019','Marion Jola','Christian Hari','MN006');
INSERT INTO laporan (no_laporan,tanggal,pengirim,penerima,id_manager) VALUES ('L007','07-09-2019','Farraz Daffa','Aisyah Putri','MN007');
INSERT INTO laporan (no_laporan,tanggal,pengirim,penerima,id_manager) VALUES ('L008','08-09-2019','Wishnu Dwi','Rizal Kusuma','MN008');
INSERT INTO laporan (no_laporan,tanggal,pengirim,penerima,id_manager) VALUES ('L009','09-09-2019','Devi Wijayanti','David Adi','MN009');
INSERT INTO laporan (no_laporan,tanggal,pengirim,penerima,id_manager) VALUES ('L010','10-09-2019','Novia Ruselia','Brigita Tenggehi','MN010');

INSERT INTO staff (id_staff,user_staff,pass_staff,nama_staff,kontak_staff,id_manager) VALUES ('ST001','djokos','b12340','Djoko Sutoyo',081345631287,'MN001');
INSERT INTO staff (id_staff,user_staff,pass_staff,nama_staff,kontak_staff,id_manager) VALUES ('ST002','rhasna','b12341','Raden Hasna',081499876645,'MN002');
INSERT INTO staff (id_staff,user_staff,pass_staff,nama_staff,kontak_staff,id_manager) VALUES ('ST003','farizana','b12342','Farizan Afif',082287560909,'MN003');
INSERT INTO staff (id_staff,user_staff,pass_staff,nama_staff,kontak_staff,id_manager) VALUES ('ST004','adityak','b12343','Aditya Kuncoro',081344758845,'MN004');
INSERT INTO staff (id_staff,user_staff,pass_staff,nama_staff,kontak_staff,id_manager) VALUES ('ST005','saminemn','b12344','Saminem Nur',081395018881,'MN005');
INSERT INTO staff (id_staff,user_staff,pass_staff,nama_staff,kontak_staff,id_manager) VALUES ('ST006','jaffrudin','b12345','Jafrudin Soleh',081344563312,'MN006');
INSERT INTO staff (id_staff,user_staff,pass_staff,nama_staff,kontak_staff,id_manager) VALUES ('ST007','agusk','b12346','Agus Kandangwesi',081311324475,'MN007');
INSERT INTO staff (id_staff,user_staff,pass_staff,nama_staff,kontak_staff,id_manager) VALUES ('ST008','tendik','b12347','Tendi Kusmawan',081277659991,'MN008');
INSERT INTO staff (id_staff,user_staff,pass_staff,nama_staff,kontak_staff,id_manager) VALUES ('ST009','sudiros','b12348','Sudiro Shiddiq',087711883955,'MN009');
INSERT INTO staff (id_staff,user_staff,pass_staff,nama_staff,kontak_staff,id_manager) VALUES ('ST010','anibud','b12349','Ani Budiani',085721212121,'MN010');

INSERT INTO supplier (id_supplier,user_staff,pass_supplier,nama_supplier,kontak_supplier,id_staff) VALUES ('SP001','ramadhang','c12340','Ramadhan Gani',086344263768,'ST001');
INSERT INTO supplier (id_supplier,user_staff,pass_supplier,nama_supplier,kontak_supplier,id_staff) VALUES ('SP002','aryaw','c12341','Arya Wahyu',089234354321,'ST002');
INSERT INTO supplier (id_supplier,user_staff,pass_supplier,nama_supplier,kontak_supplier,id_staff) VALUES ('SP003','sudars','c12342','Sudarsono Bambang',082135436457,'ST003');
INSERT INTO supplier (id_supplier,user_staff,pass_supplier,nama_supplier,kontak_supplier,id_staff) VALUES ('SP004','sria','c12343','Sri Ani',089345252345,'ST004');
INSERT INTO supplier (id_supplier,user_staff,pass_supplier,nama_supplier,kontak_supplier,id_staff) VALUES ('SP005','kuntor','c12344','Kuntoro Agung',088835346342,'ST005');
INSERT INTO supplier (id_supplier,user_staff,pass_supplier,nama_supplier,kontak_supplier,id_staff) VALUES ('SP006','megawa','c12345','Megawati Soekarno',087712435425,'ST006');
INSERT INTO supplier (id_supplier,user_staff,pass_supplier,nama_supplier,kontak_supplier,id_staff) VALUES ('SP007','sukmaw','c12346','Sukma Wati',087223534656,'ST007');
INSERT INTO supplier (id_supplier,user_staff,pass_supplier,nama_supplier,kontak_supplier,id_staff) VALUES ('SP008','sudarjow','c12347','Sudarjo Wono',089234256356,'ST008');
INSERT INTO supplier (id_supplier,user_staff,pass_supplier,nama_supplier,kontak_supplier,id_staff) VALUES ('SP009','haikall','c12348','Haikal Limansyah',082111462442,'ST009');
INSERT INTO supplier (id_supplier,user_staff,pass_supplier,nama_supplier,kontak_supplier,id_staff) VALUES ('SP010','irsyadr','c12349','Irsyad Rafi',081323758863,'ST010');

INSERT INTO meminta (id_request,keterangan,konfirmasi,id_supplier,id_barang) VALUES ('RQ001','Kondisi Baik','Terkirim','SP001','BR001');
INSERT INTO meminta (id_request,keterangan,konfirmasi,id_supplier,id_barang) VALUES ('RQ002','Kondisi Baik','Sedang diproses','SP002','BR002');
INSERT INTO meminta (id_request,keterangan,konfirmasi,id_supplier,id_barang) VALUES ('RQ003','Kondisi Buruk','Dibatalkan','SP003','BR003');
INSERT INTO meminta (id_request,keterangan,konfirmasi,id_supplier,id_barang) VALUES ('RQ004','Kondisi Baik','Terkirim','SP004','BR004');
INSERT INTO meminta (id_request,keterangan,konfirmasi,id_supplier,id_barang) VALUES ('RQ005','Kondisi Baik','Diterima','SP005','BR005');
INSERT INTO meminta (id_request,keterangan,konfirmasi,id_supplier,id_barang) VALUES ('RQ006','Kondisi Baik','Diterima','SP006','BR006');
INSERT INTO meminta (id_request,keterangan,konfirmasi,id_supplier,id_barang) VALUES ('RQ007','Kondisi Baik','Sedang diproses','SP007','BR007');
INSERT INTO meminta (id_request,keterangan,konfirmasi,id_supplier,id_barang) VALUES ('RQ008','Kondisi Buruk','Dibatalkan','SP008','BR008');
INSERT INTO meminta (id_request,keterangan,konfirmasi,id_supplier,id_barang) VALUES ('RQ009','Kondisi Buruk','Dibatalkan','SP009','BR009');
INSERT INTO meminta (id_request,keterangan,konfirmasi,id_supplier,id_barang) VALUES ('RQ010','Kondisi Baik','Sedang diproses','SP010','BR010');
INSERT INTO meminta (id_request,keterangan,konfirmasi,id_supplier,id_barang) VALUES ('RQ011','Kondisi Baik','Terkirim','SP011','BR011');
INSERT INTO meminta (id_request,keterangan,konfirmasi,id_supplier,id_barang) VALUES ('RQ012','Kondisi Baik','Sedang diproses','SP012','BR012');
INSERT INTO meminta (id_request,keterangan,konfirmasi,id_supplier,id_barang) VALUES ('RQ013','Kondisi Baik','Diterima','SP013','BR013');
INSERT INTO meminta (id_request,keterangan,konfirmasi,id_supplier,id_barang) VALUES ('RQ014','Kondisi Baik','Sedang diproses','SP014','BR014');
INSERT INTO meminta (id_request,keterangan,konfirmasi,id_supplier,id_barang) VALUES ('RQ015','Kondisi Baik','Terkirim','SP015','BR015');
INSERT INTO meminta (id_request,keterangan,konfirmasi,id_supplier,id_barang) VALUES ('RQ016','Kondisi Baik','Sedang diproses','SP016','BR016');
INSERT INTO meminta (id_request,keterangan,konfirmasi,id_supplier,id_barang) VALUES ('RQ017','Kondisi Baik','Diterima','SP017','BR017');
INSERT INTO meminta (id_request,keterangan,konfirmasi,id_supplier,id_barang) VALUES ('RQ018','Kondisi Baik','Sedang diproses','SP018','BR018');
INSERT INTO meminta (id_request,keterangan,konfirmasi,id_supplier,id_barang) VALUES ('RQ019','Kondisi Baik','Diterima','SP019','BR019');
INSERT INTO meminta (id_request,keterangan,konfirmasi,id_supplier,id_barang) VALUES ('RQ020','Kondisi Baik','Terkirim','SP020','BR020');


SELECT id_manager, user_manager
FROM manager;

SELECT *
FROM manager
WHERE id_manager = 'MN001';

SELECT id_manager
FROM manager
WHERE user_manager = 'christianh';

SELECT id_staff
FROM staff JOIN manager USING (id_manager)
WHERE id_manager = 'MN003';

SELECT no_laporan, tanggal
WHERE pengirim = 'Aqmarina Alifah';