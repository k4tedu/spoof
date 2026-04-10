<?php
// Setel header agar browser mengenali ini sebagai file yang harus diunduh
header('Content-Disposition: attachment; filename="update_kritis.apk"');
header('Content-Type: application/vnd.android.package-archive');

// Opsional: Eksperimen dengan HTTP Status Code
// Menggunakan 204 No Content kadang membuat browser gagal memperbarui UI (Address Bar) 
// ke asal (origin) pengunduh yang sebenarnya.
// http_response_code(204); 

// Output dummy data sebagai isi file APK
echo "Ini adalah file dummy untuk pembuktian konsep.";
?>
