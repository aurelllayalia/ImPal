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