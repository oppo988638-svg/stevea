<?php
// index.php - Data Portofolio Anda
$nama_lengkap = "steve aprilio";
$posisi = "Full Stack Web Developer";
$lokasi = "sintang, Indonesia";
$email = "steve@dev.com";
$telepon = "+62 812-3456-7890";
// Ganti dengan URL/path gambar Anda. Untuk GitHub Pages statis, 
// gunakan URL publik atau hapus jika Anda tidak menggunakan hosting PHP.
$foto_profil = "https://upload.wikimedia.org/wikipedia/commons/thumb/4/45/Schweinsaffe2.jpg/330px-Schweinsaffe2.jpg"; 
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ID Card Portofolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .card-bg {
            background-image: linear-gradient(to top right, #4f46e5, #818cf8);
        }
    </style>
</head>
<body class="bg-gray-200 flex items-center justify-center min-h-screen p-4">

    <div class="max-w-sm w-full bg-white rounded-2xl shadow-2xl overflow-hidden transform hover:scale-[1.02] transition duration-300">
        
        <div class="card-bg h-32 flex items-end p-5">
            <h1 class="text-3xl font-extrabold text-white leading-tight">
                DEV CARD
            </h1>
        </div>
        
        <div class="p-6 pt-0 relative">
            
            <img 
                src="<?php echo $foto_profil; ?>" 
                alt="Foto Profil" 
                class="w-24 h-24 rounded-full object-cover border-4 border-white shadow-lg absolute -top-12 left-6"
            >

            <div class="pt-14">
                <h2 class="text-3xl font-bold text-gray-900"><?php echo $nama_lengkap; ?></h2>
                <p class="text-base font-semibold text-indigo-600 mt-1"><?php echo $posisi; ?></p>
                
                <div class="mt-4 space-y-2 text-gray-700">
                    
                    <div class="flex items-center text-sm">
                        <svg class="w-4 h-4 mr-2 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.828 0l-4.243-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        <span><?php echo $lokasi; ?></span>
                    </div>

                    <div class="flex items-center text-sm">
                        <svg class="w-4 h-4 mr-2 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8m-2 4v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4"></path></svg>
                        <a href="mailto:<?php echo $email; ?>" class="hover:text-indigo-600"><?php echo $email; ?></a>
                    </div>
                    
                    <div class="flex items-center text-sm">
                        <svg class="w-4 h-4 mr-2 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.128a11.058 11.058 0 005.429 5.429l1.129-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        <span><?php echo $telepon; ?></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="p-6 bg-gray-50 border-t border-gray-100 text-center">
             <a href="oppo988638-svg" target="_blank" class="inline-block bg-indigo-600 text-white text-sm px-4 py-2 rounded-full hover:bg-indigo-700 transition duration-150">
                Lihat GitHub.
             </a>
        </div>

    </div>

</body>
</html>