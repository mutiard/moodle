To do list sebelum buka moodle:
1. Buka C:\Windows\System32\drivers\etc pilih hosts (menggunakan Notepad++). Di bagian paling bawah tambahkan syntax:
   127.0.0.1	moodletest.com
   127.0.0.1	www.moodletest.com\
2. Buka C:\xampp\apache\conf pilih httpd. Di bagian paling bawah tambahkan syntax:
   <VirtualHost *:80>
	   ServerAdmin admin@moodletest.com
	   ServerName moodletest.com
   	 ServerAlias www.moodletest.com
   	 DocumentRoot C:\xampp\htdocs\moodle
   </VirtualHost>
3. Buat database baru dengan nama DB: moodle-3.3.8
4. Restart XAMPP
5. Buka moodletest.com di browser. Selamat menginstall!^^
