FoodyGoody
A website to search Recipe, Written in PHP, Javascript, and AJAX.
Dibuat untuk pemenuhan tugas besar Praktikum Pemrograman Web di semester dua.

1118021 - Michelle Natasha Irawan
1118023 - Daniel Alexander
1118049 - Nicholas Anthony


Pencapaian

Admin:
	-	Delete user
	-	Delete resep

User:
	-	Menulis resep
	-	Mengedit resep
	-	Memberi rate resep orang lain
	-	Mengomentari resep
	-	Add resep ke favorite(read later)
	-	History resep yang pernah dilihat(sesuai urutan melihat)
	-	Melihat resep yang pernah ditulis
	-	Edit profile
	-	Ganti profile picture
	-	Ganti password

Guest:
	-	Melihat resep yang ditulis orang tertentu
	-	Melihat resep favorit orang lain
	-	Menambah viewcount setiap kali melihat resep
	-	Mencari resep berdasarkan kata kunci
	-	Mencari resep berdasarkan kategori
	-	Mengurutkan resep berdasarkan jumlah rating atau jumlah views (ascending/descending) tanpa reload (AJAX) 

Fitur lain:
	-	Register(validasi email,username,password, username tidak boleh ada yang sama), jika register gagal akan dikembalikan & get data yang sudah diinput
	-	Login (admin atau user)
	-	Validasi upload gambar profile, cover resep, dan gambar per langkah resep(tidak boleh melebihi batas dan ekstensi tertentu)
	-	Dapat memilih type pengguna saat login
	-	Menampilkan komentar (show more&show less) menggunakan ajax


catatan: level atas mendapatkan semua fitur yang ada di bawahnya

------------------------- MEKANISME ------------------------------------------

1. Ketika pertamakali masuk, ketik di browser alamat berikut : localhost/tubes2/html/includes/inisialisasi.php untuk
melakukan inisialisasi database, tabel, dan resep-resep yang ada

2. posisi pengguna website saat ini adalah sebagai GUEST

2. Lakukan sign up (pilih apakah ingin sign up sebagai admin atau sebagai user) dengan
	username : nicholas
	password : (bebas apapun)
3. Karena kita sudah melakukan inisialisasi, maka akan terdapat banyak resep yang ditulis oleh akun nicholas

4. Karena resep diinisialisasi oleh akun nicholas, maka anda dapat melakukan delete pada resep-resep yang sudah ditulis,
caranya tinggal mengarahkan mouse ke foto profile, dan terdapat dropdown, lalu klik my recipe

5. Apabila membuat akun sebagai Admin, maka ia bisa melakukan delete recipe manapun yang user tulis. Fitur delete recipe terdapat di menu dropdown profile
