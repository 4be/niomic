SELECT * FROM districts
SELECT * FROM provinces
SELECT * FROM regencies
SELECT * FROM villages

ALTER TABLE provinces RENAME TO provinsi;
ALTER TABLE regencies RENAME TO kabupaten_kota;
ALTER TABLE districts RENAME TO kecamatan;
ALTER TABLE villages RENAME TO desa;

SELECT SUBSTRING(desa.id,1,7) AS id_desa, desa.name AS desa, provinsi.name AS provinsi
FROM desa
JOIN provinsi ON SUBSTRING(desa.id,1,2) = provinsi.id 

SELECT regency_id AS id_kecamatan, kecamatan.name AS kecamatan, provinsi.name FROM desa 
JOIN kecamatan ON desa.district_id = kecamatan.id 
JOIN kabupaten_kota ON kecamatan.regency_id = kabupaten_kota.id 
JOIN provinsi ON provinsi.id = kabupaten_kota.province_id
WHERE kecamatan.name = "TEUPAH SELATAN"

SELECT kecamatan.regency_id  AS id_kabupaten_kota , kabupaten_kota.name , provinsi.name FROM desa 
JOIN kecamatan ON desa.district_id = kecamatan.id 
JOIN kabupaten_kota ON kecamatan.regency_id = kabupaten_kota.id 
JOIN provinsi ON provinsi.id = kabupaten_kota.province_id
WHERE kecamatan.regency_id = 1101